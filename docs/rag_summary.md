# Hệ thống RAG chuyên ngành cho ghi âm & biên bản họp (xây dựng, IT, v.v.) 要約RAG

カテゴリー: demo
来週予定カテゴリー: demo
作成者: Bình Nguyễn Nho
作成日時: 2025年9月3日 10:21
最終更新者: VAN DO VU
最終更新日時: 2025年10月31日 12:11
demo URL: https://noteai.hdsoft.io.vn/
Redmine URL: https://redmine.hdsoft.io.vn/issues/24915
Reviewers: m.yoneda@balocco.info
プロジェクトコード: RD000011
合計時間: 119
指摘一覧（ベトナム） VN comments: https://docs.google.com/spreadsheets/d/1BlMllak4tbwVa3owguutJJeEuzkWCSF3RFUyNCOdcws/edit?gid=0#gid=0
指摘一覧（日本）JP comments: https://docs.google.com/spreadsheets/d/13CI1R9Xvb-L04Ri5jLT5d6OICuNSywzX4D1wq-XCN2E/edit?gid=0#gid=0

## 1. 背景 (Bối cảnh)

- Các cuộc họp thường dài, khó ghi chép đầy đủ.
- Công cụ chuyển âm hiện tại **không nhận diện chính xác thuật ngữ chuyên ngành** (xây dựng, IT, y tế, v.v.).
- Nhu cầu: **Tự động hóa ghi âm → biên bản**, nhưng phải đảm bảo độ chính xác cao.

---

## 2. 課題 (Vấn đề hiện tại)

- Sai lệch khi chuyển âm do **từ chuyên ngành** không có trong model.
- Biên bản tự động thường **chung chung, thiếu cấu trúc**.
- Khó tìm kiếm, tra cứu lại thông tin từ biên bản.

---

## 3. 解決策 (Giải pháp đề xuất)

- Sử dụng **Speech-to-Text (Whisper)** để chuyển âm tiếng Nhật.
- Kết hợp **RAG (Retrieval Augmented Generation)** với **Knowledge Base chuyên ngành** để sửa lỗi thuật ngữ.
- Tóm tắt bằng **LLM** để tạo biên bản chuẩn (có mục, hành động, quyết định).
- Lưu trữ + tìm kiếm lại theo từ khóa.

---

## 4. システム構成 (Cấu trúc hệ thống)

```
[ Ghi âm (Audio) ]
        |
        v
[ Speech-to-Text (Whisper) ]
        |
        v
[ Chuẩn hóa chuyên ngành (RAG + KB) ]
        |
        v
[ Tóm tắt bằng LLM ]
        |
        v
[ Biên bản họp (Word/PDF) + Database lưu trữ ]

```

---

## 5. 想定ユースケース (Use Case)

- 🏗️ **Xây dựng**: họp dự án, ghi chú thuật ngữ kỹ thuật.
- 💻 **IT**: stand-up meeting, sprint review.
- 🏥 **Y tế**: hội chẩn, báo cáo ca bệnh.
- ⚖️ **Pháp lý**: ghi chú điều khoản, cuộc họp tư vấn.

---

## 6. 期待される効果 (Lợi ích kỳ vọng)

- Giảm **70% thời gian** ghi chép biên bản.
- Đảm bảo **thuật ngữ chính xác**.
- Biên bản **có cấu trúc, dễ chia sẻ**.
- Tăng hiệu quả quản lý & tìm kiếm lại nội dung cuộc họp.

## A. Các chức năng thực hiện phase 2 dự án

1. Quản lý noteai meeting theo project (dự án)
2. Chức năng tạo template mẫu gửi email.
3. Chức năng Gửi mail cho các bên liên quan
4. Lịch sử gửi mail
5. Cập nhật hiển thị màn home theo từng user login

## A. フェーズ2で実装する機能

1. プロジェクト（案件）ごとの NoteAI ミーティング管理
2. メール送信テンプレート作成機能
3. 関係者へのメール送信機能
4. メール送信履歴
5. ログインユーザーごとのホーム画面表示更新
    1. データの構造にプロジェクトを追加
    2. プロジェクトのメニュー追加
    3. 要約一覧、詳細にプロジェクト表示を追加
    4. プロジェクトで絞り込む機能追加