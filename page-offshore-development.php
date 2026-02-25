<?php
/**
 * Template Name: Offshore Development Page
 */
get_header();
?>

<section class="hero offshore-hero">
    <div class="container">
        <h1 data-translate="offshore_hero_title">AI-Readyなベトナム開発チームで</h1>
        <p data-translate="offshore_hero_subtitle">日本のIT人材不足を解決する</p>
        <div style="margin-top: 40px;">
            <a href="<?php echo home_url('/contact'); ?>" class="btn" style="font-size: 18px; padding: 15px 40px;"
                data-translate="offshore_hero_cta">無料で相談する</a>
        </div>
    </div>
</section>

<section class="section bg-light">
    <div class="container">
        <h2 class="section-title" data-translate="offshore_problem_title">日本のIT課題</h2>
        <p class="section-subtitle" data-translate="offshore_problem_desc"
            style="max-width: 800px; margin: -30px auto 50px line-height: 1.8;">
            深刻化するIT人材不足。開発リソースの確保、コスト高騰、そしてスピードの遅延に悩んでいませんか？</p>

        <div class="problem-grid">
            <div class="problem-card">
                <div class="problem-icon">📉</div>
                <h3 data-translate="offshore_problem_1">優秀なエンジニアが採用できない</h3>
            </div>
            <div class="problem-card">
                <div class="problem-icon">💸</div>
                <h3 data-translate="offshore_problem_2">開発コストが想定を超えてしまう</h3>
            </div>
            <div class="problem-card">
                <div class="problem-icon">🐢</div>
                <h3 data-translate="offshore_problem_3">新しい技術（AIなど）に対応できる人材がいない</h3>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2 class="section-title" data-translate="offshore_solution_title">私たちの解決策</h2>
        <p class="section-subtitle" data-translate="offshore_solution_subtitle">
            ベトナムのAI-Readyなエンジニアチームが、貴社の開発を強力にサポートします。</p>

        <div class="solution-grid">
            <div class="solution-card">
                <div class="solution-image">
                    <div class="solution-icon-large">🤖</div>
                </div>
                <div class="solution-content">
                    <h3 data-translate="offshore_solution_1_title">AI-Ready人材</h3>
                    <p data-translate="offshore_solution_1_desc">最新のAI技術（ChatGPT, Copilot等）を使いこなし、圧倒的な生産性で開発を行うエンジニアチーム。
                    </p>
                </div>
            </div>

            <div class="solution-card">
                <div class="solution-image" style="background: linear-gradient(135deg, var(--success), #059669);">
                    <div class="solution-icon-large">🇯🇵</div>
                </div>
                <div class="solution-content">
                    <h3 data-translate="offshore_solution_2_title">日本品質のマネジメント</h3>
                    <p data-translate="offshore_solution_2_desc">日本での開発経験・マネジメント経験が豊富なブリッジSEが、品質とコミュニケーションを担保します。</p>
                </div>
            </div>

            <div class="solution-card">
                <div class="solution-image" style="background: linear-gradient(135deg, #f59e0b, #d97706);">
                    <div class="solution-icon-large">🔄</div>
                </div>
                <div class="solution-content">
                    <h3 data-translate="offshore_solution_3_title">柔軟な体制構築</h3>
                    <p data-translate="offshore_solution_3_desc">ラボ型（専属チーム）から受託開発まで、プロジェクトのフェーズに合わせた最適な体制を提案。</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section bg-light">
    <div class="container">
        <h2 class="section-title" data-translate="offshore_benefits_title">導入のメリット</h2>
        <div class="benefits-container">
            <div class="benefit-item">
                <span class="benefit-check">✓</span>
                <span data-translate="offshore_benefit_1">開発コストを最大40%削減</span>
            </div>
            <div class="benefit-item">
                <span class="benefit-check">✓</span>
                <span data-translate="offshore_benefit_2">AI活用による開発スピードの向上</span>
            </div>
            <div class="benefit-item">
                <span class="benefit-check">✓</span>
                <span data-translate="offshore_benefit_3">日本語でのスムーズなコミュニケーション</span>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container" style="text-align: center;">
        <div class="cta-box">
            <h2 data-translate="offshore_cta_title">まずはご相談ください</h2>
            <p data-translate="offshore_cta_desc">貴社の課題に合わせた最適なチーム構成と見積もりを提案いたします。</p>
            <a href="<?php echo home_url('/contact'); ?>" class="btn" style="margin-top: 20px;"
                data-translate="offshore_hero_cta">無料で相談する</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>