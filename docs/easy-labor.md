2. Danh sách chức năng chi tiết của hệ thống quản lý lao động thời vụ
A. Phân hệ Người lao động (Worker App)
Để thu hút lao động thời vụ, giao diện cần cực kỳ đơn giản, ít bước.

Đăng ký nhanh: Chỉ cần Số điện thoại (OTP), Họ tên, Năm sinh và ảnh chụp 2 mặt CCCD (dùng OCR để tự điền thông tin).

Hồ sơ điện tử: Lưu trữ lịch sử làm việc, đánh giá từ các kho/xưởng.

Chợ việc làm (Job Board): Danh sách các ca đang tuyển, lọc theo khoảng cách, mức lương, hoặc công ty.

Đăng ký ca (One-tap Apply): Nhấn nút ứng tuyển và chờ duyệt.

Lịch làm việc cá nhân: Xem danh sách các ca đã được duyệt, sắp tới và đã hoàn thành.

Ví thu nhập: Theo dõi số tiền đã kiếm được, số tiền tạm ứng và lịch sử nhận lương.

B. Phân hệ Công ty quản lý (Agency/Provider Portal)
Quản lý đối tác (Client Management): Danh sách các nhà máy/kho xưởng khách hàng.

Quản lý ca làm (Shift Management):

Tạo ca hàng loạt (Bulk create).

Thiết lập định mức: số lượng nam/nữ, yêu cầu đặc biệt (biết lái xe nâng, có chứng chỉ an toàn...).

Điều phối (Matching & Approval): * Danh sách chờ duyệt ứng viên.

Tính năng "Điều động nhanh": Gửi thông báo đến những người ở gần khu vực đó.

Quản lý chấm công (Attendance):

Quản lý mã QR check-in/out tại cổng nhà máy.

Xác nhận giờ tăng ca (OT).

Quản lý tài chính: * Tự động tính lương dựa trên đơn giá ca làm và giờ thực tế.

Xuất file Excel thanh toán lương.

3. Các chức năng gợi ý thêm (Value-added Features)
Để cạnh tranh và tăng tính hiệu quả, bạn nên bổ sung các tính năng "sát sườn" sau:

1. Hệ thống Rating & Blacklist
Đánh giá 2 chiều: Nhà máy đánh giá lao động (chăm chỉ, đúng giờ) và lao động đánh giá môi trường làm việc.

Blacklist: Tự động chặn những người lao động "bùng" ca (no-show) không lý do quá 3 lần.

2. Quản lý Tạm ứng lương (Instant Pay)
Đặc thù lao động thời vụ rất cần tiền mặt. Hệ thống hỗ trợ quản lý cho phép lao động rút trước một phần lương (ví dụ 50%) ngay sau khi kết thúc ca làm việc được xác nhận.

3. Check-in bằng khuôn mặt hoặc QR Location-based
Để tránh trường hợp điểm danh hộ, ứng dụng có thể yêu cầu chụp ảnh selfie tại vị trí nhà máy (sử dụng GPS) khi bắt đầu ca.

4. Quản lý Trang thiết bị & Đồng phục
Theo dõi xem người lao động đã mượn thẻ đeo, áo phản quang hay bảo hộ lao động chưa để trừ tiền cọc hoặc thu hồi khi hết ca.

5. Thông báo qua Zalo OA/SMS
Tích hợp Zalo Notification Service (ZNS) để nhắc lịch làm việc trước 2 tiếng hoặc thông báo có tiền lương về ví.

4. Cấu trúc dữ liệu chính (Data Schema)
Entity	Thuộc tính chính
User (Worker)	ID, Phone, Name, CCCD, Portrait, Rating, Status (Active/Banned).
Client (Factory)	ID, Name, Address, Contact Point, Industry.
Shift (Ca làm)	ID, ClientID, Position, StartTime, EndTime, Wage (Lương), Slots (Số lượng), Requirements.
Booking (Đăng ký)	ID, ShiftID, WorkerID, Status (Pending, Approved, Rejected, Completed, No-show).
Attendance	ID, BookingID, CheckInTime, CheckOutTime, VerifiedBy (Manager).
5. Lộ trình triển khai (MVP Roadmap)
Giai đoạn 1 (Tháng 1-2): Xây dựng Core (Đăng ký, Tạo ca, Đăng ký ca, Duyệt thủ công).

Giai đoạn 2 (Tháng 3): Chấm công QR Code và tự động tính toán bảng lương.

Giai đoạn 3 (Tháng 4): Hệ thống Rating, Blacklist và tích hợp thông báo Zalo.

Các prompt cho core development
1. Master Prompt (Dùng để khởi tạo dự án)
Role: Senior Full-stack Developer & Architect.
Project: Seasonal Labor Management SaaS (Multi-tenant).
Tech Stack: > - Frontend: Next.js 14 (App Router), Tailwind CSS, Shadcn/UI.

Backend: NestJS (Node.js).

Database: PostgreSQL with Prisma ORM.

Auth: Clerk hoặc NextAuth (hỗ trợ Multi-tenancy).

Validation: Zod.

Core Architecture: > - Hệ thống là SaaS hỗ trợ nhiều công ty quản lý lao động (Tenants).

