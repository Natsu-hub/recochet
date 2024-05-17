<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width,initiascale=1.0" />
    <meta name="format-detection" content="telephone=no" />

    <!-- icon -->
    <!-- <link rel="apple-touch-icon" type="image/png" href="/apple-touch-icon-180x180.png">
    <link rel="apple-touch-icon" type="image/png" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/icon-192x192.png">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico"> -->
    <?php wp_head(); ?>
</head>

<body class="js-fadeBodyIn" id="body" <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- <body> -->
    <header class="p-header l-header js-header">
        <div class="p-header__inner">
            <?php if ( is_front_page() ) : ?>
            <h1 class="p-header__logo">
                <a href="#body"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.svg"
                        alt="メールのアイコン" width="24" height="24" loading="lazy">
                </a>
            </h1>
            <?php else : ?>
            <div class="p-header__logo">
                <a href="<?php echo HOME_URL; ?>"> <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.svg" alt="メールのアイコン"
                        width="24" height="24" loading="lazy">
                </a>
            </div>
            <?php endif; ?>
            <div class="p-header__nav-lists">
                <nav class="p-header__nav">
                    <ul class="p-header__nav-items">
                        <li class="p-header__nav-item">
                            <a class="p-header__nav-link" href="<?php echo BLOG_URL; ?>">ホーム</a>
                        </li>
                        <li class="p-header__nav-item p-header__menu-item p-header__drop-menu">
                            <p class="p-header__nav-link">サービス概要</p>
                            <ul class="p-header__drop-menu-list">
                                <li class="p-header__drop-menu-item">
                                    <a href=""><span>事業コンサルティング</span></a>
                                </li>
                                <li class="p-header__drop-menu-item">
                                    <a href=""><span>飲食店ネット通販アカデミー</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="p-header__nav-item">
                            <a class="p-header__nav-link" href="<?php echo CASE_URL; ?>">コンサルの効果</a>
                        </li>
                        <li class="p-header__nav-item">
                            <a class="p-header__nav-link" href="<?php echo WELL_URL; ?>">SDGsの取り組み</a>
                        </li>
                        <li class="p-header__nav-item">
                            <a class="p-header__nav-link" href="<?php echo COMPANY_URL; ?>">会社概要</a>
                        </li>
                    </ul>
                </nav>
                <nav class="p-header__nav-contact">
                    <div class="p-header__nav-contact-items c-header__nav-contact-items">
                        <div class="c-header__nav-contact-item c-header__nav-contact-item--blue">
                            <a href="<?php echo DOWNLOAD_URL; ?>">資料ダウンロード</a>
                        </div>
                        <div class="c-header__nav-contact-item c-header__nav-contact-item--white">
                            <a href="<?php echo CONTACT_URL; ?>">お問い合わせ</a>
                        </div>
                    </div>
                </nav>
                <button class="p-header__hamburger js-hamburger is-open">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
            <div class="p-header__drawer js-drawer is-open">
                <nav class="p-header__drawer-nav">
                    <ul class="p-header__drawer-items">
                        <li class="p-header__drawer-item">
                            <a class="p-header__drawer-link" href="<?php echo BLOG_URL; ?>">Blog</a>
                        </li>
                        <li class="p-header__drawer-item p-header__drawer-drop">
                            <a class="p-header__drawer-link" href="<?php echo HOME_URL; ?>#service">Service</a>
                        </li>
                        <ul class="p-header__drawer-menu-list">
                            <li class="p-header__drawer-menu-item">
                                <a href="">事業コンサルティング</a>
                            </li>
                            <li class="p-header__drawer-menu-item">
                                <a href="">飲食店ネット通販アカデミー</a>
                            </li>
                        </ul>
                        <li class="p-header__drawer-item p-header__drawer-item--mt24">
                            <a class="p-header__drawer-link" href="<?php echo HOME_URL; ?>#company">Company</a>
                        </li>
                        <li class="p-header__drawer-item">
                            <a class="p-header__drawer-link" href="<?php echo WORKS_URL; ?>">Order</a>
                        </li>
                        <li class="p-header__drawer-item">
                            <a class="p-header__drawer-link" href="<?php echo CONTACT_URL; ?>">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
    </header>