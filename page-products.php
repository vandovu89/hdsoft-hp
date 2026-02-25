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
        <!-- Family Portal - Cổng thông tin gia tộc -->
        <div class="product-intro"
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

        <!-- NoteAI - RAG chuyên ngành -->
        <div class="product-intro"
            style="max-width: 800px; margin: 0 auto 60px; padding: 40px; background: var(--bg-card, #f8f9fa); border-radius: 12px; border: 1px solid var(--border-color, #e9ecef);">
            <div style="text-align: center; margin-bottom: 24px;">
                <a href="https://noteai.balocco.info/" target="_blank" rel="noopener"
                    style="display: inline-block; width: 180px; height: 180px; background: #eef2ff; border-radius: 8px; text-decoration: none;">
                    <span
                        style="font-size: 80px; display: flex; align-items: center; justify-content: center; width: 100%; height: 100%;">🎙️</span>
                </a>
            </div>
            <h2 style="font-size: 28px; margin-bottom: 16px; color: var(--primary, #2563eb);"
                data-translate="noteai_title">
                <a href="https://noteai.balocco.info/" target="_blank" rel="noopener"
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