<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/resources/img/logo.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/resources/img/logo.ico"
        type="image/x-icon">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header>
        <div class="container">
            <div class="header-content">
                <a href="<?php echo home_url(); ?>" class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/resources/img/logo.ico"
                        alt="<?php bloginfo('name'); ?>" class="logo-img">
                </a>

                <button class="mobile-menu-toggle" id="mobileMenuToggle">☰</button>

                <nav>
                    <ul id="mainNav">
                        <?php $is_home = is_front_page(); ?>
                        <li><a href="<?php echo home_url(); ?>" class="nav-link<?php echo $is_home ? ' active' : ''; ?>"
                                data-translate="home">ホーム</a></li>
                        <li><a href="<?php echo home_url('/services'); ?>"
                                class="nav-link<?php echo is_page('services') ? ' active' : ''; ?>"
                                data-translate="services">サービス</a></li>
                        <li><a href="<?php echo home_url('/offshore-development'); ?>"
                                class="nav-link<?php echo is_page('offshore-development') ? ' active' : ''; ?>"
                                data-translate="service_4_title">オフショア開発</a></li>
                        <li><a href="<?php echo home_url('/products'); ?>"
                                class="nav-link<?php echo is_page('products') ? ' active' : ''; ?>"
                                data-translate="products">製品</a></li>
                        <li><a href="<?php echo home_url('/achievements'); ?>"
                                class="nav-link<?php echo is_page('achievements') ? ' active' : ''; ?>"
                                data-translate="achievements">実績</a></li>
                        <li><a href="<?php echo home_url('/about'); ?>"
                                class="nav-link<?php echo is_page('about') ? ' active' : ''; ?>"
                                data-translate="about">会社概要</a></li>
                        <li><a href="<?php echo home_url('/contact'); ?>"
                                class="nav-link<?php echo is_page('contact') ? ' active' : ''; ?>"
                                data-translate="contact">お問い合わせ</a></li>
                        <li class="lang-switcher">
                            <button class="lang-btn active" data-lang="ja">日本語</button>
                            <button class="lang-btn" data-lang="vi">Tiếng Việt</button>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>