<?php
/**
 * Template Name: Services Page
 */
get_header();
?>

<section class="hero" style="padding: 60px 0;">
    <div class="container">
        <h1 data-translate="services_title">私たちのサービス</h1>
        <p data-translate="services_subtitle">日本・ベトナム両市場に届けるソリューション</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">💻</div>
                <h3 data-translate="service_1_title">システム・アプリ開発</h3>
                <p data-translate="service_1_desc">業務に最適化したシステムとアプリケーションの開発。Web、モバイル、デスクトップに対応。</p>
                <ul style="margin-top: 20px; color: var(--text-light); line-height: 2;">
                    <li data-translate="service_1_tech1">Webアプリケーション開発</li>
                    <li data-translate="service_1_tech2">モバイルアプリ開発</li>
                    <li data-translate="service_1_tech3">業務システム構築</li>
                </ul>
            </div>

            <div class="service-card">
                <div class="service-icon">🏭</div>
                <h3 data-translate="service_2_title">業務自動化ソリューション</h3>
                <p data-translate="service_2_desc">製造業をはじめ、業務プロセスの効率化と自動化を実現。人手作業の削減、品質向上を支援。</p>
                <ul style="margin-top: 20px; color: var(--text-light); line-height: 2;">
                    <li data-translate="service_2_tech1">製造業向けソリューション</li>
                    <li data-translate="service_2_tech2">業務プロセス自動化</li>
                    <li data-translate="service_2_tech3">在庫・生産管理システム</li>
                </ul>
            </div>

            <div class="service-card">
                <div class="service-icon">💼</div>
                <h3 data-translate="service_3_title">IT総合コンサルティング</h3>
                <p data-translate="service_3_desc">テクノロジー戦略からシステム選定、導入支援まで。お客様の課題に合わせたワンストップ支援。</p>
                <ul style="margin-top: 20px; color: var(--text-light); line-height: 2;">
                    <li data-translate="service_3_tech1">IT戦略・DXコンサルティング</li>
                    <li data-translate="service_3_tech2">システム選定・導入支援</li>
                    <li data-translate="service_3_tech3">継続的な改善サポート</li>
                </ul>
            </div>

            <a href="<?php echo home_url('/offshore-development'); ?>" class="service-card"
                style="text-decoration: none; display: block; color: inherit;">
                <div class="service-icon">🌏</div>
                <h3 data-translate="service_4_title">オフショア開発</h3>
                <p data-translate="service_4_desc">ベトナムの開発チームを活用したオフショア開発。コスト効率と品質を両立し、スケーラブルな開発体制を提供。</p>
                <ul style="margin-top: 20px; color: var(--text-light); line-height: 2;">
                    <li data-translate="service_4_tech1">オフショア開発チーム構築</li>
                    <li data-translate="service_4_tech2">リモート開発・協業</li>
                    <li data-translate="service_4_tech3">専任チーム・アウトソーシング</li>
                </ul>
                <div style="margin-top: 20px; color: var(--primary-color); font-weight: 500; font-size: 14px;"
                    data-translate="hero_cta_2">詳しく見る →</div>
            </a>
        </div>

        <div style="text-align: center; margin-top: 60px;">
            <h3 style="font-size: 28px; margin-bottom: 20px;" data-translate="services_cta">プロジェクトについて相談しませんか？</h3>
            <a href="<?php echo home_url('/contact'); ?>" class="btn" data-translate="contact">お問い合わせ</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>