<?php
/**
 * Template Name: Products Page
 */
get_header();
?>

<section class="hero" style="padding: 60px 0;">
    <div class="container">
        <h1 data-translate="products_title">私たちの製品</h1>
        <p data-translate="products_subtitle">利便性とスマートさを追求したSaaSを開発中</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <nav class="products-nav" style="margin-bottom: 32px; display: flex; flex-wrap: wrap; gap: 12px;">
            <a href="#family-portal" class="btn btn-outline"
                style="font-size: 14px; padding: 8px 14px; border-radius: 999px; border: 1px solid var(--border-color, #e2e8f0); background: rgba(37, 99, 235, 0.04); color: var(--primary, #2563eb);"
                data-translate="family_portal_title">
                Family Portal
            </a>
            <a href="#nexusbridge-ai" class="btn btn-outline"
                style="font-size: 14px; padding: 8px 14px; border-radius: 999px; border: 1px solid var(--border-color, #e2e8f0); background: rgba(37, 99, 235, 0.04); color: var(--primary, #2563eb);"
                data-translate="nexusbridge_title">
                NexusBridge AI
            </a>
            <a href="#noteai" class="btn btn-outline"
                style="font-size: 14px; padding: 8px 14px; border-radius: 999px; border: 1px solid var(--border-color, #e2e8f0); background: rgba(37, 99, 235, 0.04); color: var(--primary, #2563eb);"
                data-translate="noteai_title">
                NoteAI
            </a>
            <a href="#easy-labor" class="btn btn-outline"
                style="font-size: 14px; padding: 8px 14px; border-radius: 999px; border: 1px solid var(--border-color, #e2e8f0); background: rgba(37, 99, 235, 0.04); color: var(--primary, #2563eb);"
                data-translate="easy_labor_title">
                Easy Labor
            </a>
            <a href="#smartkms" class="btn btn-outline"
                style="font-size: 14px; padding: 8px 14px; border-radius: 999px; border: 1px solid var(--border-color, #e2e8f0); background: rgba(37, 99, 235, 0.04); color: var(--primary, #2563eb);"
                data-translate="smartkms_title">
                SmartKMS
            </a>
            <a href="#mini-om" class="btn btn-outline"
                style="font-size: 14px; padding: 8px 14px; border-radius: 999px; border: 1px solid var(--border-color, #e2e8f0); background: rgba(37, 99, 235, 0.04); color: var(--primary, #2563eb);"
                data-translate="miniom_title">
                Mini-OM
            </a>
            <a href="#factory-guard" class="btn btn-outline"
                style="font-size: 14px; padding: 8px 14px; border-radius: 999px; border: 1px solid var(--border-color, #e2e8f0); background: rgba(37, 99, 235, 0.04); color: var(--primary, #2563eb);"
                data-translate="factory_guard_title">
                Factory Guard AI
            </a>
        </nav>

        <!-- Family Portal - Cổng thông tin gia tộc -->
        <div id="family-portal" class="product-intro"
            style="max-width: 800px; margin: 0 auto 60px; padding: 40px; background: var(--bg-card, #f8f9fa); border-radius: 12px; border: 1px solid var(--border-color, #e9ecef);">
            <div style="text-align: center; margin-bottom: 24px;">
                <a href="https://family-portal.hdsoft.io.vn" target="_blank" rel="noopener"
                    style="display: inline-block;">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/resources/img/fp_logo.jpg'); ?>"
                        alt="FamilyPortal" width="180" height="180"
                        style="max-width: 100%; height: auto; border-radius: 8px; display: block;" loading="lazy">
                </a>
            </div>
            <h2 style="font-size: 28px; margin-bottom: 16px; color: var(--primary, #2563eb);"
                data-translate="family_portal_title">
                <a href="https://family-portal.hdsoft.io.vn" target="_blank" rel="noopener"
                    style="color: inherit; text-decoration: none;">
                    Family Portal – Cổng thông tin gia tộc
                </a>
            </h2>
            <p style="font-size: 16px; line-height: 1.7; color: var(--text-light, #64748b); margin-bottom: 20px;"
                data-translate="family_portal_tagline">Hệ thống SaaS cổng thông tin gia tộc / gia phả — nền tảng quản lý
                và công bố thông tin cho từng dòng họ.</p>
            <div class="achievement-tags" style="margin-bottom: 20px;">
                <span class="tag">WordPress</span>
                <span class="tag">PHP 8.x</span>
                <span class="tag">MySQL/MariaDB</span>
                <span class="tag">REST API</span>
                <span class="tag">SVG JS</span>
            </div>
            <ul style="margin: 0 0 20px 1.2em; line-height: 1.8; color: var(--text, #334155);">
                <li data-translate="family_portal_feature_1"><strong>Portal công khai:</strong> Trang chủ gia tộc, giới
                    thiệu, lịch sử, quy định, tin tức và sự kiện theo từng họ.</li>
                <li data-translate="family_portal_feature_2"><strong>Gia phả (Family Tree):</strong> Quản lý thành viên,
                    quan hệ cha/mẹ/vợ chồng, thế hệ; cây gia phả tương tác (zoom, pan, xem hồ sơ).</li>
                <li data-translate="family_portal_feature_3"><strong>Đa tenant (multi-tenant):</strong> Một nền tảng
                    phục vụ nhiều gia tộc; dữ liệu cách ly theo từng họ, phân quyền theo vai trò (Quản trị / Biên tập /
                    Xem).</li>
                <li data-translate="family_portal_feature_4"><strong>Gói đăng ký:</strong> Gói miễn phí (giới hạn thành
                    viên) và gói trả phí (không giới hạn).</li>
            </ul>
        </div>

        <!-- NexusBridge AI -->
        <div id="nexusbridge-ai" class="product-intro"
            style="max-width: 800px; margin: 0 auto 60px; padding: 40px; background: var(--bg-card, #f8f9fa); border-radius: 12px; border: 1px solid var(--border-color, #e9ecef);">
            <div style="text-align: center; margin-bottom: 24px;">
                <a href="https://nexusbridge-ai.com" target="_blank" rel="noopener"
                    style="display: inline-block; width: 180px; height: 180px; background: #e0e7ff; border-radius: 8px; text-decoration: none;">
                    <span
                        style="font-size: 80px; display: flex; align-items: center; justify-content: center; width: 100%; height: 100%;">🌉</span>
                </a>
            </div>
            <h2 style="font-size: 28px; margin-bottom: 16px; color: var(--primary, #2563eb);"
                data-translate="nexusbridge_title">
                <a href="https://nexusbridge-ai.com" target="_blank" rel="noopener"
                    style="color: inherit; text-decoration: none;">
                    NexusBridge AI – Nền tảng quản lý dự án AI
                </a>
            </h2>
            <p style="font-size: 16px; line-height: 1.7; color: var(--text-light, #64748b); margin-bottom: 20px;"
                data-translate="nexusbridge_tagline">
                Nền tảng quản lý dự án phát triển phần mềm chuyên biệt cho các team offshore, tích hợp AI để giải quyết các vấn đề về bất đồng ngôn ngữ, quản lý yêu cầu (gap analysis) và phân tích rủi ro dự án.
            </p>
            <div class="achievement-tags" style="margin-bottom: 20px;">
                <span class="tag">Next.js</span>
                <span class="tag">NestJS</span>
                <span class="tag">LLM Integration</span>
                <span class="tag">AWS</span>
            </div>
            <ul style="margin: 0 0 20px 1.2em; line-height: 1.8; color: var(--text, #334155);">
                <li data-translate="nexusbridge_feature_1"><strong>Gap Analysis AI:</strong> Tự động phân tích tài liệu yêu cầu (Requirements) để phát hiện lỗ hổng và điểm thiếu sót bằng LLM.</li>
                <li data-translate="nexusbridge_feature_2"><strong>Tự động hóa đa ngôn ngữ:</strong> Dịch thuật tự động và đồng bộ giữa tiếng Nhật, Anh, Việt, Hàn cho task và comments.</li>
                <li data-translate="nexusbridge_feature_3"><strong>Risk Radar:</strong> Dự đoán và cảnh báo rủi ro về tiến độ, chất lượng trong quá trình phát triển (Pull Requests, Commits).</li>
                <li data-translate="nexusbridge_feature_4"><strong>Quản lý Multi-tenant:</strong> Kiến trúc multi-tenant an toàn cho doanh nghiệp (Enterprise), hỗ trợ BYOK.</li>
            </ul>
        </div>

        <!-- NoteAI - RAG chuyên ngành -->
        <div id="noteai" class="product-intro"
            style="max-width: 800px; margin: 0 auto 60px; padding: 40px; background: var(--bg-card, #f8f9fa); border-radius: 12px; border: 1px solid var(--border-color, #e9ecef);">
            <div style="text-align: center; margin-bottom: 24px;">
                <a href="https://noteai.hdsoft.io.vn/" target="_blank" rel="noopener"
                    style="display: inline-block; width: 180px; height: 180px; background: #eef2ff; border-radius: 8px; text-decoration: none;">
                    <span
                        style="font-size: 80px; display: flex; align-items: center; justify-content: center; width: 100%; height: 100%;">🎙️</span>
                </a>
            </div>
            <h2 style="font-size: 28px; margin-bottom: 16px; color: var(--primary, #2563eb);"
                data-translate="noteai_title">
                <a href="https://noteai.hdsoft.io.vn/" target="_blank" rel="noopener"
                    style="color: inherit; text-decoration: none;">
                    NoteAI – Hệ thống RAG chuyên ngành
                </a>
            </h2>
            <p style="font-size: 16px; line-height: 1.7; color: var(--text-light, #64748b); margin-bottom: 20px;"
                data-translate="noteai_tagline">
                Hệ thống tự động hóa chuyển đổi ghi âm thành biên bản họp sử dụng Whisper và công nghệ RAG. Giải quyết
                vấn đề nhận diện thuật ngữ chuyên ngành (Xây dựng, IT, Y tế, Pháp lý).
            </p>
            <div class="achievement-tags" style="margin-bottom: 20px;">
                <span class="tag">STT (Whisper)</span>
                <span class="tag">RAG</span>
                <span class="tag">LLM</span>
                <span class="tag">Knowledge Base</span>
            </div>
            <ul style="margin: 0 0 20px 1.2em; line-height: 1.8; color: var(--text, #334155);">
                <li data-translate="noteai_feature_1"><strong>Chuyển âm tiếng Nhật:</strong> Sử dụng Speech-to-Text
                    (Whisper) có độ chính xác cao.</li>
                <li data-translate="noteai_feature_2"><strong>Chuẩn hóa chuyên ngành:</strong> Kết hợp RAG (Retrieval
                    Augmented Generation) với Knowledge Base để tự động sửa lỗi thuật ngữ.</li>
                <li data-translate="noteai_feature_3"><strong>Biên bản tự động:</strong> Tóm tắt bằng LLM để tạo biên
                    bản chuẩn có mục, hành động, quyết định.</li>
                <li data-translate="noteai_feature_4"><strong>Cải thiện hiệu suất:</strong> Tiết kiệm tới 70% thời gian
                    ghi chép và tạo biên bản.</li>
            </ul>
        </div>

        <!-- Easy Labor -->
        <div id="easy-labor" class="product-intro"
            style="max-width: 800px; margin: 0 auto 60px; padding: 40px; background: var(--bg-card, #f8f9fa); border-radius: 12px; border: 1px solid var(--border-color, #e9ecef);">
            <div style="text-align: center; margin-bottom: 24px;">
                <div
                    style="display: inline-flex; align-items: center; justify-content: center; width: 180px; height: 180px; border-radius: 999px; background: #eef2ff; font-size: 80px;">
                    👷
                </div>
            </div>
            <h2 style="font-size: 28px; margin-bottom: 16px; color: var(--primary, #2563eb);"
                data-translate="easy_labor_title">
                Easy Labor – Hệ thống quản lý lao động thời vụ &amp; ca làm
            </h2>
            <p style="font-size: 16px; line-height: 1.7; color: var(--text-light, #64748b); margin-bottom: 20px;"
                data-translate="easy_labor_tagline">
                Nền tảng SaaS giúp công ty cung ứng và nhà máy/kho xưởng quản lý lao động thời vụ, đăng tuyển ca, điều
                phối nhân sự, chấm công QR và tính lương tự động.
            </p>
            <p style="font-size: 14px; color: var(--text-light, #64748b); margin-bottom: 16px;" data-translate="coming_soon">
                Coming soon
            </p>
            <ul style="margin: 0 0 20px 1.2em; line-height: 1.8; color: var(--text, #334155);">
                <li data-translate="easy_labor_feature_1"><strong>Quản lý người lao động:</strong> Hồ sơ điện tử, lịch sử
                    làm việc và đánh giá từ các kho/xưởng.</li>
                <li data-translate="easy_labor_feature_2"><strong>Quản lý ca &amp; khách hàng:</strong> Tạo ca hàng loạt,
                    cấu hình định mức, quản lý danh sách nhà máy/kho xưởng.</li>
                <li data-translate="easy_labor_feature_3"><strong>Chấm công &amp; lương:</strong> Check-in/out bằng QR,
                    xác nhận OT và tự động tính lương, xuất báo cáo.</li>
            </ul>
            <div class="achievement-tags" style="margin-bottom: 20px;">
                <span class="tag">Worker App</span>
                <span class="tag">Shift Management</span>
                <span class="tag">QR Attendance</span>
                <span class="tag">Payroll</span>
            </div>
        </div>

        <!-- SmartKMS -->
        <div id="smartkms" class="product-intro"
            style="max-width: 800px; margin: 0 auto 60px; padding: 40px; background: var(--bg-card, #f8f9fa); border-radius: 12px; border: 1px solid var(--border-color, #e9ecef);">
            <div style="text-align: center; margin-bottom: 24px;">
                <div
                    style="display: inline-flex; align-items: center; justify-content: center; width: 180px; height: 180px; border-radius: 999px; background: #fff7ed; font-size: 80px;">
                    🧸
                </div>
            </div>
            <h2 style="font-size: 28px; margin-bottom: 16px; color: var(--primary, #2563eb);"
                data-translate="smartkms_title">
                SmartKMS – Hệ thống quản lý mầm non AI-First
            </h2>
            <p style="font-size: 16px; line-height: 1.7; color: var(--text-light, #64748b); margin-bottom: 20px;"
                data-translate="smartkms_tagline">
                Giảm tải nhập liệu cho giáo viên, cá nhân hóa trải nghiệm cho phụ huynh với sổ liên lạc điện tử, điểm
                danh thông minh và tự động hóa nội dung bằng AI.
            </p>
            <p style="font-size: 14px; color: var(--text-light, #64748b); margin-bottom: 16px;" data-translate="coming_soon">
                Coming soon
            </p>
            <ul style="margin: 0 0 20px 1.2em; line-height: 1.8; color: var(--text, #334155);">
                <li data-translate="smartkms_feature_1"><strong>Sổ liên lạc điện tử:</strong> Gửi nhật ký, thông báo và
                    hình ảnh của bé tới phụ huynh trên app.</li>
                <li data-translate="smartkms_feature_2"><strong>Hỗ trợ nhập liệu bằng AI:</strong> Gợi ý nội dung, chuyển
                    giọng nói thành văn bản để giảm thao tác gõ tay.</li>
                <li data-translate="smartkms_feature_3"><strong>Quản lý lớp &amp; lịch học:</strong> Theo dõi sĩ số, lịch
                    học, sự kiện và báo cáo cho chủ trường.</li>
            </ul>
            <div class="achievement-tags" style="margin-bottom: 20px;">
                <span class="tag">Kindergarten SaaS</span>
                <span class="tag">AI-First</span>
                <span class="tag">Attendance</span>
                <span class="tag">Parent App</span>
            </div>
        </div>

        <!-- Mini-OM -->
        <div id="mini-om" class="product-intro"
            style="max-width: 800px; margin: 0 auto 60px; padding: 40px; background: var(--bg-card, #f8f9fa); border-radius: 12px; border: 1px solid var(--border-color, #e9ecef);">
            <div style="text-align: center; margin-bottom: 24px;">
                <div
                    style="display: inline-flex; align-items: center; justify-content: center; width: 180px; height: 180px; border-radius: 999px; background: #ecfeff; font-size: 80px;">
                    🧾
                </div>
            </div>
            <h2 style="font-size: 28px; margin-bottom: 16px; color: var(--primary, #2563eb);"
                data-translate="miniom_title">
                Mini-OM – SaaS quản lý đơn hàng cho shop mini
            </h2>
            <p style="font-size: 16px; line-height: 1.7; color: var(--text-light, #64748b); margin-bottom: 20px;"
                data-translate="miniom_tagline">
                Giải pháp order management nhẹ, giúp shop bán hàng Facebook, Zalo, livestream… ghi nhận đơn, theo dõi
                trạng thái giao hàng và xem báo cáo doanh thu nhanh chóng.
            </p>
            <p style="font-size: 14px; color: var(--text-light, #64748b); margin-bottom: 16px;" data-translate="coming_soon">
                Coming soon
            </p>
            <ul style="margin: 0 0 20px 1.2em; line-height: 1.8; color: var(--text, #334155);">
                <li data-translate="miniom_feature_1"><strong>Tập trung đơn hàng:</strong> Ghi nhận và quản lý đơn từ
                    nhiều kênh trên một màn hình.</li>
                <li data-translate="miniom_feature_2"><strong>Theo dõi trạng thái:</strong> Quản lý luồng xử lý đơn: mới,
                    đang giao, hoàn tất, hủy.</li>
                <li data-translate="miniom_feature_3"><strong>Báo cáo nhanh:</strong> Xem tổng doanh thu, số đơn theo
                    ngày/tháng để nắm hiệu suất bán hàng.</li>
            </ul>
            <div class="achievement-tags" style="margin-bottom: 20px;">
                <span class="tag">Order Management</span>
                <span class="tag">Mini Shops</span>
                <span class="tag">SaaS</span>
            </div>
        </div>

        <!-- Factory Guard AI -->
        <div id="factory-guard" class="product-intro"
            style="max-width: 800px; margin: 0 auto 60px; padding: 40px; background: var(--bg-card, #f8f9fa); border-radius: 12px; border: 1px solid var(--border-color, #e9ecef);">
            <div style="text-align: center; margin-bottom: 24px;">
                <div
                    style="display: inline-flex; align-items: center; justify-content: center; width: 180px; height: 180px; border-radius: 999px; background: #fef9c3; font-size: 80px;">
                    🏭
                </div>
            </div>
            <h2 style="font-size: 28px; margin-bottom: 16px; color: var(--primary, #2563eb);"
                data-translate="factory_guard_title">
                Factory Guard AI – Giám sát an toàn nhà máy bằng AI camera
            </h2>
            <p style="font-size: 16px; line-height: 1.7; color: var(--text-light, #64748b); margin-bottom: 20px;"
                data-translate="factory_guard_tagline">
                Hệ thống AI nhận diện vi phạm an toàn (không đội mũ, vào vùng cấm…), cảnh báo realtime và lưu clip bằng
                chứng, hỗ trợ quản lý an toàn lao động tại nhà xưởng.
            </p>
            <p style="font-size: 14px; color: var(--text-light, #64748b); margin-bottom: 16px;" data-translate="coming_soon">
                Coming soon
            </p>
            <ul style="margin: 0 0 20px 1.2em; line-height: 1.8; color: var(--text, #334155);">
                <li data-translate="factory_guard_feature_1"><strong>Nhận diện PPE:</strong> Phát hiện tự động các trường
                    hợp không đội mũ, không mặc áo phản quang…</li>
                <li data-translate="factory_guard_feature_2"><strong>Giám sát vùng cấm:</strong> Cảnh báo khi có người đi
                    vào khu vực nguy hiểm được cấu hình sẵn.</li>
                <li data-translate="factory_guard_feature_3"><strong>Lưu trữ bằng chứng:</strong> Lưu clip vi phạm để
                    phục vụ điều tra, đào tạo lại và báo cáo an toàn.</li>
            </ul>
            <div class="achievement-tags" style="margin-bottom: 20px;">
                <span class="tag">Computer Vision</span>
                <span class="tag">Factory Safety</span>
                <span class="tag">Edge AI</span>
            </div>
        </div>

        <div class="product-coming-soon">
            <div class="product-coming-soon-icon">🚀</div>
            <h2 data-translate="products_dev_title">開発中です</h2>
            <p data-translate="products_dev_desc" class="product-dev-desc">
                私たちの製品は現在開発中です。お客様の業務をより便利に、よりスマートにするSaaSを目指して取り組んでいます。</p>
            <p data-translate="products_dev_aim" class="product-dev-aim">便利でスマートなSaaS — ご期待ください。</p>
        </div>

        <div style="text-align: center; margin-top: 60px;">
            <h3 style="font-size: 28px; margin-bottom: 20px;" data-translate="products_cta">先行情報をご希望の方は</h3>
            <p style="color: var(--text-light); margin-bottom: 25px;" data-translate="products_cta_desc">
                リリース情報や先行案内をご希望の方はお気軽にお問い合わせください。</p>
            <a href="<?php echo home_url('/contact'); ?>" class="btn" data-translate="contact">お問い合わせ</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>