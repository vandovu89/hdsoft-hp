<?php
/**
 * Template Name: Achievements Page
 */
get_header();
?>

<section class="hero" style="padding: 60px 0;">
    <div class="container">
        <h1 data-translate="achievements_title">実績紹介</h1>
        <p data-translate="achievements_subtitle">成功したプロジェクトの一部をご紹介</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="achievements-grid">
            <div class="achievement-card">
                <div class="achievement-image">🏢</div>
                <div class="achievement-content">
                    <h3 data-translate="achievement_1_title">企業サイト・業務システム開発</h3>
                    <p data-translate="achievement_1_desc">約20種類のプロジェクトの新規開発・改修を統括。要件定義からサーバー構築、設計・開発・テスト・本番リリースまで一貫して担当。</p>
                    <div class="achievement-tags">
                        <span class="tag">WordPress</span>
                        <span class="tag">PHP</span>
                        <span class="tag">Laravel</span>
                        <span class="tag">React</span>
                        <span class="tag">Next.js</span>
                        <span class="tag">Azure</span>
                        <span class="tag">DevOps</span>
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
                        <span class="tag">PostgreSQL</span>
                        <span class="tag">Cypress</span>
                        <span class="tag">Vercel</span>
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
                        <span class="tag">GitHub</span>
                        <span class="tag">PostgreSQL</span>
                        <span class="tag">WordPress</span>
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
                        <span class="tag">Visual Studio</span>
                        <span class="tag">DICOM</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="section bg-light">
    <div class="container">
        <h2 class="section-title" data-translate="testimonials_title">クライアントの声</h2>
        <div style="max-width: 800px; margin: 0 auto;">
            <div style="background: white; padding: 40px; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.1); margin-bottom: 30px;">
                <p style="font-size: 18px; font-style: italic; color: var(--text-light); margin-bottom: 20px;" data-translate="testimonial_1_text">
                    "HD Softのチームは、私たちのビジョンを完璧に理解し、期待を超える成果を出してくれました。プロジェクトは予定通りに完了し、ROIは素晴らしいものでした。"
                </p>
                <p style="font-weight: 600;" data-translate="testimonial_1_author">田中太郎 - CEO, Tech Solutions Inc.</p>
            </div>
            
            <div style="background: white; padding: 40px; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.1);">
                <p style="font-size: 18px; font-style: italic; color: var(--text-light); margin-bottom: 20px;" data-translate="testimonial_2_text">
                    "Đội ngũ chuyên nghiệp, giải pháp sáng tạo và hỗ trợ tận tình. Dự án của chúng tôi đã thành công vượt mong đợi nhờ sự hợp tác với HD Soft."
                </p>
                <p style="font-weight: 600;" data-translate="testimonial_2_author">Nguyễn Văn A - CTO, Digital Innovations Vietnam</p>
            </div>
        </div>
    </div>
</section> -->

<?php get_footer(); ?>
