<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <title>一般社団法人 サポルト</title>
    <meta name="viewport" content="width=device-width,initiascale=1.0" />
    <meta name="format-detection" content="telephone=no" />

    <!-- icon -->
    <link rel="apple-touch-icon" type="image/png" href="/apple-touch-icon-180x180.png">
    <link rel="apple-touch-icon" type="image/png" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/icon-192x192.png">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <?php wp_head(); ?>
</head>

<body class="js-fadeBodyIn" id="body" <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- <body> -->
    <header class="p-header l-header js-header">
        <div class="p-header__inner">
            <?php if ( is_front_page() ) : ?>
                <h1 class="p-header__logo">
                <a href="#body">一般社団法人 サポルト
                </a>
            </h1>
            <?php else : ?>
                <div class="p-header__logo">
                    <a href="<?php echo HOME_URL; ?>">一般社団法人 サポルト
                    </a>
                </div>
            <?php endif; ?>
            <div class="p-header__nav-lists">
                <nav class="p-header__nav">
                    <ul class="p-header__nav-items">
                        <li class="p-header__nav-item">
                            <a class="js-textHover" href="<?php echo BLOG_URL; ?>">Blog</a>
                        </li>
                        <li class="p-header__nav-item p-header__menu-item p-header__drop-menu">
                            <a class="js-textHover" href="<?php echo HOME_URL; ?>#service">Service</a>
                            <ul class="p-header__drop-menu-list">
                                <li class="p-header__drop-menu-item">
                                    <a href="https://addfuture.saporuto.com">就労継続支援事業</a>
                                </li>
                                <li class="p-header__drop-menu-item">
                                    <a href="https://tonyashokudo.saporuto.com">配食型飲食事業</a>
                                </li>
                            </ul>
                        </li>
                        <li class="p-header__nav-item">
                            <a class="js-textHover" href="<?php echo HOME_URL; ?>#company">Company</a>
                        </li>
                        <li class="p-header__nav-item">
                            <a class="js-textHover" href="<?php echo WORKS_URL; ?>">Order</a>
                        </li>
                    </ul>
                </nav>
                <nav class="p-header__nav-contact">
                    <div class="p-header__nav-contact-head"><a href="<?php echo CONTACT_URL; ?>">Contact</a>
                        </div>
                    <div class="p-header__nav-contact-items">
                        <div class="p-header__nav-contact-item">
                            <a href="mailto:mail: info@saporuto.com">
                                <picture class="p-header__nav-contact-img p-header__nav-contact-img--mail">
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon_mail.webp" type="image/webp">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon_mail.png" alt="メールのアイコン" width="24" height="24" loading="lazy">
                                </picture>
                            </a>
                        </div>
                        <div class="p-header__nav-contact-item">
                            <a href="tel:+027-388-0811">
                                <picture class="p-header__nav-contact-img p-header__nav-contact-img--tel">
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon_tel.webp" type="image/webp">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon_tel.png" alt="電話のアイコン" width="22" height="22" loading="lazy">
                                </picture>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <button class="p-header__hamburger js-hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        <div class="p-header__drawer js-drawer">
            <nav class="p-header__drawer-nav">
                <ul class="p-header__drawer-items">
                <li class="p-header__drawer-item js-nav-list">
                        <a class="p-header__drawer-link" href="<?php echo BLOG_URL; ?>">Blog</a>
                    </li>
                    <li class="p-header__drawer-item js-nav-list p-header__drawer-drop">
                        <a class="p-header__drawer-link" href="<?php echo HOME_URL; ?>#service">Service</a>
                    </li>
                    <ul class="p-header__drawer-menu-list js-nav-list">
                        <li class="p-header__drawer-menu-item">
                            <a href="https://addfuture.saporuto.com">就労継続支援事業</a>
                        </li>
                        <li class="p-header__drawer-menu-item">
                            <a href="https://tonyashokudo.saporuto.com">配食型飲食事業</a>
                        </li>
                    </ul>
                    <li class="p-header__drawer-item p-header__drawer-item--mt24 js-nav-list">
                        <a class="p-header__drawer-link" href="<?php echo HOME_URL; ?>#company">Company</a>
                    </li>
                    <li class="p-header__drawer-item js-nav-list">
                        <a class="p-header__drawer-link" href="<?php echo WORKS_URL; ?>">Order</a>
                    </li>
                    <li class="p-header__drawer-item js-nav-list">
                        <a class="p-header__drawer-link" href="<?php echo CONTACT_URL; ?>">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>