<?php
/**
 * Template Name: About Page
 */
get_header();
?>

<section class="hero" style="padding: 60px 0;">
    <div class="container">
        <h1 data-translate="about_title">私たちについて</h1>
        <p data-translate="about_subtitle">日本の価値観を日本・ベトナム両市場へ — お客様の成功に貢献する</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="about-content">
            <div class="about-text">
                <h2 data-translate="about_mission_title">私たちのストーリー</h2>
                <p data-translate="about_desc_1">HD Softは2026年にベトナムで創業したソフトウェア開発会社です。創業者は日本で10年以上にわたりシステムプロバイダーとしてキャリアを積み、日本の厳格な品質基準と顧客第一の価値観を体得してきました。</p>
                <p data-translate="about_desc_2">私たちは、日本で培った経験と価値観を日本・ベトナム両市場に届け、お客様のビジネス成功に貢献することを使命としています。品質、誠実さ、そして継続的な改善—これらは私たちの根幹をなす価値です。</p>
                <p style="margin-top: 20px;" data-translate="about_desc_3">日本とベトナムの両市場において、日本品質のシステムソリューションを提供することで、お客様のデジタルトランスフォーメーションを支援し、持続的な成長を実現します。</p>
            </div>
            <div style="display: grid; gap: 20px;">
                <div style="background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); padding: 40px; border-radius: 10px; color: white;">
                    <h3 style="font-size: 24px; margin-bottom: 15px;" data-translate="about_vision_title">🎯 ビジョン</h3>
                    <p data-translate="about_vision_desc">日本で磨いた技術と姿勢で、日本・ベトナムの企業がデジタル時代に成功できるよう支援する。</p>
                </div>
                <div style="background: linear-gradient(135deg, var(--secondary-color), var(--primary-color)); padding: 40px; border-radius: 10px; color: white;">
                    <h3 style="font-size: 24px; margin-bottom: 15px;" data-translate="about_values_title">💡 私たちの強み</h3>
                    <p data-translate="about_values_desc">日本市場で10年以上の実績、厳格な品質管理、顧客との密接な連携、そして継続的な改善の文化。</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section bg-light">
    <div class="container">
        <h2 class="section-title" data-translate="about_stats_title">私たちの基盤</h2>
        <div class="stats">
            <div class="stat-item">
                <div class="stat-number" data-translate="stat_1_number">10年+</div>
                <div class="stat-label" data-translate="stat_1_label">日本での実務経験</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" data-translate="stat_2_number">2026</div>
                <div class="stat-label" data-translate="stat_2_label">ベトナム創業</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" data-translate="stat_3_number">品質</div>
                <div class="stat-label" data-translate="stat_3_label">日本基準の品質管理</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" data-translate="stat_4_number">🇯🇵 & 🇻🇳</div>
                <div class="stat-label" data-translate="stat_4_label">日本・ベトナム両市場</div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2 class="section-title" data-translate="about_tech_title">技術スタック</h2>
        <div class="services-grid">
            <div class="service-card">
                <h3 data-translate="about_tech_frontend">フロントエンド</h3>
                <p style="margin-top: 15px; color: var(--text-light);">
                    React, Vue.js, Angular, Next.js, TypeScript, Tailwind CSS, Material UI
                </p>
            </div>
            <div class="service-card">
                <h3 data-translate="about_tech_backend">バックエンド</h3>
                <p style="margin-top: 15px; color: var(--text-light);">
                    Node.js, Python, Java, Go, PHP, .NET, Ruby on Rails
                </p>
            </div>
            <div class="service-card">
                <h3 data-translate="about_tech_mobile">モバイル</h3>
                <p style="margin-top: 15px; color: var(--text-light);">
                    React Native, Flutter, Swift (iOS), Kotlin (Android)
                </p>
            </div>
            <div class="service-card">
                <h3 data-translate="about_tech_database">データベース</h3>
                <p style="margin-top: 15px; color: var(--text-light);">
                    PostgreSQL, MySQL, MongoDB, Redis, Firebase, DynamoDB
                </p>
            </div>
            <div class="service-card">
                <h3 data-translate="about_tech_cloud">クラウド & DevOps</h3>
                <p style="margin-top: 15px; color: var(--text-light);">
                    AWS, Azure, GCP, Docker, Kubernetes, CI/CD, Terraform
                </p>
            </div>
            <div class="service-card">
                <h3 data-translate="about_tech_ai">AI & データサイエンス</h3>
                <p style="margin-top: 15px; color: var(--text-light);">
                    TensorFlow, PyTorch, Scikit-learn, OpenAI, LangChain
                </p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
