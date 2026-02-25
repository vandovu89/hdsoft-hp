<?php
/**
 * Front Page Template
 * Used when the site front page is displayed (Settings → Reading).
 */
get_header();
?>

<section class="hero">
    <div class="container">
        <h1 data-translate="hero_title">次世代のソフトウェアソリューション</h1>
        <p data-translate="hero_subtitle">革新的な技術でビジネスの成長を加速</p>
        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; margin-top: 30px;">
            <a href="<?php echo home_url('/contact'); ?>" class="btn" data-translate="hero_cta">お問い合わせ</a>
            <a href="<?php echo home_url('/services'); ?>" class="btn btn-outline" data-translate="hero_cta_2">詳しく見る</a>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2 class="section-title" data-translate="services_title">私たちのサービス</h2>
        <p class="section-subtitle" data-translate="services_subtitle">日本・ベトナム両市場に届けるソリューション</p>
        
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">💻</div>
                <h3 data-translate="service_1_title">システム・アプリ開発</h3>
                <p data-translate="service_1_desc">業務に最適化したシステムとアプリケーションの開発。Web、モバイル、デスクトップに対応。</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon">🏭</div>
                <h3 data-translate="service_2_title">業務自動化ソリューション</h3>
                <p data-translate="service_2_desc">製造業をはじめ、業務プロセスの効率化と自動化を実現。人手作業の削減、品質向上を支援。</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon">💼</div>
                <h3 data-translate="service_3_title">IT総合コンサルティング</h3>
                <p data-translate="service_3_desc">テクノロジー戦略からシステム選定、導入支援まで。お客様の課題に合わせたワンストップ支援。</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon">🌏</div>
                <h3 data-translate="service_4_title">オフショア開発</h3>
                <p data-translate="service_4_desc">ベトナムの開発チームを活用したオフショア開発。コスト効率と品質を両立し、スケーラブルな開発体制を提供。</p>
            </div>
        </div>
    </div>
</section>

<section class="section bg-light" id="products">
    <div class="container">
        <h2 class="section-title" data-translate="products_title">私たちの製品</h2>
        <p class="section-subtitle" data-translate="products_subtitle">利便性とスマートさを追求したSaaSを開発中</p>
        
        <div class="products-preview">
            <div class="product-card">
                <a href="https://family-portal.hdsoft.io.vn" target="_blank" rel="noopener" class="product-card-link">
                    <div class="product-card-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/resources/img/fp_logo.jpg'); ?>" alt="Family Portal" width="160" height="160" loading="lazy">
                    </div>
                    <div class="product-card-body">
                        <h3 data-translate="family_portal_title">Family Portal – Cổng thông tin gia tộc</h3>
                        <p data-translate="family_portal_tagline">Hệ thống SaaS cổng thông tin gia tộc / gia phả — nền tảng quản lý và công bố thông tin cho từng dòng họ.</p>
                    </div>
                </a>
            </div>
            <div class="products-coming">
                <span class="products-coming-icon">🚀</span>
                <p data-translate="products_dev_aim">便利でスマートなSaaS — ご期待ください。</p>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 32px;">
            <a href="<?php echo home_url('/products'); ?>" class="btn" data-translate="products">製品</a>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2 class="section-title" data-translate="achievements_title">実績紹介</h2>
        <p class="section-subtitle" data-translate="achievements_subtitle">成功したプロジェクトの一部をご紹介</p>
        
        <div class="achievements-grid">
            <div class="achievement-card">
                <div class="achievement-image">🏢</div>
                <div class="achievement-content">
                    <h3 data-translate="achievement_1_title">企業サイト・業務システム開発</h3>
                    <p data-translate="achievement_1_desc">複数の事業部門向けにコーポレートサイトと社内ツール（問い合わせ管理、予約、在庫連携）を提供。Azure AD連携とCI/CDによる安定したリリース体制を構築しました。</p>
                    <div class="achievement-tags">
                        <span class="tag">WordPress</span>
                        <span class="tag">Laravel</span>
                        <span class="tag">React</span>
                        <span class="tag">Azure</span>
                    </div>
                </div>
            </div>
            
            <div class="achievement-card">
                <div class="achievement-image">👥</div>
                <div class="achievement-content">
                    <h3 data-translate="achievement_2_title">求人マッチングシステム開発</h3>
                    <p data-translate="achievement_2_desc">求職者と採用企業をつなぐWebアプリ。スキル・条件マッチング、応募フロー、管理ダッシュボードを実装。リリース時点で約50社が利用を開始しました。</p>
                    <div class="achievement-tags">
                        <span class="tag">React</span>
                        <span class="tag">Next.js</span>
                        <span class="tag">AWS</span>
                        <span class="tag">Supabase</span>
                    </div>
                </div>
            </div>
            
            <div class="achievement-card">
                <div class="achievement-image">📡</div>
                <div class="achievement-content">
                    <h3 data-translate="achievement_3_title">外部機材管理システム</h3>
                    <p data-translate="achievement_3_desc">放送用カメラ・音声機材・中継車両の在籍・貸出・メンテナンスを一元管理。機材の稼働率向上とスケジュール最適化を実現しました。</p>
                    <div class="achievement-tags">
                        <span class="tag">Laravel</span>
                        <span class="tag">Vue.js</span>
                        <span class="tag">Docker</span>
                        <span class="tag">PostgreSQL</span>
                    </div>
                </div>
            </div>
            
            <div class="achievement-card">
                <div class="achievement-image">🏥</div>
                <div class="achievement-content">
                    <h3 data-translate="achievement_4_title">医療システム開発</h3>
                    <p data-translate="achievement_4_desc">医療画像の表示・解析と患者データ連携を実現。DICOM対応により複数施設で画像の共有・参照が可能になりました。</p>
                    <div class="achievement-tags">
                        <span class="tag">C++</span>
                        <span class="tag">C#</span>
                        <span class="tag">DICOM</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 40px;">
            <a href="<?php echo home_url('/achievements'); ?>" class="btn" data-translate="achievements">もっと見る</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