Mỗi công ty quản lý có Database riêng biệt hoặc dùng chung nhưng phân tách bằng tenant_id (Row Level Security).

3 Roles: SuperAdmin (hệ thống), AgencyAdmin (công ty quản lý), Worker (người lao động).

2. Database Schema Spec (Dùng để AI tạo Model)
Hãy yêu cầu AI tạo file schema.prisma với cấu trúc sau:

Code snippet
// Model đại diện cho công ty quản lý (Tenant)
model Tenant {
  id          String   @id @default(cuid())
  name        String
  slug        String   @unique
  clients     Client[]
  workers     Worker[]
  shifts      Shift[]
}

// Khách hàng của công ty quản lý (ví dụ: Nhà máy Samsung, Kho Shopee)
model Client {
  id        String   @id @default(cuid())
  name      String
  address   String
  lat       Float?
  lng       Float?
  tenantId  String
  tenant    Tenant   @relation(fields: [tenantId], references: [id])
  shifts    Shift[]
}

// Thông tin người lao động
model Worker {
  id            String    @id @default(cuid())
  phone         String    @unique
  fullName      String
  idCardNumber  String?   // CCCD
  avatar        String?
  rating        Float     @default(5.0)
  status        String    @default("ACTIVE") // ACTIVE, BANNED
  tenantId      String
  tenant        Tenant    @relation(fields: [tenantId], references: [id])
  bookings      Booking[]
}

// Ca làm việc
model Shift {
  id           String    @id @default(cuid())
  title        String
  description  String?
  startTime    DateTime
  endTime      DateTime
  wageAmount   Float     // Mức lương/ca
  requiredSlots Int      // Số lượng cần tuyển
  status       String    @default("OPEN") // OPEN, CLOSED, COMPLETED
  clientId     String
  client       Client    @relation(fields: [clientId], references: [id])
  tenantId     String
  tenant       Tenant    @relation(fields: [tenantId], references: [id])
  bookings     Booking[]
}

// Đăng ký và Chấm công
model Booking {
  id           String    @id @default(cuid())
  workerId     String
  shiftId      String
  status       String    @default("PENDING") // PENDING, APPROVED, REJECTED, CHECKED_IN, COMPLETED
  checkInTime  DateTime?
  checkOutTime DateTime?
  worker       Worker    @relation(fields: [workerId], references: [id])
  shift        Shift     @relation(fields: [shiftId], references: [id])
}
3. Module Prompts (Dùng để code từng tính năng)
Prompt A: Quản lý Ca làm việc (Dành cho Agency Admin)
"Hãy tạo trang Dashboard quản lý ca làm việc.

Form tạo ca: Chọn Client (Nhà máy), nhập thời gian bắt đầu/kết thúc, số lượng người cần, mức lương.

Danh sách ca: Hiển thị dạng thẻ (Card) hoặc bảng. Có bộ lọc theo trạng thái (Còn chỗ/Hết chỗ).

Logic: Khi số lượng Booking có trạng thái APPROVED bằng với requiredSlots, tự động chuyển trạng thái Shift sang CLOSED."

Prompt B: Luồng Đăng ký & Duyệt (Worker & Admin)
"Viết logic cho quy trình đăng ký ca:

Worker API: POST /bookings - Người lao động bấm ứng tuyển. Kiểm tra nếu Worker đã có lịch trùng giờ thì báo lỗi.

Admin API: PATCH /bookings/:id/status - Admin duyệt hoặc từ chối. Nếu duyệt, gửi thông báo (mock function) cho Worker.

Đảm bảo tất cả các query đều phải có điều kiện where: { tenantId: session.tenantId } để tránh lộ dữ liệu."

Prompt C: Chấm công bằng QR và GPS
"Viết logic chấm công (Check-in):

API nhận tọa độ GPS từ Worker và shiftId.

Kiểm tra khoảng cách giữa Worker và tọa độ của Client (nhà máy). Nếu khoảng cách > 500m, không cho phép check-in.

Nếu hợp lệ, cập nhật checkInTime trong bảng Booking và đổi status sang CHECKED_IN."

Prompt D: Tính toán tiền lương (Payroll Report)
"Tạo trang báo cáo lương:

Truy vấn tất cả Booking có status COMPLETED trong tháng hiện tại.

Tính tổng tiền: số giờ thực tế (checkOut - checkIn) nhân với đơn giá (hourly wage quy đổi từ ca).

Xuất ra bảng tổng hợp gồm: Tên lao động, Số ca đã làm, Tổng tiền lương, Khoản tạm ứng (nếu có)."

4. Gợi ý bộ UI Component (Shadcn/UI)
Để web app trông chuyên nghiệp như một ứng dụng quản lý hiện đại, hãy yêu cầu AI sử dụng:

Data Table: Cho danh sách người lao động và ca làm việc.

Calendar View: Để Admin xem tổng quan các ca trong tháng.

Badge: Để hiển thị trạng thái (Đang chờ, Đã duyệt, Đã xong).

Stats Card: Hiển thị nhanh: "Tổng số lao động đang làm hôm nay", "Số ca chưa đủ người".