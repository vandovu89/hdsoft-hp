<?php
/**
 * Template Name: Contact Page
 */
get_header();

$form_status = handle_contact_form();
?>

<section class="hero" style="padding: 60px 0;">
    <div class="container">
        <h1 data-translate="contact_title">お問い合わせ</h1>
        <p data-translate="contact_subtitle">プロジェクトについてお気軽にご相談ください</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <?php if ($form_status === 'success'): ?>
            <div class="success-message" data-translate="form_success_message">
                お問い合わせありがとうございます。できるだけ早くご返信いたします。
            </div>
        <?php elseif ($form_status === 'error'): ?>
            <div class="error-message" data-translate="form_error_message">
                送信中にエラーが発生しました。もう一度お試しください。
            </div>
        <?php endif; ?>
        
        <form method="POST" class="contact-form">
            <input type="hidden" name="contact_form" value="1">
            
            <div class="form-group">
                <label for="name" data-translate="form_name">お名前</label>
                <input type="text" id="name" name="name" required>
            </div>
            
            <div class="form-group">
                <label for="email" data-translate="form_email">メールアドレス</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="subject" data-translate="form_subject">件名</label>
                <input type="text" id="subject" name="subject" required>
            </div>
            
            <div class="form-group">
                <label for="message" data-translate="form_message">メッセージ</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            
            <button type="submit" class="btn" data-translate="form_submit">送信</button>
        </form>
        
        <div class="contact-info">
            <div class="info-card">
                <div class="info-icon">📧</div>
                <h3 data-translate="info_email_title">メール</h3>
                <p data-translate="info_email_value">info@hdsoft.com</p>
            </div>
            
            <div class="info-card">
                <div class="info-icon">📞</div>
                <h3 data-translate="info_phone_title">電話</h3>
                <p data-translate="info_phone_value">0866 519 359</p>
            </div>
            
            <div class="info-card">
                <div class="info-icon">📍</div>
                <h3 data-translate="info_address_title">所在地</h3>
                <p data-translate="info_address_value">E2-11-23 KDT Nam Vĩnh Yên, Vĩnh Phúc, Phú Thọ</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
