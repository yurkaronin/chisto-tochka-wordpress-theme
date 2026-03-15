<?php
/**
 * Theme header.
 *
 * @package CleanAndDotTheme
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<meta name="format-detection" content="date=no">
	<meta name="format-detection" content="address=no">
	<meta name="format-detection" content="email=no">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<header class="header">
    <div class="wrapper">
        <div class="header__body">

            <div class="header__top mobile-hide">
                <div class="header__top-grid">
                    <div class="header__top-col -city">
                        <span class="header__city">Воронеж</span>
                    </div>
                    <div class="header__top-col -time laptop-hide tablet-hide mobile-hide">
                        <span class="time">Ежедневно: 10:00–20:00</span>
                    </div>
                    <div class="header__top-col -phone laptop-hide tablet-hide mobile-hide">
                        <!-- Телефон  -->
                        <?php echo do_shortcode('[phones]'); ?>
                    </div>
                    <div class="header__top-col -social">
                        <!-- соц сети  -->
                        <?php echo do_shortcode('[social]'); ?>
                    </div>
                    <div class="header__top-col -button">
                        <a href="#" class="link" data-target="modal-get-consultation">Записаться</a>
                    </div>
                </div>
            </div>
            <div class="header__bottom">
                <div class="header__bottom-grid">
                    <div class="header__bottom-col -logo">

                        <a class="header__logo" href="#">
                            <img src="./img/header-logo.svg" alt="#">
                        </a>

                    </div>
                    <div class="header__bottom-col -nav laptop-hide tablet-hide mobile-hide">
                        <!-- десктопная навигация  -->
                        <div class="decktop-navigation">
                            <nav class="main-navigation">
                                <ul class="main-navigation__list">
                                    <li class="main-navigation__item">
                                        <a class="main-navigation__link" href="#">Услуги</a>
                                    </li>
                                    <li class="main-navigation__item">
                                        <a class="main-navigation__link" href="#">Пакеты</a>
                                    </li>
                                    <li class="main-navigation__item">
                                        <a class="main-navigation__link" href="#">Квиз</a>
                                    </li>
                                    <li class="main-navigation__item">
                                        <a class="main-navigation__link" href="#">До/После</a>
                                    </li>
                                    <li class="main-navigation__item">
                                        <a class="main-navigation__link" href="#">Цены</a>
                                    </li>
                                    <li class="main-navigation__item">
                                        <a class="main-navigation__link" href="#">Контакты</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>



                    </div>
                    <div class="header__bottom-col -button mobile-hide">
                        <a href="#home-section-mini-quiz" class="link">Рассчитать</a>
                    </div>
                    <div class="header__bottom-col -button-menu desktop-hide">
                        <button class="button-menu js-show-mobile-navigation-menu">
                            <svg width="16" height="12" viewBox="0 0 16 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 11H9M1 6H15M7 1H15" stroke="#161A1D" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>


            </div>
        </div>
    </div>
</header>

<!-- мобильная навигация  -->
<div class="mobile-navigation desktop-hide">
    <div class="mobile-navigation__body">
        <div class="mobile-navigation__grid">

            <div class="mobile-navigation__row">
                <nav class="main-navigation">
                    <ul class="main-navigation__list">
                        <li class="main-navigation__item">
                            <a class="main-navigation__link" href="#home-section-basic-services">Услуги</a>
                        </li>
                        <li class="main-navigation__item">
                            <a class="main-navigation__link" href="#home-section-service-packages">Пакеты</a>
                        </li>
                        <li class="main-navigation__item">
                            <a class="main-navigation__link" href="#home-section-mini-quiz">Квиз</a>
                        </li>
                        <li class="main-navigation__item">
                            <a class="main-navigation__link" href="#home-section-portfolio-preview">Портфолио</a>
                        </li>
                        <li class="main-navigation__item">
                            <a class="main-navigation__link" href="#home-section-prices">Цены</a>
                        </li>
                        <li class="main-navigation__item">
                            <a class="main-navigation__link" href="#home-section-contacts">Контакты</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="mobile-navigation__row">
                <!-- Телефон  -->
                <?php echo do_shortcode('[phones]'); ?>

            </div>
            <div class="mobile-navigation__row">
                <span class="time">Ежедневно: 10:00–20:00</span>
            </div>
            <div class="mobile-navigation__row">
                <!-- соц сети  -->
                <?php echo do_shortcode('[social]'); ?>
            </div>
        </div>


    </div>
    <button class="button-close" type="button">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M19 19L10 10M10 10L1 1M10 10L19.0001 1M10 10L1 19.0001" stroke="#161A1D" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </button>
</div>
