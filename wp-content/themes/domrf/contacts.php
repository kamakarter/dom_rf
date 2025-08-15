<?php
/*
Template Name: contacts
*/
?>

<?php get_header(); ?>

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
                                    aria-current="page">Контакты</span></span></span></div>
                    <h1 class="imitation-h1">Контакты</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<main>
    <section id="contacts-page">
        <div class="container">
            <div class="flex-row">
                <div class="contacts-col">
                    <div class="section-title-small"><b>Мы на карте</b></div>
                    <div class="contacts-adderss-item">
                        <div class="contacts-adderss-icon"></div>
                        <div class="contacts-adderss-content">
                            <div class="contacts-title">Адрес офиса</div>
                            <div class="contacts-adderss-value">Одесса, Греческая улица, 1А<br>(Перед приездом -
                                позвоните!)</div>
                        </div>
                    </div>
                    <div class="contacts-adderss-item">
                        <div class="contacts-adderss-icon"></div>
                        <div class="contacts-adderss-content">
                            <div class="contacts-title">Дополнительный офис</div>
                            <div class="contacts-adderss-value"></div>
                        </div>
                    </div>
                    <div class="socials-text flicker-text"> <span class="green-dot animate-flicker"></span> <span
                            class="flicker-text-content">Без выходных: 9:00-18:00</span></div>
                    <div class="phone-box"> <a href="tel:+7 (967) 555-75-92">+7 (967) 555-75-92</a></div> <a
                        href="#modal" class="button orange contacts-button" data-modal="#call-modal">Позвоните
                        мне</a>
                    <div class="contacts-title">Пишите в мессенджер,<br>отвечаем мгновенно</div>
                    <div class="socials-list contacts-socials-list"> <a href="#viber" class="social-item">
                            <noscript><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-viber.png"></noscript><img
                                class="lazyload"
                                src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                data-src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-viber.png">
                        </a> <a href="#telegram" class="social-item"> <noscript><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-telegram.png"></noscript><img
                                class="lazyload"
                                src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                data-src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-telegram.png">
                        </a> <a href="#whatsapp" class="social-item"> <noscript><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-whatsapp.png"></noscript><img
                                class="lazyload"
                                src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                data-src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-whatsapp.png">
                        </a></div>
                    <div class="contacts-email-box"> <noscript><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-email-min.png"></noscript><img
                            class="lazyload"
                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                            data-src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-email-min.png">
                        <div class="contacts-email-content">
                            <div class="contacts-title">Электронная почта</div>
                            <div class="contacts-email"><a href="mailto:mail@amstroj.com">mail@amstroj.com</a></div>
                        </div>
                    </div>
                </div>
                <div class="contacts-col">
                    <div class="section-title-small text-center"><b>До встречи</b></div>
                    <div class="meeting-box"> <noscript><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/images/meeting1.png"></noscript><img
                            class="lazyload"
                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                            data-src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/images/meeting1.png">
                        <span class="meeting-label">В офисе</span>
                    </div>
                    <div class="meeting-box"> <noscript><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/images/meeting2.png"></noscript><img
                            class="lazyload"
                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                            data-src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/images/meeting2.png">
                        <span class="meeting-label">На участке</span>
                    </div>
                </div>
                <div class="contacts-col-big">
                    <div class="foorter-contacts-map" id="foorter-contacts-map" style="width: 100%;height: 500px;">
                    </div>
                    <script type="text/javascript">
                    var coords = JSON.parse('["46.481861","30.747392"]');
                    var address = 'Одесса, Греческая улица, 1А<br>(Перед приездом - позвоните!)';
                    var coords_2 = undefined;
                    var address_2 = undefined;
                    </script>
                </div>
            </div>
        </div>
    </section>

    <?php
        include_once 'blocks/smeta-form.php';
    ?>
</main>

<?php get_footer(); ?>