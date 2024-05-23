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
            <h1 class="p-header__logo">株式会社リコシェ
                <a href="#body"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.svg"
                        alt="株式会社リコシェ" width="161" height="61" loading="lazy">
                </a>
            </h1>
            <?php else : ?>
            <div class="p-header__logo">株式会社リコシェ
                <a href="<?php echo HOME_URL; ?>"> <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.svg" alt="株式会社リコシェ"
                        width="161" height="61" loading="lazy">
                </a>
            </div>
            <?php endif; ?>
            <div class="p-header__nav-lists">
                <nav class="p-header__nav">
                    <ul class="p-header__nav-items">
                        <li class="p-header__nav-item">
                            <a class="p-header__nav-link" href="<?php echo HOME_URL; ?>">ホーム</a>
                        </li>
                        <li class="p-header__nav-item p-header__menu-item p-header__drop-menu">
                            <p class="p-header__nav-link">
                                <span>サービス概要</span>
                                <picture class="p-header__nav-link-arrow">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/arrow-black.svg"
                                        alt="" width="11" height="7" loading="lazy">
                                </picture>
                            </p>
                            <ul class="p-header__drop-menu-list">
                                <li class="p-header__drop-menu-item">
                                    <a href="<?php echo CONSULTING_URL; ?>"><span>事業コンサルティング</span></a>
                                </li>
                                <li class="p-header__drop-menu-item">
                                    <a href="<?php echo ACADEMY_URL; ?>"><span>飲食店ネット通販アカデミー</span></a>
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
                    <div class="p-header__nav-contact-items">
                        <div class="p-header__nav-contact-item p-header__nav-contact-item--blue">
                            <a href="<?php echo DOWNLOAD_URL; ?>">資料ダウンロード</a>
                        </div>
                        <div class="p-header__nav-contact-item p-header__nav-contact-item--white">
                            <a href="<?php echo CONTACT_URL; ?>">お問い合わせ</a>
                        </div>
                    </div>
                </nav>
                <button class="p-header__hamburger js-hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
            <div class="p-header__drawer js-drawer">
                <div class="p-header__drawer-bg js-drawer-overlay">
                </div>
                <nav class="p-header__drawer-nav">
                    <ul class="p-header__drawer-items">
                        <li class="p-header__drawer-item">
                            <a class="p-header__drawer-link <?php if (is_front_page()): ?>current
        <?php endif; ?>" href="<?php echo HOME_URL; ?>">ホーム</a>
                        </li>
                        <li class="p-header__drawer-item p-header__menu-item p-header__drop-menu">
                            <p>サービス概要</p>
                            <ul class="p-header__drawer-menu-list">
                                <li class="p-header__drawer-menu-item">
                                    <a class="p-header__drawer-menu-link <?php if (is_page("consulting")): ?>current<?php endif; ?>"
                                        href="<?php echo CONSULTING_URL; ?>">
                                        <picture class="p-header__drawer-menu-arrow">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/arrow-black.svg"
                                                alt="" width="11" height="7" loading="lazy">
                                        </picture>
                                        <span>事業コンサルティング</span>
                                    </a>
                                </li>
                                <li class="p-header__drawer-menu-item">
                                    <a class="p-header__drawer-menu-link <?php if (is_page("online-shopping-academy")): ?>current<?php endif; ?>"
                                        href="<?php echo ACADEMY_URL; ?>">
                                        <picture class="p-header__drawer-menu-arrow">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/arrow-black.svg"
                                                alt="" width="11" height="7" loading="lazy">
                                        </picture>
                                        <span>飲食店ネット通販アカデミー</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="p-header__drawer-item">
                            <a class="p-header__drawer-link <?php if (is_archive("case-study")): ?>current<?php endif; ?>"
                                href="<?php echo CASE_URL; ?>">コンサルの効果</a>
                        </li>
                        <li class="p-header__drawer-item">
                            <a class="p-header__drawer-link <?php if (is_page("well-being")): ?>current<?php endif; ?>"
                                href="<?php echo WELL_URL; ?>">SDGsの取り組み</a>
                        </li>
                        <li class="p-header__drawer-item">
                            <a class="p-header__drawer-link <?php if (is_page("company")): ?>current<?php endif; ?>"
                                href="<?php echo COMPANY_URL; ?>">会社概要</a>
                        </li>
                    </ul>
                    <div class="c-cta u-mobile">
                        <div class="c-cta__body">
                            <div class="c-cta__item">
                                <div class="c-cta__text c-cta__text--mobile">経営に役立つクローズドな情報満載</div>
                                <div class="c-cta__link">
                                    <a href="http://" target="_blank" rel="noopener noreferrer">
                                        <picture class="c-cta__arrow">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/arrow-white.svg"
                                                alt="" width="11" height="7" loading="lazy">
                                        </picture>
                                        <p>メールマガジンのご登録</p>
                                    </a>
                                </div>
                            </div>
                            <div class="c-cta__item">
                                <div class="c-cta__text c-cta__text--mobile">LINEでご相談、お問い合わせ</div>
                                <div class="c-cta__link">
                                    <a href="http://" target="_blank" rel="noopener noreferrer">
                                        <picture class="c-cta__arrow">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/arrow-white.svg"
                                                alt="" width="11" height="7" loading="lazy">
                                        </picture>
                                        <picture class="c-cta__icon">
                                            <source
                                                srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/line_icon.webp"
                                                type="image/webp">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/line_icon.png"
                                                alt="LINEのアイコン" width="15" height="15" loading="lazy">
                                        </picture>
                                        <p>リコシェ公式ライン</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>

            </div>
    </header>
    <nav class="p-header__drawer-contact u-mobile">
        <div class="p-header__drawer-contact-items p-header__nav-contact-items">
            <div class="p-header__nav-contact-item p-header__nav-contact-item--blue">
                <a href="<?php echo DOWNLOAD_URL; ?>">資料ダウンロード</a>
            </div>
            <div class="p-header__nav-contact-item p-header__nav-contact-item--white">
                <a href="<?php echo CONTACT_URL; ?>">お問い合わせ</a>
            </div>
        </div>
    </nav>