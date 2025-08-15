<?php
/*
Template Name: o-nas
*/
?>

<?php get_header(); ?>

<?php
    include_once 'modal-windows/modal-form-with-contacts.php';
?>


<div class="default-header">
    <style>
    .single-header,
    .default-header,
    .category-portfolio-header {
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
                                    class="separator">|</span> <span class="breadcrumb_last" aria-current="page">О
                                    компании СтройДом</span></span></span></div>
                    <h1 class="imitation-h1">О компании СтройДом</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<main>
    
    <section id="excursion-info" class="about-info">
        <div class="container">
            <div class="flex-row">
                <div class="excursion-info-item">
                    <div class="section-title-small"><b>Компания «СтройДом» предоставляет услуги по строительству
                            домов</b> под ключ в Одессе и Одесской области.</div>
                    <div class="">
                        <p>Компания «СтройДом» основана в 2011 году. Мы строим красивые и энергоэффективные дома с
                            продуманными планировками.</p>
                        <p><em>Огромный опыт наших специалистов, постоянное обучение, отточенные технологии
                                строительства и собственные наработки позволяют нам строить качественные коттеджи
                                для загородной жизни.</em></p>
                        <p>Мы работаем только по договору с четко прописанными пунктами и ценой, которая не
                            изменится в ходе строительства. На всех этапах строительства ведется строгий контроль
                            специалистов отдела контроля качества и собственной службы технадзора. Всем построенным
                            домам предоставляется гарантийное обслуживание в течение 5 лет. Также компания
                            предоставляет отдельные строительные услуги: проектирование коттеджей, строительство
                            фундамента, строительство бани, монтаж инженерных систем.</p>
                        <p>«СтройДом» — надежный поставщик подрядных услуг:</p>
                        <ul>
                            <li aria-level="1">Мы строим под ключ.</li>
                            <li aria-level="1">Наши технологии проверены в десятках проектов по всей Одесской
                                области.</li>
                            <li aria-level="1">В нашем штате — лучшие архитекторы и проектировщики с многолетним
                                опытом, которым по силам коттеджи любой сложности.</li>
                            <li aria-level="1">С нами ваша мечта не превратится в долгострой: весь процесс от
                                разработки плана действий до финального этапа работ занимает от трех месяцев до
                                года.</li>
                        </ul>
                        <p>Мы приступаем к работе над проектом с целью сделать дом комфортным, подходящим именно под
                            ваши потребности.</p>
                    </div>
                </div>
                <div class="excursion-info-item">
                    <div class="swiper-container gallery-slider">
                        <div class="swiper-wrapper gallery-swiper-wrapper o-nas-gallery-wrapper">
                            <div class="swiper-slide"> <a
                                    href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3.jpg"
                                    class="slider-image" data-fancybox="excursion"> <noscript><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3.jpg"
                                            alt="О компании СтройДом" title="О компании СтройДом"></noscript><img
                                        class="lazyload"
                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                        data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3.jpg"
                                        alt="О компании СтройДом" title="О компании СтройДом"> </a>
                            </div>
                            <div class="swiper-slide"> <a
                                    href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3.jpg"
                                    class="slider-image" data-fancybox="excursion"> <noscript><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/16fed8ce85995a5d6ba43a1bc276003c-3.jpg"
                                            alt="О компании СтройДом" title="О компании СтройДом"></noscript><img
                                        class="lazyload"
                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                        data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/16fed8ce85995a5d6ba43a1bc276003c-3.jpg"
                                        alt="О компании СтройДом" title="О компании СтройДом"> </a></div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <?php
        include_once('blocks/directors-word.php')
    ?>

    <?php
        include_once('blocks/certificate-slider.php')
    ?>

    <?php
        include_once('blocks/reviews-slider.php')
    ?>

    <section id="pluses-slider">
        <div class="container">
            <div class="section-title text-center">Чтобы быть спокойным и уверенным в качественном доме - <b>вам
                    нужен надежный подрядчик</b></div>
            <div class="flex-row pluses-row">
                <div class="gflag-item-box gflag-item-box-1 gflag-item-has-icon">
                    <div class="gflag-item-flag">01</div>
                    <div class="gflag-item"> <noscript><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/ps1.png"
                                alt="Строим дом всего за 3 месяца" title="Строим дом всего за 3 месяца"
                                class="gflag-item-icon"></noscript><img
                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/ps1.png"
                            alt="Строим дом всего за 3 месяца" title="Строим дом всего за 3 месяца"
                            class="lazyload gflag-item-icon">
                        <div class="gflag-item-title">Строим дом всего за 3 месяца</div>
                        <div class="gflag-item-text">Вы получаете дом, который не надо доделывать, подкрашивать
                        </div>
                    </div>
                </div>
                <div class="gflag-item-box gflag-item-box-2 gflag-item-has-icon">
                    <div class="gflag-item-flag">02</div>
                    <div class="gflag-item"> <noscript><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/ps2.png"
                                alt="5 этапов оплаты" title="5 этапов оплаты" class="gflag-item-icon"></noscript><img
                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/ps2.png"
                            alt="5 этапов оплаты" title="5 этапов оплаты" class="lazyload gflag-item-icon">
                        <div class="gflag-item-title">5 этапов оплаты</div>
                        <div class="gflag-item-text">Вы платите только после окончания и проверки каждого этапа
                            работы</div>
                    </div>
                </div>
                <div class="gflag-item-box gflag-item-box-3 gflag-item-has-icon">
                    <div class="gflag-item-flag">03</div>
                    <div class="gflag-item"> <noscript><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/ps3.png"
                                alt="Проектировщики в штате" title="Проектировщики в штате"
                                class="gflag-item-icon"></noscript><img
                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/ps3.png"
                            alt="Проектировщики в штате" title="Проектировщики в штате"
                            class="lazyload gflag-item-icon">
                        <div class="gflag-item-title">Проектировщики в штате</div>
                        <div class="gflag-item-text">Создадим с нуля или доработаем любой понравившийся проект</div>
                    </div>
                </div>
                <div class="gflag-item-box gflag-item-box-4 gflag-item-has-icon">
                    <div class="gflag-item-flag">04</div>
                    <div class="gflag-item"> <noscript><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/ps4.png"
                                alt="Лучшие цены на материалы" title="Лучшие цены на материалы"
                                class="gflag-item-icon"></noscript><img
                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/ps4.png"
                            alt="Лучшие цены на материалы" title="Лучшие цены на материалы"
                            class="lazyload gflag-item-icon">
                        <div class="gflag-item-title">Лучшие цены на материалы</div>
                        <div class="gflag-item-text">Работаем напрямую с поставщиками стройматериалов</div>
                    </div>
                </div>
                <div class="gflag-item-box gflag-item-box-5 gflag-item-has-icon">
                    <div class="gflag-item-flag">05</div>
                    <div class="gflag-item"> <noscript><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/ps1.png"
                                alt="Сроки строительства и оплаты прописаны"
                                title="Сроки строительства и оплаты прописаны" class="gflag-item-icon"></noscript><img
                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/ps1.png"
                            alt="Сроки строительства и оплаты прописаны" title="Сроки строительства и оплаты прописаны"
                            class="lazyload gflag-item-icon">
                        <div class="gflag-item-title">Сроки строительства и оплаты прописаны</div>
                        <div class="gflag-item-text">На этапе подписания договора составляется план-график работ и
                            их финансирования</div>
                    </div>
                </div>
                <div class="gflag-item-box gflag-item-box-6 gflag-item-has-icon">
                    <div class="gflag-item-flag">06</div>
                    <div class="gflag-item"> <noscript><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/ps2.png"
                                alt="Выполняем весь комплекс работ" title="Выполняем весь комплекс работ"
                                class="gflag-item-icon"></noscript><img
                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/ps2.png"
                            alt="Выполняем весь комплекс работ" title="Выполняем весь комплекс работ"
                            class="lazyload gflag-item-icon">
                        <div class="gflag-item-title">Выполняем весь комплекс работ</div>
                        <div class="gflag-item-text">От юридического согласования постройки и геологии
                            до ландшафтного и интерьерного дизайна</div>
                    </div>
                </div>
                <div class="gflag-item-box gflag-item-box-7 gflag-item-has-icon">
                    <div class="gflag-item-flag">07</div>
                    <div class="gflag-item"> <noscript><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/ps3.png"
                                alt="Команда, которую подбирали 6 лет" title="Команда, которую подбирали 6 лет"
                                class="gflag-item-icon"></noscript><img
                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/ps3.png"
                            alt="Команда, которую подбирали 6 лет" title="Команда, которую подбирали 6 лет"
                            class="lazyload gflag-item-icon">
                        <div class="gflag-item-title">Команда, которую подбирали 6 лет</div>
                        <div class="gflag-item-text">Штат своих специалистов, которые являются профессионалами
                            своего дела и знают все нюансы в строительстве</div>
                    </div>
                </div>
                <div class="gflag-item-box gflag-item-box-8 gflag-item-has-icon">
                    <div class="gflag-item-flag">08</div>
                    <div class="gflag-item"> <noscript><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/ps4.png"
                                alt="Контроль качества строительства" title="Контроль качества строительства"
                                class="gflag-item-icon"></noscript><img
                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/ps4.png"
                            alt="Контроль качества строительства" title="Контроль качества строительства"
                            class="lazyload gflag-item-icon">
                        <div class="gflag-item-title">Контроль качества строительства</div>
                        <div class="gflag-item-text">За вашим объектом будет закреплен прораб, который контролирует
                            все этапы строительства</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        include_once('blocks/contacts.php')
    ?>
</main>


<?php get_footer(); ?>