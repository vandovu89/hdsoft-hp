# Family Portal – WordPress SaaS

Hệ thống cổng thông tin gia tộc / gia phả (Vietnamese family portal & genealogy) chạy trên WordPress, theo đúng **System Specification** trong `task_plan.md`.

## Cấu trúc

- **Plugin:** `wp-content/plugins/family-portal-core/` – logic SaaS, CPT, phân quyền, API gia phả, rewrite, subscription.
- **Theme:** `wp-content/themes/family-portal/` – giao diện portal công khai (trang chủ gia tộc, giới thiệu, gia phả, tin tức, sự kiện).

## Cài đặt

1. Copy toàn bộ thư mục vào một bản WordPress (hoặc chỉ `wp-content/plugins/family-portal-core` và `wp-content/themes/family-portal`).
2. Kích hoạt plugin **Family Portal Core**.
3. Kích hoạt theme **Family Portal**.
4. Vào **Cài đặt → Đường dẫn tĩnh** và **Lưu** lại một lần để flush rewrite rules (hoặc tắt/bật lại plugin).

## Sử dụng

### Quản trị (Super Admin)

- Tạo **Families** (gia tộc): thêm bài viết CPT “Family”, nhập tên, slug, mô tả, người sáng lập, quê quán, trạng thái (Hoạt động / Tạm ngưng).
- Gán **Gói đăng ký** (sidebar khi sửa Family): Miễn phí (tối đa 50 thành viên) hoặc Trả phí (không giới hạn).
- Trong **Users**, chọn **Thuộc gia tộc** (family_id) và gán role: **Quản trị gia tộc**, **Biên tập gia tộc**, hoặc **Xem gia tộc**.

### Nội dung gia tộc

- **Family Pages**: trang giới thiệu, lịch sử, quy định (gắn taxonomy **family**).
- **Family News** / **Family Events**: tin tức và sự kiện (tự gắn family theo user).
- **Genealogy (Family Member)**: thành viên gia phả; meta Cha/Mẹ/Vợ chồng, năm sinh/mất, thế hệ, giới tính, ghi chú. Có kiểm tra vòng tham chiếu (circular reference).

### Portal công khai

- **URL:** `/ho/{family-slug}/` (trang chủ), `/ho/{family-slug}/gioi-thieu`, `/ho/{family-slug}/gia-pha`, `/ho/{family-slug}/tin-tuc`, `/ho/{family-slug}/su-kien`.
- Tin/sự kiện chi tiết: `/ho/{family-slug}/tin-tuc/{post-slug}`, `/ho/{family-slug}/su-kien/{post-slug}`.
- Cây gia phả dùng REST API và JS (zoom/pan, click xem hồ sơ).

## REST API

- `GET /wp-json/family-portal/v1/family/{family_slug}/tree` – dữ liệu cây (nodes, edges).
- `GET /wp-json/family-portal/v1/family/{family_slug}/member/{id}` – chi tiết thành viên.

## Bảo mật & phân quyền

- User chỉ truy cập dữ liệu đúng `family_id` (user meta).
- Super admin (manage_options) bỏ qua giới hạn.
- Thực thi qua `map_meta_cap` và `pre_get_posts`.
- Nonce cho form; kiểm tra capability cho CRUD.

## Công nghệ

- WordPress (stable), PHP 8.x, MySQL/MariaDB.
- Plugin: CPT `family`, `family_member`, `family_page`, `family_news`, `family_event`; taxonomy `family`; roles family_admin / family_editor / family_viewer.
- Theme: Vietnamese-only portal UI, SVG tree (JS), responsive cơ bản.
