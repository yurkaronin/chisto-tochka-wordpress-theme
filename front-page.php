<?php get_header(); ?>

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
                        <a href="#" class="link">Записаться</a>
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
                        <a href="#" class="link">Рассчитать</a>
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
                <a href="#" class="phone">8 918 089 60 09</a>
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

<main class="main">
    <!-- Первый экран  -->
    <section class="hero" id="home-section-hero">
        <div class="wrapper">
            <div class="hero__grid">
                <div class="hero__col -text">
                    <p class="title -big">Детейлинг,<br>
                        который видно сразу. Уход,<br>
                        который держится долго</p>

                    <h1 class="subtitle">«Чисто и точка» — детейлинг в Воронеже:
                        химчистка, предпродажная подготовка, полировка,
                        керамика/жидкое стекло.</h1>

                    <div class="hero__buttons">
                        <a href="#" class="button">Подобрать пакет за 30 секунд</a>
                        <a href="#" class="button -transparent">Позвонить</a>
                    </div>

                    <p class="hero__text"><b>Важно:</b> мойка выполняется только для клиентов детейлинга — как
                        обязательная
                        подготовка перед работами. Отдельной “просто автомойки” не продаём.</p>

                    <div class="benefits-small">
                        <ul class="benefits-small__list">
                            <li class="benefits-small__item">
                                <span class="benefits-small__icon">
                                    <img src="./img/benefits-small/1.svg" alt="#">
                                </span>
                                <b class="benefits-small__title">Гарантия результата</b>
                                <p class="benefits-small__text">Фиксируем состояние «до» и итог «после»</p>
                            </li>
                            <li class="benefits-small__item">
                                <span class="benefits-small__icon">
                                    <img src="./img/benefits-small/2.svg" alt="#">
                                </span>
                                <b class="benefits-small__title">Фото «до/после»</b>
                                <p class="benefits-small__text">Отправим в мессенджер</p>
                            </li>
                            <li class="benefits-small__item">
                                <span class="benefits-small__icon">
                                    <img src="./img/benefits-small/3.svg" alt="#">
                                </span>
                                <b class="benefits-small__title">Честная смета</b>
                                <p class="benefits-small__text">Цена «от» — после осмотра/выбора пакета</p>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="hero__col -image">
                    <div class="hero__image">
                        <img src="./img/hero/1.png" alt="#">
                    </div>
                </div>
            </div>
        </div>

        <!-- декоративный шар на фоне  -->
        <div class="decorate -left -top"></div>
    </section>
    <!-- Основные услуги  -->
    <section class="basic-services section" id="home-section-basic-services">
        <div class="wrapper">
            <div class="beyond-scope">
                <div class="basic-services__top">
                    <div class="basic-services__top-grid">
                        <div class="basic-services__top-col -title">
                            <h2 class="title mg-reset">Основные <span>услуги</span></h2>
                        </div>
                        <div class="basic-services__top-col -text">
                            <p class="subtitle">Выберите направление — подберём пакет и сделаем расчёт под вашу модель
                                авто</p>
                        </div>
                        <div class="basic-services__top-col -button">
                            <a href="#" class="button -transparent -small">Получить расчёт</a>
                        </div>
                    </div>
                </div>

                <div class="basic-services__body">
                    <div class="basic-services-group">
                        <div class="basic-services-group__grid">
                            <div class="basic-services-group__col">

                                <article class="preview-card">
                                    <div class="preview-card__header">
                                        <div class="preview-card__photo">
                                            <img src="./img/preview-card/1.jpg" alt="#">
                                        </div>
                                    </div>
                                    <div class="preview-card__body">
                                        <div class="preview-card__body-group">
                                            <h3 class="preview-card__title">Химчистка
                                                салона</h3>
                                            <span class="preview-card-price"><b>Цена:</b>от 5 000 ₽</span>
                                        </div>


                                        <p class="preview-card__description">Глубокая чистка ткани/кожи, удаление
                                            запахов,
                                            восстановление вида салона.</p>

                                        <div class="preview-card__buttons">
                                            <a href="#" class="button -small">Подобрать пакет</a>
                                            <a href="#" class="button -transparent -small">Прайс</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="basic-services-group__col">

                                <article class="preview-card">
                                    <div class="preview-card__header">
                                        <div class="preview-card__photo">
                                            <img src="./img/preview-card/1.jpg" alt="#">
                                        </div>
                                    </div>
                                    <div class="preview-card__body">
                                        <div class="preview-card__body-group">
                                            <h3 class="preview-card__title">Химчистка
                                                салона</h3>
                                            <span class="preview-card-price"><b>Цена:</b>от 5 000 ₽</span>
                                        </div>


                                        <p class="preview-card__description">Глубокая чистка ткани/кожи, удаление
                                            запахов,
                                            восстановление вида салона.</p>

                                        <div class="preview-card__buttons">
                                            <a href="#" class="button -small">Подобрать пакет</a>
                                            <a href="#" class="button -transparent -small">Прайс</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="basic-services-group__col">

                                <article class="preview-card">
                                    <div class="preview-card__header">
                                        <div class="preview-card__photo">
                                            <img src="./img/preview-card/1.jpg" alt="#">
                                        </div>
                                    </div>
                                    <div class="preview-card__body">
                                        <div class="preview-card__body-group">
                                            <h3 class="preview-card__title">Химчистка
                                                салона</h3>
                                            <span class="preview-card-price"><b>Цена:</b>от 5 000 ₽</span>
                                        </div>


                                        <p class="preview-card__description">Глубокая чистка ткани/кожи, удаление
                                            запахов,
                                            восстановление вида салона.</p>

                                        <div class="preview-card__buttons">
                                            <a href="#" class="button -small">Подобрать пакет</a>
                                            <a href="#" class="button -transparent -small">Прайс</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="basic-services-group">

                        <article class="preview-card-long">
                            <div class="preview-card-long__body">
                                <!-- Детальная информация  -->
                                <div class="preview-card-long__details">
                                    <h3 class="preview-card-long__title">Керамика / Жидкое стекло</h3>
                                    <p class="preview-card-long__description">Защитное покрытие, которое упрощает уход и
                                        помогает дольше сохранять внешний вид.</p>

                                    <div class="list-group">
                                        <div class="list-group__col">
                                            <h4 class="list-group__title">Что даёт</h4>
                                            <ul class="simple-list">
                                                <li class="simple-list__item">Блеск и глубина цвета</li>
                                                <li class="simple-list__item">Гидрофобный эффект</li>
                                                <li class="simple-list__item">Легче мойка и уход</li>
                                            </ul>
                                        </div>
                                        <div class="list-group__col">
                                            <h4 class="list-group__title">Как делаем</h4>
                                            <ul class="simple-list">
                                                <li class="simple-list__item">Подготовка поверхности</li>
                                                <li class="simple-list__item">Полировка при необходимости</li>
                                                <li class="simple-list__item">Нанесение + контроль</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="preview-card-long__footer">
                                        <span class="preview-card-price"><b>Цена:</b>от 5 000 ₽</span>
                                        <a href="#" class="button -small">Подобрать пакет</a>
                                        <a href="#" class="button -transparent -small">Прайс</a>

                                    </div>

                                </div>
                                <!-- Картинка или фото  -->
                                <div class="preview-card-long__image">
                                    <img src="./img/preview-card-long/1.jpg" alt="#">
                                </div>
                            </div>

                        </article>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- Пакеты услуг  -->
    <section class="service-packages section" id="home-section-service-packages">
        <div class="wrapper">

            <div class="service-packages__top">
                <div class="service-packages__top-grid">
                    <div class="service-packages__top-col -title">
                        <h2 class="title mg-reset">Пакеты <span>услуг</span></h2>
                    </div>
                    <div class="service-packages__top-col -text">
                        <p class="subtitle">Формат пакетов удобен для рекламы: клиент сразу видит варианты и
                            выбирает по бюджету</p>
                    </div>
                    <div class="service-packages__top-col -button">
                        <a href="#" class="button -transparent -small">
                            <span class="button__icon"><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.2954 15.9999C9.03576 15.9956 5.91083 14.6963 3.60591 12.3868C1.30099 10.0773 0.00422508 6.94616 0 3.68004C0 2.70406 0.386939 1.76805 1.0757 1.07792C1.76445 0.387799 2.69861 9.14345e-05 3.67265 9.14345e-05C3.87891 -0.00148278 4.08483 0.0172738 4.28742 0.0560906C4.48328 0.0851305 4.67582 0.133361 4.86227 0.200089C4.99341 0.246191 5.11027 0.325793 5.20128 0.431023C5.2923 0.536252 5.35433 0.663465 5.38124 0.80008L6.47505 5.60001C6.50453 5.7303 6.50098 5.86591 6.46472 5.99447C6.42846 6.12303 6.36065 6.24045 6.26746 6.336C6.16367 6.448 6.15569 6.456 5.17365 6.96799C5.96007 8.69665 7.33988 10.0849 9.06187 10.8799C9.58084 9.88795 9.58882 9.87995 9.7006 9.77595C9.79596 9.68258 9.91314 9.61463 10.0414 9.5783C10.1698 9.54197 10.3051 9.53841 10.4351 9.56795L15.2255 10.6639C15.3575 10.6946 15.4795 10.7584 15.5801 10.8494C15.6807 10.9404 15.7565 11.0555 15.8004 11.1839C15.8678 11.3738 15.9185 11.5692 15.9521 11.7679C15.9842 11.969 16.0002 12.1723 16 12.3759C15.9853 13.3477 15.5875 14.2742 14.8934 14.9532C14.1993 15.6322 13.2654 16.0084 12.2954 15.9999Z"
                                        fill="#FFD943" />
                                </svg></span>8 918 089 60 09</a>
                    </div>
                </div>
            </div>
            <div class="service-packages__bottom">
                <div class="service-packages-group">
                    <div class="service-packages-group__grid">

                        <div class="service-packages-group__col">
                            <article class="preview-card-two">
                                <div class="preview-card-two__body">
                                    <h3 class="preview-card-two__title">Базовый</h3>
                                    <span class="preview-card-two__lead">Освежить авто и привести
                                        «в порядок» без лишнего</span>

                                    <span class="preview-card-price"><b>Цена:</b>от 5 000 ₽</span>
                                    <ul class="simple-list">
                                        <li class="simple-list__item">Подготовительная мойка (как этап)</li>
                                        <li class="simple-list__item">Лёгкая чистка салона (по зонам)</li>
                                        <li class="simple-list__item">Уход за пластиком/панелью</li>
                                    </ul>

                                    <a href="#" class="button -transparent">Хочу Базовый</a>
                                </div>

                                <div class="preview-card-two__footer">
                                    <div class="preview-card-two__photo">
                                        <img src="./img/services-card/1.jpg" alt="#">
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="service-packages-group__col">
                            <article class="preview-card-two -mod">
                                <div class="preview-card-two__body">
                                    <div class="preview-card-two__title-group">
                                        <h3 class="preview-card-two__title">Оптимальный</h3>
                                        <span class="card-label">Чаще выбирают</span>
                                    </div>

                                    <span class="preview-card-two__lead">Лучший баланс «результат/цена»
                                        для большинства авто.</span>

                                    <span class="preview-card-price"><b>Цена:</b>от 19 900 ₽</span>
                                    <ul class="simple-list">
                                        <li class="simple-list__item">Подготовительная мойка (как этап)</li>
                                        <li class="simple-list__item">Химчистка ключевых зон салона</li>
                                        <li class="simple-list__item">Полировка «освежающая» (по состоянию)</li>
                                        <li class="simple-list__item">Защитный состав на кузов (базовый)</li>
                                    </ul>

                                    <a href="#" class="button">Хочу Оптимальный</a>
                                </div>

                                <div class="preview-card-two__footer">
                                    <div class="preview-card-two__photo">
                                        <img src="./img/services-card/2.jpg" alt="#">
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="service-packages-group__col">
                            <article class="preview-card-two">
                                <div class="preview-card-two__body">
                                    <h3 class="preview-card-two__title">Максимальный</h3>
                                    <span class="preview-card-two__lead">Максимальный внешний эффект +
                                        долгий срок защиты.</span>

                                    <span class="preview-card-price"><b>Цена:</b>от 34 000 ₽</span>
                                    <ul class="simple-list">
                                        <li class="simple-list__item">Подготовительная мойка (как этап)</li>
                                        <li class="simple-list__item">Полная химчистка салона</li>
                                        <li class="simple-list__item">Полировка кузова (по состоянию)</li>
                                        <li class="simple-list__item">Керамика/жидкое стекло (подбор)</li>
                                    </ul>

                                    <a href="#" class="button -transparent">Хочу Максимальный</a>
                                </div>

                                <div class="preview-card-two__footer">
                                    <div class="preview-card-two__photo">
                                        <img src="./img/services-card/3.jpg" alt="#">
                                    </div>
                                </div>
                            </article>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Мини-квиз на 3 шага -->
    <section class="mini-quiz section" id="home-section-mini-quiz">
        <div class="wrapper">
            <div class="beyond-scope">
                <div class="mini-quiz__body">
                    <div class="mini-quiz__grid">
                        <div class="mini-quiz__col -aside">
                            <h2 class="title mg-reset">Мини-квиз <span><br>на 3 шага</span></h2>
                            <p class="subtitle">Подберём пакет и скажем цену «от»
                                под вашу модель за 5–10 минут</p>
                        </div>
                        <div class="mini-quiz__col -main">
                            <div class="mini-quiz-form">
                                <?php echo do_shortcode('[quizle name="69aec3c8d1376"]'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Наши работы «до/после»  -->
    <section class="portfolio-preview section" id="home-section-portfolio-preview">
        <div class="wrapper">
            <h2 class="title">Наши работы <span>«до/после»</span></h2>

            <div class="portfolio-preview__filter">
                <ul class="buttons-list">
                    <li class="buttons-list__item">
                        <button class="button-tab isActive" data-filter="all">Все</button>
                    </li>
                    <li class="buttons-list__item">
                        <button class="button-tab" data-filter="himchistka">Химчистка</button>
                    </li>

                    <li class="buttons-list__item">
                        <button class="button-tab" data-filter="polirovka">Полировка</button>
                    </li>

                    <li class="buttons-list__item">
                        <button class="button-tab" data-filter="keramika">Керамика</button>
                    </li>

                    <li class="buttons-list__item">
                        <button class="button-tab" data-filter="predprodazha">Предпродажа</button>
                    </li>

                </ul>
            </div>

            <div class="portfolio-preview__content">
                <div class="portfolio-preview__slider">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <!-- Слайд  -->
                            <div class="swiper-slide" data-category="polirovka keramika">
                                <!-- Карточка с анонсом работы  -->
                                <article class="portfolio-preview-card">
                                    <a href="./img/portfolio-preview-card/1.jpg" class="portfolio-preview-card__link"
                                        data-fslightbox="portfolio-card-gallery-1">
                                        <div class="portfolio-preview-card__header">
                                            <div class="portfolio-preview-card__photo">
                                                <img src="./img/portfolio-preview-card/1.jpg" alt="#">
                                            </div>

                                        </div>
                                        <div class="portfolio-preview-card__body">
                                            <h3 class="portfolio-preview-card__title">Полировка + керамика</h3>
                                            <p class="portfolio-preview-card__subtitle">Hyundai Solaris 2022</p>
                                            <p class="portfolio-preview-card__text">Выполнить полировку кузова
                                                автомобиля Hyundai Solaris
                                                2022 с
                                                последующим нанесением керамического покрытия для восстановления блеска,
                                                устранения мелких
                                                царапин и
                                                защиты лакокрасочного покрытия</p>
                                        </div>
                                    </a>

                                    <!-- Альбом фото  -->
                                    <div class="portfolio-preview-card__album">
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                    </div>
                                </article>

                            </div>

                            <!-- Слайд  -->
                            <div class="swiper-slide" data-category="himchistka">
                                <!-- Карточка с анонсом работы  -->
                                <article class="portfolio-preview-card">
                                    <a href="./img/portfolio-preview-card/1.jpg" class="portfolio-preview-card__link"
                                        data-fslightbox="portfolio-card-gallery-1">
                                        <div class="portfolio-preview-card__header">
                                            <div class="portfolio-preview-card__photo">
                                                <img src="./img/portfolio-preview-card/1.jpg" alt="#">
                                            </div>

                                        </div>
                                        <div class="portfolio-preview-card__body">
                                            <h3 class="portfolio-preview-card__title">Полировка + керамика</h3>
                                            <p class="portfolio-preview-card__subtitle">Hyundai Solaris 2022</p>
                                            <p class="portfolio-preview-card__text">Выполнить полировку кузова
                                                автомобиля Hyundai Solaris
                                                2022 с
                                                последующим нанесением керамического покрытия для восстановления блеска,
                                                устранения мелких
                                                царапин и
                                                защиты лакокрасочного покрытия</p>
                                        </div>
                                    </a>

                                    <!-- Альбом фото  -->
                                    <div class="portfolio-preview-card__album">
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                    </div>
                                </article>

                            </div>

                            <!-- Слайд  -->
                            <div class="swiper-slide" data-category="predprodazha">
                                <!-- Карточка с анонсом работы  -->
                                <article class="portfolio-preview-card">
                                    <a href="./img/portfolio-preview-card/1.jpg" class="portfolio-preview-card__link"
                                        data-fslightbox="portfolio-card-gallery-1">
                                        <div class="portfolio-preview-card__header">
                                            <div class="portfolio-preview-card__photo">
                                                <img src="./img/portfolio-preview-card/1.jpg" alt="#">
                                            </div>

                                        </div>
                                        <div class="portfolio-preview-card__body">
                                            <h3 class="portfolio-preview-card__title">Полировка + керамика</h3>
                                            <p class="portfolio-preview-card__subtitle">Hyundai Solaris 2022</p>
                                            <p class="portfolio-preview-card__text">Выполнить полировку кузова
                                                автомобиля Hyundai Solaris
                                                2022 с
                                                последующим нанесением керамического покрытия для восстановления блеска,
                                                устранения мелких
                                                царапин и
                                                защиты лакокрасочного покрытия</p>
                                        </div>
                                    </a>

                                    <!-- Альбом фото  -->
                                    <div class="portfolio-preview-card__album">
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                    </div>
                                </article>

                            </div>

                            <!-- Слайд  -->
                            <div class="swiper-slide" data-category="himchistka">
                                <!-- Карточка с анонсом работы  -->
                                <article class="portfolio-preview-card">
                                    <a href="./img/portfolio-preview-card/1.jpg" class="portfolio-preview-card__link"
                                        data-fslightbox="portfolio-card-gallery-1">
                                        <div class="portfolio-preview-card__header">
                                            <div class="portfolio-preview-card__photo">
                                                <img src="./img/portfolio-preview-card/1.jpg" alt="#">
                                            </div>

                                        </div>
                                        <div class="portfolio-preview-card__body">
                                            <h3 class="portfolio-preview-card__title">Полировка + керамика</h3>
                                            <p class="portfolio-preview-card__subtitle">Hyundai Solaris 2022</p>
                                            <p class="portfolio-preview-card__text">Выполнить полировку кузова
                                                автомобиля Hyundai Solaris
                                                2022 с
                                                последующим нанесением керамического покрытия для восстановления блеска,
                                                устранения мелких
                                                царапин и
                                                защиты лакокрасочного покрытия</p>
                                        </div>
                                    </a>

                                    <!-- Альбом фото  -->
                                    <div class="portfolio-preview-card__album">
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                    </div>
                                </article>

                            </div>

                            <!-- Слайд  -->
                            <div class="swiper-slide" data-category="himchistka">
                                <!-- Карточка с анонсом работы  -->
                                <article class="portfolio-preview-card">
                                    <a href="./img/portfolio-preview-card/1.jpg" class="portfolio-preview-card__link"
                                        data-fslightbox="portfolio-card-gallery-1">
                                        <div class="portfolio-preview-card__header">
                                            <div class="portfolio-preview-card__photo">
                                                <img src="./img/portfolio-preview-card/1.jpg" alt="#">
                                            </div>

                                        </div>
                                        <div class="portfolio-preview-card__body">
                                            <h3 class="portfolio-preview-card__title">Полировка + керамика</h3>
                                            <p class="portfolio-preview-card__subtitle">Hyundai Solaris 2022</p>
                                            <p class="portfolio-preview-card__text">Выполнить полировку кузова
                                                автомобиля Hyundai Solaris
                                                2022 с
                                                последующим нанесением керамического покрытия для восстановления блеска,
                                                устранения мелких
                                                царапин и
                                                защиты лакокрасочного покрытия</p>
                                        </div>
                                    </a>

                                    <!-- Альбом фото  -->
                                    <div class="portfolio-preview-card__album">
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                    </div>
                                </article>

                            </div>

                            <!-- Слайд  -->
                            <div class="swiper-slide" data-category="polirovka">
                                <!-- Карточка с анонсом работы  -->
                                <article class="portfolio-preview-card">
                                    <a href="./img/portfolio-preview-card/1.jpg" class="portfolio-preview-card__link"
                                        data-fslightbox="portfolio-card-gallery-1">
                                        <div class="portfolio-preview-card__header">
                                            <div class="portfolio-preview-card__photo">
                                                <img src="./img/portfolio-preview-card/1.jpg" alt="#">
                                            </div>

                                        </div>
                                        <div class="portfolio-preview-card__body">
                                            <h3 class="portfolio-preview-card__title">Полировка + керамика</h3>
                                            <p class="portfolio-preview-card__subtitle">Hyundai Solaris 2022</p>
                                            <p class="portfolio-preview-card__text">Выполнить полировку кузова
                                                автомобиля Hyundai Solaris
                                                2022 с
                                                последующим нанесением керамического покрытия для восстановления блеска,
                                                устранения мелких
                                                царапин и
                                                защиты лакокрасочного покрытия</p>
                                        </div>
                                    </a>

                                    <!-- Альбом фото  -->
                                    <div class="portfolio-preview-card__album">
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                    </div>
                                </article>

                            </div>

                            <!-- Слайд  -->
                            <div class="swiper-slide" data-category="keramika">
                                <!-- Карточка с анонсом работы  -->
                                <article class="portfolio-preview-card">
                                    <a href="./img/portfolio-preview-card/1.jpg" class="portfolio-preview-card__link"
                                        data-fslightbox="portfolio-card-gallery-1">
                                        <div class="portfolio-preview-card__header">
                                            <div class="portfolio-preview-card__photo">
                                                <img src="./img/portfolio-preview-card/1.jpg" alt="#">
                                            </div>

                                        </div>
                                        <div class="portfolio-preview-card__body">
                                            <h3 class="portfolio-preview-card__title">Полировка + керамика</h3>
                                            <p class="portfolio-preview-card__subtitle">Hyundai Solaris 2022</p>
                                            <p class="portfolio-preview-card__text">Выполнить полировку кузова
                                                автомобиля Hyundai Solaris
                                                2022 с
                                                последующим нанесением керамического покрытия для восстановления блеска,
                                                устранения мелких
                                                царапин и
                                                защиты лакокрасочного покрытия</p>
                                        </div>
                                    </a>

                                    <!-- Альбом фото  -->
                                    <div class="portfolio-preview-card__album">
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                        <a href="./img/portfolio-preview-card/1.jpg"
                                            data-fslightbox="portfolio-card-gallery-1"></a>
                                    </div>
                                </article>

                            </div>
                        </div>

                        <!-- Пагинация  -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>



            </div>
        </div>
    </section>
    <!-- Цены  -->
    <section class="prices section" id="home-section-prices">
        <div class="wrapper">
            <h2 class="title mg-reset">Цены</h2>
            <p class="subtitle">Цена зависит от размера авто и состояния.
                Точную сумму скажем после осмотра/уточнения задачи.</p>
        </div>
    </section>
    <!-- Оставьте заявку -->
    <section class="contact-form section" id="home-section-contact-form">
        <div class="wrapper">
            <h2 class="title"><span>Оставьте заявку — </span><br>перезвоним и рассчитаем стоимость</h2>
            <p class="subtitle">Можно сразу позвонить: 8 918 089 60 09</p>
        </div>
    </section>
    <!-- Контакты и адреса -->
    <section class="contact-us section" id="home-section-contacts">
        <div class="wrapper">
            <h2 class="title mg-reset"><span>Контакты </span><br>и адреса</h2>
            <p class="subtitle">Приезжайте в удобную локацию или запишитесь по телефону</p>
        </div>
    </section>
</main>

<footer class="footer" id="home-section-footer">
    <div class="wrapper">
        <div class="footer__grid">
            <div class="footer__col -copyright">
                <p class="copyright">© 2026 «Чисто и точка», Воронеж</p>
            </div>
            <div class="footer__col -contacts">
                <div class="footer__contacts">
                    <!-- Телефон  -->
                    <?php echo do_shortcode('[phones]'); ?>

                    <!-- соц сети  -->
                    <?php echo do_shortcode('[social]'); ?>
                </div>
            </div>
        </div>



    </div>
</footer>
<?php get_footer(); ?>
