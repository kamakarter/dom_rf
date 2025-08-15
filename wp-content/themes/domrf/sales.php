<?php
/*
Template Name: sales
*/
?>

<?php
	get_header();
?>

<?php
    include_once 'modal-windows/modal-form-with-contacts.php';
?>

<div class="default-header">
    <style>
        .single-header,
        .default-header {
            background-image: url("<?php echo get_template_directory_uri(); ?>/assets/superuploads/images/single-bg.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }
    </style>


    <?php
        include_once 'blocks/header.php';
    ?>
    
    <div class="top-preroll">
        <div class="container">
            <div class="flex-row">
                <div class="top-preroll-wrap">
                    <div class="breadcrumbs-real hidden-print"><span><span><a href="lugansk/">ОдессаСтрой</a> <span
                                    class="separator">|</span> <span class="breadcrumb_last"
                                    aria-current="page">Акции</span></span></span></div>
                    <h1 class="imitation-h1">Акции</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<main>
    <section id="default-catalog-wrapper">
        <div class="container">
            <div class="flex-row"></div>
        </div>
    </section>

    <section id="horizontal-banners">
        <div class="container">
            <div class="flex-row">
                <div class="banner-horizontal-wrap">
                    <div class="sidebar-banner-item banner-horizontal sidebar-banner-single sidebar-banner-single-calc">
                        <div class="sidebar-banner-label">Расчет</div>
                        <div class="sidebar-banner-title">Получите<br>предварительный<br>расчет
                            стоимости<br>строительства дома</div>
                        <div class="sidebar-banner-link"><a href="#modal" class="orange-link"
                                data-modal="#quiz-modal">Рассчитать стоимость</a></div>
                    </div>
                </div>
                <div class="banner-horizontal-wrap">
                    <div
                        class="sidebar-banner-item banner-horizontal sidebar-banner-single sidebar-banner-single-podbor">
                        <div class="sidebar-banner-label">ТОП 50</div>
                        <div class="sidebar-banner-title">Получите подборку<br>ТОП-50 проектов для<br>строительства
                            дома</div>
                        <div class="sidebar-banner-link"><a href="#modal" class="orange-link"
                                data-modal="#catalog-top-modal">Получить подборку</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section id="excursion-clients">
        <div class="container">
            <div class="section-title text-center"></div>
            <div class="flex-row">
                <div class="gflag-item-box vflag-item-box gflag-item-box-1 gflag-item-has-icon">
                    <div class="vflag-item-flag">01</div>
                    <div class="gflag-item"> <noscript><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads2021/05/ps1.png"
                                alt="Строим дом всего за 3 месяца" title="Строим дом всего за 3 месяца"
                                class="gflag-item-icon"></noscript><img
                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads2021/05/ps1.png"
                            alt="Строим дом всего за 3 месяца" title="Строим дом всего за 3 месяца"
                            class="lazyload gflag-item-icon">
                        <div class="gflag-item-title">Строим дом всего за 3 месяца</div>
                        <div class="gflag-item-text">Вы получаете дом, который не надо доделывать, подкрашивать
                        </div>
                    </div>
                </div>
                <div class="gflag-item-box vflag-item-box gflag-item-box-2 gflag-item-has-icon">
                    <div class="vflag-item-flag">02</div>
                    <div class="gflag-item"> <noscript><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads2021/05/ps2.png"
                                alt="5 этапов оплаты" title="5 этапов оплаты" class="gflag-item-icon"></noscript><img
                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads2021/05/ps2.png"
                            alt="5 этапов оплаты" title="5 этапов оплаты" class="lazyload gflag-item-icon">
                        <div class="gflag-item-title">5 этапов оплаты</div>
                        <div class="gflag-item-text">Вы платите только после окончания и проверки каждого этапа
                            работы</div>
                    </div>
                </div>
                <div class="gflag-item-box vflag-item-box gflag-item-box-3 gflag-item-has-icon">
                    <div class="vflag-item-flag">03</div>
                    <div class="gflag-item"> <noscript><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads2021/05/ps3.png"
                                alt="Проектировщики в штате" title="Проектировщики в штате"
                                class="gflag-item-icon"></noscript><img
                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads2021/05/ps3.png"
                            alt="Проектировщики в штате" title="Проектировщики в штате"
                            class="lazyload gflag-item-icon">
                        <div class="gflag-item-title">Проектировщики в штате</div>
                        <div class="gflag-item-text">Создадим с нуля или доработаем любой понравившийся проект</div>
                    </div>
                </div>
                <div class="gflag-item-box vflag-item-box gflag-item-box-4 gflag-item-has-icon">
                    <div class="vflag-item-flag">04</div>
                    <div class="gflag-item"> <noscript><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads2021/05/ps4.png"
                                alt="Лучшие цены на материалы" title="Лучшие цены на материалы"
                                class="gflag-item-icon"></noscript><img
                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads2021/05/ps4.png"
                            alt="Лучшие цены на материалы" title="Лучшие цены на материалы"
                            class="lazyload gflag-item-icon">
                        <div class="gflag-item-title">Лучшие цены на материалы</div>
                        <div class="gflag-item-text">Работаем напрямую с поставщиками стройматериалов</div>
                    </div>
                </div>
                <div class="gflag-item-box vflag-item-box gflag-item-box-5 gflag-item-has-icon">
                    <div class="vflag-item-flag">05</div>
                    <div class="gflag-item"> <noscript><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads2021/05/ps1.png"
                                alt="Сроки строительства и оплаты прописаны"
                                title="Сроки строительства и оплаты прописаны" class="gflag-item-icon"></noscript><img
                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads2021/05/ps1.png"
                            alt="Сроки строительства и оплаты прописаны" title="Сроки строительства и оплаты прописаны"
                            class="lazyload gflag-item-icon">
                        <div class="gflag-item-title">Сроки строительства и оплаты прописаны</div>
                        <div class="gflag-item-text">На этапе подписания договора составляется план-график работ и
                            их финансирования</div>
                    </div>
                </div>
                <div class="gflag-item-box vflag-item-box gflag-item-box-6 gflag-item-has-icon">
                    <div class="vflag-item-flag">06</div>
                    <div class="gflag-item"> <noscript><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads2021/05/ps2.png"
                                alt="Выполняем весь комплекс работ" title="Выполняем весь комплекс работ"
                                class="gflag-item-icon"></noscript><img
                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads2021/05/ps2.png"
                            alt="Выполняем весь комплекс работ" title="Выполняем весь комплекс работ"
                            class="lazyload gflag-item-icon">
                        <div class="gflag-item-title">Выполняем весь комплекс работ</div>
                        <div class="gflag-item-text">От юридического согласования постройки и геологии
                            до ландшафтного и интерьерного дизайна</div>
                    </div>
                </div>
                <div class="gflag-item-box vflag-item-box gflag-item-box-7 gflag-item-has-icon">
                    <div class="vflag-item-flag">07</div>
                    <div class="gflag-item"> <noscript><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads2021/05/ps3.png"
                                alt="Команда, которую подбирали 6 лет" title="Команда, которую подбирали 6 лет"
                                class="gflag-item-icon"></noscript><img
                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads2021/05/ps3.png"
                            alt="Команда, которую подбирали 6 лет" title="Команда, которую подбирали 6 лет"
                            class="lazyload gflag-item-icon">
                        <div class="gflag-item-title">Команда, которую подбирали 6 лет</div>
                        <div class="gflag-item-text">Штат своих специалистов, которые являются профессионалами
                            своего дела и знают все нюансы в строительстве</div>
                    </div>
                </div>
                <div class="gflag-item-box vflag-item-box gflag-item-box-8 gflag-item-has-icon">
                    <div class="vflag-item-flag">08</div>
                    <div class="gflag-item"> <noscript><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads2021/05/ps4.png"
                                alt="Контроль качества строительства" title="Контроль качества строительства"
                                class="gflag-item-icon"></noscript><img
                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads2021/05/ps4.png"
                            alt="Контроль качества строительства" title="Контроль качества строительства"
                            class="lazyload gflag-item-icon">
                        <div class="gflag-item-title">Контроль качества строительства</div>
                        <div class="gflag-item-text">За вашим объектом будет закреплен прораб, который контролирует
                            все этапы строительства</div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <?php
        include_once('blocks/contacts.php')
    ?>
</main>


<?php get_footer(); ?>