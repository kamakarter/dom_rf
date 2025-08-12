<?php
/*
Template Name: home
*/
?>

<?php
get_header();

?>


<!-- custom-modal-open-button -->

<div class="front-page-header header-bg"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/home_bg.jpg');">

    <style>
        .front-page-header.header-bg {
            background-image: url('<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/home_bg.jpg');
        }
    </style>
    <header class="hidden-print">
        <div class="container">
            <div class="header-top-wrap">
                <div class="header-logo-wrapper">
                    <a href="<?php echo get_template_directory_uri(); ?>" class="header-logo"> <noscript><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/04/logo.png" class="header-logo-image"
                                alt="СтройДом" title="СтройДом"></noscript><img
                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/04/logo.png"
                            class="lazyload header-logo-image" alt="СтройДом" title="СтройДом">
                        <div class="header-logo-text"> <span class="header-logo-text-main">СтройДом</span> <span
                                class="header-logo-text-main header-logo-text-main-mobile">
                                <noindex>СтройДом</noindex>
                            </span> <span class="header-logo-text-default">Строительство качественных домов в Одессе
                                и Одесской области</span></div>
                    </a>
                </div>
                <div class="header-google-rating-wrapper">
                    <div class="header-google-rating">
                        <div class="header-google-rating-value"><span>4.8</span></div>
                        <div class="header-google-rating-content">
                            <div class="header-google-rating-stars"> <span class="google-rating-star"></span> <span
                                    class="google-rating-star"></span> <span class="google-rating-star"></span>
                                <span class="google-rating-star"></span> <span
                                    class="google-rating-star google-rating-star-80"></span>
                            </div>
                            <div class="header-google-rating-text">
                                <noindex><b>Рейтинг в Google</b> на основании 50 отзывов</noindex>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center header-button-wrapper"> <a href="#modal"
                        class="button green header-button">Отправить проект на просчет</a></div>
                <div class="header-socials-wrapper">
                    <div class="socials-box">
                        <div class="socials-text flicker-text"> <span class="green-dot animate-flicker"></span>
                            <span class="flicker-text-content">Пишите, мы онлайн</span>
                        </div>
                        <div class="socials-list"> <a href="#viber" class="social-item"> <noscript><img
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
                            </a> <a href="mailto:mail@amstroj.com" class="social-item"> <noscript><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-email.png"></noscript><img
                                    class="lazyload"
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-email.png">
                            </a></div>
                    </div>
                </div>
                <div class="header-phone-wrapper">
                    <div class="socials-text flicker-text before-phone-text"> <span
                            class="green-dot animate-flicker"></span> <span class="flicker-text-content">Без
                            выходных: 9:00-18:00</span></div>
                    <div class="phone-box"> <a href="tel:+7 (967) 555-75-92">+7 (967) 555-75-92</a></div>
                    <div class="call-phone-box"> <a href="#modal" class="custom-modal-open-button">Заказать звонок</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <nav class="header-menu-wrapper hidden-print">
        <div class="container">
            <div class="header-menu-cont">
                <div class="header-menu-box" id="header-menu-box">
                    <div class="menu-osnovnoe-menyu-container">
                        <ul id="menu-osnovnoe-menyu" class="menu">
                            <li id="menu-item-17"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17"><a
                                    href="/o-nas/">О компании</a></li>
                            <li id="menu-item-465"
                                class="mega-menu menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-465">
                                <a href="/projects">Проекты и цены</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-416"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-416">
                                        <a href="#">1</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-460"
                                                class="mega-item-big menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-460">
                                                <a href="/kamennye-doma/">Каменные дома</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-443"
                                                        class="mega-item-medium menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-443">
                                                        <a href="/doma-iz-blokov/">Дома из
                                                            блоков</a>
                                                        <ul class="sub-menu">
                                                            <li id="menu-item-446"
                                                                class="mega-item-small menu-item menu-item-type-taxonomy menu-item-object-category menu-item-446">
                                                                <a href="/doma-iz-gazobetona/">Газобетон</a>
                                                            </li>
                                                            <li id="menu-item-450"
                                                                class="mega-item-small menu-item menu-item-type-taxonomy menu-item-object-category menu-item-450">
                                                                <a href="/doma-iz-keramicheskih-blokov/">Теплая
                                                                    керамика</a>
                                                            </li>
                                                            <li id="menu-item-441"
                                                                class="mega-item-small menu-item menu-item-type-taxonomy menu-item-object-category menu-item-441">
                                                                <a href="/doma-iz-arbolita/">Арболит</a>
                                                            </li>
                                                            <li id="menu-item-447"
                                                                class="mega-item-small menu-item menu-item-type-taxonomy menu-item-object-category menu-item-447">
                                                                <a
                                                                    href="/doma-iz-gazosilikatnyh-blokov/">Газосиликат</a>
                                                            </li>
                                                            <li id="menu-item-456"
                                                                class="mega-item-small menu-item menu-item-type-taxonomy menu-item-object-category menu-item-456">
                                                                <a href="/doma-iz-penoblokov/">Пеноблок</a>
                                                            </li>
                                                            <li id="menu-item-449"
                                                                class="mega-item-small menu-item menu-item-type-taxonomy menu-item-object-category menu-item-449">
                                                                <a
                                                                    href="/doma-iz-keramzitobetonnyh-blokov/">Керамзитобетон</a>
                                                            </li>
                                                            <li id="menu-item-457"
                                                                class="mega-item-small menu-item menu-item-type-taxonomy menu-item-object-category menu-item-457">
                                                                <a
                                                                    href="/doma-iz-polistirolbetona/">Полистиролбетон</a>
                                                            </li>
                                                            <li id="menu-item-459"
                                                                class="mega-item-small menu-item menu-item-type-taxonomy menu-item-object-category menu-item-459">
                                                                <a href="/doma-iz-teploblokov/">Теплоблок</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li id="menu-item-451"
                                                        class="mega-item-medium menu-item menu-item-type-taxonomy menu-item-object-category menu-item-451">
                                                        <a href="/doma-iz-kirpicha/">Дома из
                                                            кирпича</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-466"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-466">
                                        <a href="#">2</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-439"
                                                class="mega-item-big menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-439">
                                                <a href="/derevyannye-doma/">Деревянные дома</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-445"
                                                        class="mega-item-medium menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-445">
                                                        <a href="/doma-iz-brusa/">Дома из
                                                            бруса</a>
                                                        <ul class="sub-menu">
                                                            <li id="menu-item-452"
                                                                class="mega-item-small menu-item menu-item-type-taxonomy menu-item-object-category menu-item-452">
                                                                <a href="/doma-iz-kleenogo-brusa/">Клееный</a>
                                                            </li>
                                                            <li id="menu-item-458"
                                                                class="mega-item-small menu-item menu-item-type-taxonomy menu-item-object-category menu-item-458">
                                                                <a
                                                                    href="/doma-iz-profilirovannogo-brusa/">Профилированный</a>
                                                            </li>
                                                            <li id="menu-item-448"
                                                                class="mega-item-small menu-item menu-item-type-taxonomy menu-item-object-category menu-item-448">
                                                                <a href="/doma-iz-dvojnogo-brusa/">Двойной</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li id="menu-item-444"
                                                        class="mega-item-medium menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-444">
                                                        <a href="/doma-iz-brevna/">Дома из
                                                            бревна</a>
                                                        <ul class="sub-menu">
                                                            <li id="menu-item-455"
                                                                class="mega-item-small menu-item menu-item-type-taxonomy menu-item-object-category menu-item-455">
                                                                <a
                                                                    href="/doma-iz-oczilindrovannogo-brevna/">Оцилиндрованное</a>
                                                            </li>
                                                            <li id="menu-item-10310"
                                                                class="mega-item-small menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10310">
                                                                <a href="/doma-iz-rublennogo-brevna/">Рубленное</a>
                                                            </li>
                                                            <li id="menu-item-453"
                                                                class="mega-item-small menu-item menu-item-type-taxonomy menu-item-object-category menu-item-453">
                                                                <a href="/doma-iz-lafeta/">Лафет</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li id="menu-item-462"
                                                        class="mega-item-medium menu-item menu-item-type-taxonomy menu-item-object-category menu-item-462">
                                                        <a href="/kombinirovannye-doma/">Комбинированные
                                                            дома</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-473"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-473">
                                        <a href="#">3</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-438"
                                                class="mega-item-big menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-438">
                                                <a href="/bystrovozvodimye-doma/">Быстровозводимые
                                                    дома</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-461"
                                                        class="mega-item-medium menu-item menu-item-type-taxonomy menu-item-object-category menu-item-461">
                                                        <a href="/karkasnye-doma/">Каркасные</a>
                                                    </li>
                                                    <li id="menu-item-440"
                                                        class="mega-item-medium menu-item menu-item-type-taxonomy menu-item-object-category menu-item-440">
                                                        <a href="/doma-iz-sip-panelej/">SIP-панели</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li id="menu-item-463"
                                                class="mega-item-big menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-463">
                                                <a href="/monolitnye-doma/">Монолитные дома</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-454"
                                                        class="mega-item-small menu-item menu-item-type-taxonomy menu-item-object-category menu-item-454">
                                                        <a href="/doma-iz-nesemnoj-opalubki/">Несъемная
                                                            опалубка</a>
                                                    </li>
                                                    <li id="menu-item-442"
                                                        class="mega-item-small menu-item menu-item-type-taxonomy menu-item-object-category menu-item-442">
                                                        <a href="/doma-iz-betona/">Бетон</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li id="menu-item-10318"
                                                class="mega-item-big menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-10318">
                                                <a href="/bani/">Бани под ключ</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-10317"
                                                        class="mega-item-small menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10317">
                                                        <a href="/bani-iz-brusa/">Из бруса</a>
                                                    </li>
                                                    <li id="menu-item-10316"
                                                        class="mega-item-small menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10316">
                                                        <a href="/bani-iz-brevna/">Из бревна</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-474"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-474">
                                        <a href="#">4</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-379"
                                                class="mega-item-big menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-379">
                                                <a href="#">Вид дома</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-468"
                                                        class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-468">
                                                        <a href="/projectskottedj/">Коттедж</a>
                                                    </li>
                                                    <li id="menu-item-469"
                                                        class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-469">
                                                        <a href="/projectsdachnyi/">Дачный</a>
                                                    </li>
                                                    <li id="menu-item-472"
                                                        class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-472">
                                                        <a href="/projectsdupleks/">Дуплекс</a>
                                                    </li>
                                                    <li id="menu-item-470"
                                                        class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-470">
                                                        <a href="/projectsgostevoi/">Гостевой</a>
                                                    </li>
                                                    <li id="menu-item-90800"
                                                        class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-90800">
                                                        <a href="/stroitelstvo-gostinic-pod-klyuch/">Гостиница</a>
                                                    </li>
                                                    <li id="menu-item-471"
                                                        class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-471">
                                                        <a href="/projectstaunhaus/">Таунхаус</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li id="menu-item-413"
                                                class="mega-item-big menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-413">
                                                <a href="#">Проживание</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-414"
                                                        class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-414">
                                                        <a href="/projectspostoyannoe/">Постоянное</a>
                                                    </li>
                                                    <li id="menu-item-415"
                                                        class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-415">
                                                        <a href="/projectsletnee/">Летнее</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-419"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-419">
                                        <a href="#">5</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-385"
                                                class="mega-item-big menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-385">
                                                <a href="#">Особенности</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-387"
                                                        class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-387">
                                                        <a href="/projectss-terrasoi/">терраса</a>
                                                    </li>
                                                    <li id="menu-item-386"
                                                        class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-386">
                                                        <a href="/projectss-garajom/">гараж</a>
                                                    </li>
                                                    <li id="menu-item-388"
                                                        class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-388">
                                                        <a href="/projectss-verandoi/">веранда</a>
                                                    </li>
                                                    <li id="menu-item-389"
                                                        class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-389">
                                                        <a href="/projectss-balkonom/">балкон</a>
                                                    </li>
                                                    <li id="menu-item-390"
                                                        class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-390">
                                                        <a href="/projectss-panoramnymi-oknami/">панорамные окна</a>
                                                    </li>
                                                    <li id="menu-item-391"
                                                        class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-391">
                                                        <a href="/projectsso-vtorym-svetom/">второй свет</a>
                                                    </li>
                                                    <li id="menu-item-392"
                                                        class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-392">
                                                        <a href="/projectss-kotelnoi/">котельная</a>
                                                    </li>
                                                    <li id="menu-item-393"
                                                        class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-393">
                                                        <a href="/projectss-saunoi/">с сауной</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-420"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-420">
                                        <a href="#">6</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-10433"
                                                class="mega-item-big menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-10433">
                                                <a href="#">Стиль</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-10441"
                                                        class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-10441">
                                                        <a href="/projectssovremennyi/">Современный</a>
                                                    </li>
                                                    <li id="menu-item-10435"
                                                        class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-10435">
                                                        <a href="/projectsfahverk/">Фахверк</a>
                                                    </li>
                                                    <li id="menu-item-10436"
                                                        class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-10436">
                                                        <a href="/projectsshale/">Шале</a>
                                                    </li>
                                                    <li id="menu-item-10437"
                                                        class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-10437">
                                                        <a href="/projectsstil-raita/">Стиль Райта</a>
                                                    </li>
                                                    <li id="menu-item-10438"
                                                        class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-10438">
                                                        <a href="/projectshai-tek/">Хай-тек</a>
                                                    </li>
                                                    <li id="menu-item-10439"
                                                        class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-10439">
                                                        <a href="/projectsbarnhaus/">Барнхаус</a>
                                                    </li>
                                                    <li id="menu-item-10440"
                                                        class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-10440">
                                                        <a href="/projectsevropeiskii/">Европейский</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-421"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-421">
                                        <a href="#">7</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-394"
                                                class="mega-item-big menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-394">
                                                <a href="#">Этажность</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-395"
                                                        class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-395">
                                                        <a href="/projectsodnoetajnye/">одноэтажные</a>
                                                    </li>
                                                    <li id="menu-item-396"
                                                        class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-396">
                                                        <a href="/projectss-mansardoi/">с мансардой</a>
                                                    </li>
                                                    <li id="menu-item-397"
                                                        class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-397">
                                                        <a href="/projectsdvuhetajnye/">двухэтажные</a>
                                                    </li>
                                                    <li id="menu-item-398"
                                                        class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-398">
                                                        <a href="/projectss-cokolnym-etajom/">цокольный этаж</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li id="menu-item-408"
                                                class="mega-item-big menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-408">
                                                <a href="#">Площадь</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-10053"
                                                        class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-10053">
                                                        <a href="/projects50-kv-m/">50 кв.м</a>
                                                    </li>
                                                    <li id="menu-item-409"
                                                        class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-409">
                                                        <a href="/projects100-kv-m/">100 кв.м</a>
                                                    </li>
                                                    <li id="menu-item-410"
                                                        class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-410">
                                                        <a href="/projects150-kv-m/">150 кв.м</a>
                                                    </li>
                                                    <li id="menu-item-411"
                                                        class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-411">
                                                        <a href="/projects200-kv-m/">200 кв.м</a>
                                                    </li>
                                                    <li id="menu-item-412"
                                                        class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-412">
                                                        <a href="/projects300-kv-m/">300 кв.м</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li id="menu-item-68"
                                class="mega-menu menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-68">
                                <a href="#">Услуги</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-10184"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-10184">
                                        <a href="#">8</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-10169"
                                                class="mega-item-medium menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-10169">
                                                <a href="/fundament/">Фундамент</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-10182"
                                                        class="mega-item-small menu-item menu-item-type-post_type menu-item-object-page menu-item-10182">
                                                        <a href="/lentochnyj-fundament/">Ленточный</a>
                                                    </li>
                                                    <li id="menu-item-10168"
                                                        class="mega-item-small menu-item menu-item-type-post_type menu-item-object-page menu-item-10168">
                                                        <a href="/stolbchatyj-fundament/">Столбчатый</a>
                                                    </li>
                                                    <li id="menu-item-10175"
                                                        class="mega-item-small menu-item menu-item-type-post_type menu-item-object-page menu-item-10175">
                                                        <a href="/fundament-na-vintovyh-svayah/">На
                                                            винтовых сваях</a>
                                                    </li>
                                                    <li id="menu-item-10174"
                                                        class="mega-item-small menu-item menu-item-type-post_type menu-item-object-page menu-item-10174">
                                                        <a href="/fundament-monolitnaya-plita/">Монолитная
                                                            плита</a>
                                                    </li>
                                                    <li id="menu-item-10179"
                                                        class="mega-item-small menu-item menu-item-type-post_type menu-item-object-page menu-item-10179">
                                                        <a
                                                            href="/fundament-svajno-rostverkovyj/">Свайно-ростверковый</a>
                                                    </li>
                                                    <li id="menu-item-10178"
                                                        class="mega-item-small menu-item menu-item-type-post_type menu-item-object-page menu-item-10178">
                                                        <a href="/fundament-s-czokolnym-etazhom/">С
                                                            цокольным этажом</a>
                                                    </li>
                                                    <li id="menu-item-10180"
                                                        class="mega-item-small menu-item menu-item-type-post_type menu-item-object-page menu-item-10180">
                                                        <a href="/blochnyj-fundament/">Блочный</a>
                                                    </li>
                                                    <li id="menu-item-10181"
                                                        class="mega-item-small menu-item menu-item-type-post_type menu-item-object-page menu-item-10181">
                                                        <a href="/buronabivnoj-fundament/">Буронабивной</a>
                                                    </li>
                                                    <li id="menu-item-10183"
                                                        class="mega-item-small menu-item menu-item-type-post_type menu-item-object-page menu-item-10183">
                                                        <a href="/uteplennaya-shvedskaya-plita/">Утепленная
                                                            шведская плита</a>
                                                    </li>
                                                    <li id="menu-item-10177"
                                                        class="mega-item-small menu-item menu-item-type-post_type menu-item-object-page menu-item-10177">
                                                        <a href="/fundament-pod-kirpichnyj-dom/">Под
                                                            кирпичный дом</a>
                                                    </li>
                                                    <li id="menu-item-10172"
                                                        class="mega-item-small menu-item menu-item-type-post_type menu-item-object-page menu-item-10172">
                                                        <a href="/fundament-dlya-derevyannogo-doma/">Для
                                                            деревянного дома</a>
                                                    </li>
                                                    <li id="menu-item-10176"
                                                        class="mega-item-small menu-item menu-item-type-post_type menu-item-object-page menu-item-10176">
                                                        <a href="/fundament-pod-garazh/">Под
                                                            гараж</a>
                                                    </li>
                                                    <li id="menu-item-10171"
                                                        class="mega-item-small menu-item menu-item-type-post_type menu-item-object-page menu-item-10171">
                                                        <a href="/fundament-dlya-dachi/">Для
                                                            дачи</a>
                                                    </li>
                                                    <li id="menu-item-10170"
                                                        class="mega-item-small menu-item menu-item-type-post_type menu-item-object-page menu-item-10170">
                                                        <a href="/fundament-dlya-bani/">Для
                                                            бани</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-10324"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-10324">
                                        <a href="#">10</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-10319"
                                                class="mega-item-medium menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-10319">
                                                <a href="/proektirovanie-domov/">Проектирование домов</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-10320"
                                                        class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-10320">
                                                        <a href="/proektirovanie-domov/karkasnyh-domov/">Каркасных</a>
                                                    </li>
                                                    <li id="menu-item-10323"
                                                        class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-10323">
                                                        <a href="/proektirovanie-domov/iz-brevna/">Из бревна</a>
                                                    </li>
                                                    <li id="menu-item-10321"
                                                        class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-10321">
                                                        <a href="/proektirovanie-domov/domov-iz-brusa/">Из бруса</a>
                                                    </li>
                                                    <li id="menu-item-10322"
                                                        class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-10322">
                                                        <a href="/proektirovanie-domov/iz-gazobetona/">Из
                                                            газобетона</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-10185"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-10185">
                                        <a href="#">9</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-10188"
                                                class="mega-item-medium menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-10188">
                                                <a href="/engineer-systems">Монтаж
                                                    инженерных систем</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-10187"
                                                        class="mega-item-small menu-item menu-item-type-post_type menu-item-object-page menu-item-10187">
                                                        <a href="/montazh-otopleniya-chastnyh-domov/">Монтаж
                                                            отопления частных домов</a>
                                                    </li>
                                                    <li id="menu-item-10186"
                                                        class="mega-item-small menu-item menu-item-type-post_type menu-item-object-page menu-item-10186">
                                                        <a href="/montazh-kotlov-otopleniya/">Монтаж
                                                            котлов отопления</a>
                                                    </li>
                                                    <li id="menu-item-10456"
                                                        class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-10456">
                                                        <a href="/septik-pod-klyuch/">Установка септиков</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li id="menu-item-69"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-69"><a
                                    href="/sales">Акции</a></li>
                            <li id="menu-item-277"
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-277"><a
                                    href="/portfolio/">Портфолио и отзывы</a></li>
                            <li id="menu-item-19"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19"><a
                                    href="/contacts/">Контакты</a></li>
                            <li class="menu-item menu-item-after menu-item-favorite"><a
                                    href="/favorites/">Избранное</a></li>
                            <li class="menu-item menu-item-after menu-item-search"><a href="#">Поиск</a></li>
                        </ul>
                    </div>
                    <div class="mobile-menu-btns"> <a href="#" class="mobile-menu-btn mobile-menu-btn-left"
                            data-menu="#main"> <span class="mobile-menu-btn-icon"> <span
                                    class="mobile-menu-btn-icon-bar"></span> <span
                                    class="mobile-menu-btn-icon-bar"></span> <span
                                    class="mobile-menu-btn-icon-bar"></span> </span> <span
                                class="mobile-menu-btn-text">Меню</span> </a> <a href="#"
                            class="mobile-menu-btn mobile-menu-btn-right" data-menu="#katalog"> <span
                                class="mobile-menu-btn-text">Проекты</span> <span class="mobile-menu-btn-icon">
                                <span class="mobile-menu-btn-icon-bar"></span> <span
                                    class="mobile-menu-btn-icon-bar"></span> <span
                                    class="mobile-menu-btn-icon-bar"></span> </span> </a></div>
                </div>
            </div>
        </div>
    </nav>
    <div class="top-preroll">
        <div class="container">
            <div class="flex-row">
                <div class="top-preroll-wrap">
                    <h1 class="breadcrumbs">Строительство домов под ключ в Одессе и Одесской области</h1>
                    <div class="imitation-h1"><b>Строим надежные дома</b> со сроком эксплуатации от 150 лет</div>
                    <div class="after-title">по индивидуальному или готовому проекту</div>
                    <ul class="top-preroll-pluses">
                        <li class="top-preroll-plus"><b>Цена не изменится</b> в процессе строительства</li>
                        <li class="top-preroll-plus">Расширенная <b>гарантия 5 лет</b> включена в договор</li>
                        <li class="top-preroll-plus">От проекта до дома <b>”под ключ” за 120 дней</b></li>
                    </ul>
                    <div class="top-preroll-button-box"> <a href="#modal"
                            class="button orange top-preroll-button scroll-to-calc" data-modal="#quiz-modal">
                            Рассчитать стоимость<br>строительства дома </a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<main>
    <section id="quiz-doma" class="quiz-section lazyload">
        <div class="container">
            <div class="quiz-container">
                <div class="quiz-content">
                    <div class="before-title text-center">Пройдите бесплатный тест-калькулятор и</div>
                    <div class="section-title text-center"><b>Получите предварительный расчет<br> стоимости</b> дома
                        за 1 минуту</div>
                    <div class="left-manager-box">
                        <div class="left-manager-photo"> <noscript><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/sotrudnik-8.jpg"
                                    alt="Иван Михайленков" title="Иван Михайленков"></noscript><img class="lazyload"
                                src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/sotrudnik-8.jpg"
                                alt="Иван Михайленков" title="Иван Михайленков"></div>
                        <div class="left-manager-fio">Иван Михайленков</div>
                        <div class="left-manager-post">Ведущий архитектор</div>
                        <div class="left-manager-text">Здравствуйте, меня зовут Иван, и я помогу вам понять какой
                            бюджет нужен для строительства вашего дома под ключ.</div>
                        <div class="left-manager-pluses-title">Ответив на вопросы <b>вы получите:</b></div>
                        <div class="left-manager-pluses-list">
                            <div class="lazyload left-manager-plus-item left-manager-plus-item-0"
                                data-bg="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/lm1.png"
                                style="background-image: url(data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20500%20300%22%3E%3C/svg%3E);">
                                <span class="left-manager-plus-item-icon"></span> <span
                                    class="left-manager-plus-item-text"><b>Ориентировочную стоимость</b>
                                    строительства</span>
                            </div>
                            <div class="lazyload left-manager-plus-item left-manager-plus-item-1"
                                data-bg="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/lm2.png"
                                style="background-image: url(data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20500%20300%22%3E%3C/svg%3E);">
                                <span class="left-manager-plus-item-icon"></span> <span
                                    class="left-manager-plus-item-text"><b>Точную подборку проектов</b> исходя из
                                    ваших ответов либо предложим новый вариант</span>
                            </div>
                            <div class="lazyload left-manager-plus-item left-manager-plus-item-2"
                                data-bg="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/lm3.png"
                                style="background-image: url(data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20500%20300%22%3E%3C/svg%3E);">
                                <span class="left-manager-plus-item-icon"></span> <span
                                    class="left-manager-plus-item-text"><b>Один из 3-х подарков</b> при заказе
                                    строительства у нас</span>
                            </div>
                        </div>
                    </div>
                    <form class="quiz-form" id="quiz-form-doma"> <input type="hidden" name="action"
                            value="send_quiz"> <input type="hidden" name="quiz_type" value="doma_data">
                        <div class="quiz-header">
                            <div class="quiz-loader">
                                <div class="quiz-loader-progress"></div>
                            </div>
                        </div>
                        <div class="quiz-body">
                            <div id="quiz-doma-step-0" class="quiz-step-item show" data-step="1">
                                <div class="quiz-step-item-top">
                                    <div class="quiz-step-item-number">01</div>
                                    <div class="quiz-step-item-title"><b>Какой дом вы хотите построить?</b></div>
                                </div>
                                <div class="quiz-step-item-content"> <input type="radio" class="radio-hidden"
                                        id="quiz-doma-0-0" name="quiz-doma[0]" value="Дом из блоков"> <label
                                        for="quiz-doma-0-0"
                                        class="quiz-label-item quiz-label-type-radio label-item-small label-item-with_image">
                                        <noscript><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/06/c2e36cf12ff6c983fded8f46951c4b27-300x188.jpeg"
                                                class="quiz-label-item-image" alt="Дом из блоков"
                                                title="Дом из блоков"></noscript><img
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/06/c2e36cf12ff6c983fded8f46951c4b27-300x188.jpeg"
                                            class="lazyload quiz-label-item-image" alt="Дом из блоков"
                                            title="Дом из блоков">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">Дом из блоков</div>
                                    </label> <input type="radio" class="radio-hidden" id="quiz-doma-0-1"
                                        name="quiz-doma[0]" value="Каркасный дом"> <label for="quiz-doma-0-1"
                                        class="quiz-label-item quiz-label-type-radio label-item-small label-item-with_image">
                                        <noscript><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/06/9fc93cf86a5d053f77d33ea646f7b39b-300x225.jpeg"
                                                class="quiz-label-item-image" alt="Каркасный дом"
                                                title="Каркасный дом"></noscript><img
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/06/9fc93cf86a5d053f77d33ea646f7b39b-300x225.jpeg"
                                            class="lazyload quiz-label-item-image" alt="Каркасный дом"
                                            title="Каркасный дом">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">Каркасный дом</div>
                                    </label> <input type="radio" class="radio-hidden" id="quiz-doma-0-2"
                                        name="quiz-doma[0]" value="Дом из профилированного бруса"> <label
                                        for="quiz-doma-0-2"
                                        class="quiz-label-item quiz-label-type-radio label-item-small label-item-with_image">
                                        <noscript><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/06/085248674f6f1d97c43ab8e800b73697-300x200.jpeg"
                                                class="quiz-label-item-image" alt="Дом из профилированного бруса"
                                                title="Дом из профилированного бруса"></noscript><img
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/06/085248674f6f1d97c43ab8e800b73697-300x200.jpeg"
                                            class="lazyload quiz-label-item-image" alt="Дом из профилированного бруса"
                                            title="Дом из профилированного бруса">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">Дом из профилированного бруса</div>
                                    </label> <input type="radio" class="radio-hidden" id="quiz-doma-0-3"
                                        name="quiz-doma[0]" value="Дом из оцилиндрованного бревна"> <label
                                        for="quiz-doma-0-3"
                                        class="quiz-label-item quiz-label-type-radio label-item-small label-item-with_image">
                                        <noscript><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/06/brevno.png"
                                                class="quiz-label-item-image" alt="Дом из оцилиндрованного бревна"
                                                title="Дом из оцилиндрованного бревна"></noscript><img
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/06/brevno.png"
                                            class="lazyload quiz-label-item-image"
                                            alt="Дом из оцилиндрованного бревна"
                                            title="Дом из оцилиндрованного бревна">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">Дом из оцилиндрованного бревна</div>
                                    </label> <input type="radio" class="radio-hidden" id="quiz-doma-0-4"
                                        name="quiz-doma[0]" value="Дом из кирпича"> <label for="quiz-doma-0-4"
                                        class="quiz-label-item quiz-label-type-radio label-item-small label-item-with_image">
                                        <noscript><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/97399578ee6e8bb880e30b4e9b17c2c1-300x225.jpg"
                                                class="quiz-label-item-image" alt="Дом из кирпича"
                                                title="Дом из кирпича"></noscript><img
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/97399578ee6e8bb880e30b4e9b17c2c1-300x225.jpg"
                                            class="lazyload quiz-label-item-image" alt="Дом из кирпича"
                                            title="Дом из кирпича">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">Дом из кирпича</div>
                                    </label> <input type="radio" class="radio-hidden" id="quiz-doma-0-5"
                                        name="quiz-doma[0]" value="Дом из SIP панелей"> <label for="quiz-doma-0-5"
                                        class="quiz-label-item quiz-label-type-radio label-item-small label-item-with_image">
                                        <noscript><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/doma-1-6.png"
                                                class="quiz-label-item-image" alt="Дом из SIP панелей"
                                                title="Дом из SIP панелей"></noscript><img
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/doma-1-6.png"
                                            class="lazyload quiz-label-item-image" alt="Дом из SIP панелей"
                                            title="Дом из SIP панелей">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">Дом из SIP панелей</div>
                                    </label></div>
                            </div>
                            <div id="quiz-doma-step-1" class="quiz-step-item" data-step="2">
                                <div class="quiz-step-item-top">
                                    <div class="quiz-step-item-number">02</div>
                                    <div class="quiz-step-item-title"><b>Сколько этажей вам нужно?</b></div>
                                </div>
                                <div class="quiz-step-item-content"> <input type="radio" class="radio-hidden"
                                        id="quiz-doma-1-0" name="quiz-doma[1]" value="1 этаж"> <label
                                        for="quiz-doma-1-0"
                                        class="quiz-label-item quiz-label-type-radio label-item-medium label-item-without_image">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">1 этаж</div>
                                    </label> <input type="radio" class="radio-hidden" id="quiz-doma-1-1"
                                        name="quiz-doma[1]" value="1 этаж + мансарда"> <label for="quiz-doma-1-1"
                                        class="quiz-label-item quiz-label-type-radio label-item-medium label-item-without_image">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">1 этаж + мансарда</div>
                                    </label> <input type="radio" class="radio-hidden" id="quiz-doma-1-2"
                                        name="quiz-doma[1]" value="2 этажа"> <label for="quiz-doma-1-2"
                                        class="quiz-label-item quiz-label-type-radio label-item-medium label-item-without_image">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">2 этажа</div>
                                    </label> <input type="radio" class="radio-hidden" id="quiz-doma-1-3"
                                        name="quiz-doma[1]" value="2 этажа + мансарда"> <label for="quiz-doma-1-3"
                                        class="quiz-label-item quiz-label-type-radio label-item-medium label-item-without_image">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">2 этажа + мансарда</div>
                                    </label> <input type="radio" class="radio-hidden" id="quiz-doma-1-4"
                                        name="quiz-doma[1]" value="3 этажа"> <label for="quiz-doma-1-4"
                                        class="quiz-label-item quiz-label-type-radio label-item-medium label-item-without_image">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">3 этажа</div>
                                    </label> <input type="radio" class="radio-hidden" id="quiz-doma-1-5"
                                        name="quiz-doma[1]" value="Ещё не определились"> <label for="quiz-doma-1-5"
                                        class="quiz-label-item quiz-label-type-radio label-item-medium label-item-without_image">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">Ещё не определились</div>
                                    </label></div>
                            </div>
                            <div id="quiz-doma-step-2" class="quiz-step-item column-bg-2" data-step="3">
                                <div class="quiz-step-item-top">
                                    <div class="quiz-step-item-number">03</div>
                                    <div class="quiz-step-item-title">У вас есть участок?</div>
                                </div>
                                <div class="quiz-step-item-content"> <input type="radio" class="radio-hidden"
                                        id="quiz-doma-2-0" name="quiz-doma[2]" value="Участок есть, в черте города">
                                    <label for="quiz-doma-2-0"
                                        class="quiz-label-item quiz-label-type-radio label-item-medium label-item-without_image label-item-is_column">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">Участок есть, в черте города</div>
                                    </label> <input type="radio" class="radio-hidden" id="quiz-doma-2-1"
                                        name="quiz-doma[2]" value="Участок есть, за городом до 100 км"> <label
                                        for="quiz-doma-2-1"
                                        class="quiz-label-item quiz-label-type-radio label-item-medium label-item-without_image label-item-is_column">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">Участок есть, за городом до 100 км</div>
                                    </label> <input type="radio" class="radio-hidden" id="quiz-doma-2-2"
                                        name="quiz-doma[2]" value="Участок есть, за городом далее 100 км"> <label
                                        for="quiz-doma-2-2"
                                        class="quiz-label-item quiz-label-type-radio label-item-medium label-item-without_image label-item-is_column">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">Участок есть, за городом далее 100 км
                                        </div>
                                    </label> <input type="radio" class="radio-hidden" id="quiz-doma-2-3"
                                        name="quiz-doma[2]" value="Участка нет"> <label for="quiz-doma-2-3"
                                        class="quiz-label-item quiz-label-type-radio label-item-medium label-item-without_image label-item-is_column">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">Участка нет</div>
                                    </label>
                                </div>
                            </div>
                            <div id="quiz-doma-step-3" class="quiz-step-item" data-step="4">
                                <div class="quiz-step-item-top">
                                    <div class="quiz-step-item-number">04</div>
                                    <div class="quiz-step-item-title">Укажите размеры дома</div>
                                </div>
                                <div class="quiz-step-item-content"> <input type="radio" class="radio-hidden"
                                        id="quiz-doma-3-0" name="quiz-doma[3]" value="До 100 кв.м."> <label
                                        for="quiz-doma-3-0"
                                        class="quiz-label-item quiz-label-type-radio label-item- label-item-without_image">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">До 100 кв.м.</div>
                                    </label> <input type="radio" class="radio-hidden" id="quiz-doma-3-1"
                                        name="quiz-doma[3]" value="До 100 - 150 кв.м."> <label for="quiz-doma-3-1"
                                        class="quiz-label-item quiz-label-type-radio label-item- label-item-without_image">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">До 100 - 150 кв.м.</div>
                                    </label> <input type="radio" class="radio-hidden" id="quiz-doma-3-2"
                                        name="quiz-doma[3]" value="До 150 - 200 кв.м."> <label for="quiz-doma-3-2"
                                        class="quiz-label-item quiz-label-type-radio label-item- label-item-without_image">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">До 150 - 200 кв.м.</div>
                                    </label> <input type="radio" class="radio-hidden" id="quiz-doma-3-3"
                                        name="quiz-doma[3]" value="Более 200 кв.м."> <label for="quiz-doma-3-3"
                                        class="quiz-label-item quiz-label-type-radio label-item- label-item-without_image">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">Более 200 кв.м.</div>
                                    </label></div>
                            </div>
                            <div id="quiz-doma-step-4" class="quiz-step-item" data-step="5">
                                <div class="quiz-step-item-top">
                                    <div class="quiz-step-item-number">05</div>
                                    <div class="quiz-step-item-title">Когда планируете строительство?</div>
                                </div>
                                <div class="quiz-step-item-content"> <input type="radio" class="radio-hidden"
                                        id="quiz-doma-4-0" name="quiz-doma[4]" value="В ближайшее время"> <label
                                        for="quiz-doma-4-0"
                                        class="quiz-label-item quiz-label-type-radio label-item-medium label-item-without_image">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">В ближайшее время</div>
                                    </label> <input type="radio" class="radio-hidden" id="quiz-doma-4-1"
                                        name="quiz-doma[4]" value="В этом году"> <label for="quiz-doma-4-1"
                                        class="quiz-label-item quiz-label-type-radio label-item-medium label-item-without_image">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">В этом году</div>
                                    </label> <input type="radio" class="radio-hidden" id="quiz-doma-4-2"
                                        name="quiz-doma[4]" value="В следующем году"> <label for="quiz-doma-4-2"
                                        class="quiz-label-item quiz-label-type-radio label-item-medium label-item-without_image">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">В следующем году</div>
                                    </label> <input type="radio" class="radio-hidden" id="quiz-doma-4-3"
                                        name="quiz-doma[4]" value="Еще не определились"> <label for="quiz-doma-4-3"
                                        class="quiz-label-item quiz-label-type-radio label-item-medium label-item-without_image">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">Еще не определились</div>
                                    </label></div>
                            </div>
                            <div id="quiz-doma-step-5" class="quiz-step-item" data-step="6">
                                <div class="quiz-step-item-top">
                                    <div class="quiz-step-item-number">06</div>
                                    <div class="quiz-step-item-title"><b>Какой подарок для вашего участка</b> вы бы
                                        выбрали, при заказе строительства</div>
                                </div>
                                <div class="quiz-step-item-content"> <input type="radio" class="radio-hidden"
                                        id="quiz-doma-5-0" name="quiz-doma[5]" value="Бассейн"> <label
                                        for="quiz-doma-5-0"
                                        class="quiz-label-item quiz-label-type-radio label-item-small label-item-with_image label-item-is_long">
                                        <noscript><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/doma-p-1-198x300.png"
                                                class="quiz-label-item-image" alt="Бассейн"
                                                title="Бассейн"></noscript><img
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/doma-p-1-198x300.png"
                                            class="lazyload quiz-label-item-image" alt="Бассейн" title="Бассейн">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">Бассейн</div>
                                    </label> <input type="radio" class="radio-hidden" id="quiz-doma-5-1"
                                        name="quiz-doma[5]" value="Беседка"> <label for="quiz-doma-5-1"
                                        class="quiz-label-item quiz-label-type-radio label-item-small label-item-with_image label-item-is_long">
                                        <noscript><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2022/02/d5d656b9a444d423096f854cc889fba12-234x300.png"
                                                class="quiz-label-item-image" alt="Беседка"
                                                title="Беседка"></noscript><img
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2022/02/d5d656b9a444d423096f854cc889fba12-234x300.png"
                                            class="lazyload quiz-label-item-image" alt="Беседка" title="Беседка">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">Беседка</div>
                                    </label> <input type="radio" class="radio-hidden" id="quiz-doma-5-2"
                                        name="quiz-doma[5]" value="Качели"> <label for="quiz-doma-5-2"
                                        class="quiz-label-item quiz-label-type-radio label-item-small label-item-with_image label-item-is_long">
                                        <noscript><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/doma-p3-198x300.png"
                                                class="quiz-label-item-image" alt="Качели"
                                                title="Качели"></noscript><img
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/doma-p3-198x300.png"
                                            class="lazyload quiz-label-item-image" alt="Качели" title="Качели">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">Качели</div>
                                    </label></div>
                            </div>
                            <div id="quiz-doma-step-6" class="quiz-step-item quiz-step-item-before-thanks"
                                data-step="7">
                                <div class="quiz-step-item-top">
                                    <div class="quiz-step-item-number">Расчет пройден</div>
                                    <div class="quiz-step-item-title"><b>Мы получили данные <br>и приступаем к
                                            расчетам</b><span class="padding"></span>Укажите куда выслать <br>расчет
                                        стоимости?</div>
                                </div>
                                <div class="quiz-step-item-content">
                                    <div class="form-group-socials">
                                        <div class="form-group form-group-socials-labels"> <input type="radio"
                                                id="whatsapp-quiz-doma" name="send_to" value="whatsapp"> <label
                                                class="form-group-social-label" for="whatsapp-quiz-doma">
                                                <noscript><img
                                                        src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-whatsapp.png"
                                                        alt="Whatsapp" title="Whatsapp"></noscript><img
                                                    class="lazyload"
                                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                                    data-src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-whatsapp.png"
                                                    alt="Whatsapp" title="Whatsapp"> <span
                                                    class="form-group-social-label-text">Whatsapp</span> </label>
                                            <input type="radio" id="viber-quiz-doma" name="send_to"
                                                value="viber">
                                            <label class="form-group-social-label" for="viber-quiz-doma">
                                                <noscript><img
                                                        src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-viber.png"
                                                        alt="Viber" title="Viber"></noscript><img
                                                    class="lazyload"
                                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                                    data-src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-viber.png"
                                                    alt="Viber" title="Viber"> <span
                                                    class="form-group-social-label-text">Viber</span> </label>
                                            <input type="radio" id="telegram-quiz-doma" name="send_to"
                                                value="telegram"> <label class="form-group-social-label"
                                                for="telegram-quiz-doma"> <noscript><img
                                                        src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-telegram.png"
                                                        alt="Telegram" title="Telegram"></noscript><img
                                                    class="lazyload"
                                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                                    data-src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-telegram.png"
                                                    alt="Telegram" title="Telegram"> <span
                                                    class="form-group-social-label-text">Telegram</span> </label>
                                            <input type="radio" id="pphone-quiz-doma" name="send_to"
                                                value="Телефон" checked> <label class="form-group-social-label"
                                                for="pphone-quiz-doma"> <noscript><img
                                                        src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-phone.png"
                                                        alt="Телефон" title="Телефон"></noscript><img
                                                    class="lazyload"
                                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                                    data-src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-phone.png"
                                                    alt="Телефон" title="Телефон"> <span
                                                    class="form-group-social-label-text">Телефон</span> </label>
                                        </div>
                                        <div class="form-group"> <input type="text" name="your-name"
                                                id="your-name-quiz-doma" class="form-control"
                                                placeholder="Введите имя"></div>
                                        <div class="form-group">
                                            <div class="text-center"> <label class="form-label"
                                                    for="phone-quiz-doma">Введите телефон</label></div> <input
                                                type="tel" name="phone" id="phone-quiz-doma"
                                                class="form-control" placeholder="+7">
                                        </div>
                                        <div class="form-group submit-group"> <button type="button"
                                                class="button orange project-last-button quiz-send-button"
                                                data-quiz="doma">Получить расчет + подарок</button></div>
                                        <div class="form-group privacy-group">Нажимая на кнопку вы соглашаетесь с
                                            условиями <span onclick="window.open('/privacy-policy/')">Политики
                                                конфиденциальности</span></div>
                                    </div>
                                </div>
                            </div>
                            <div id="quiz-doma-step-7" class="quiz-step-item quiz-step-item-thanks"
                                data-step="8">
                                <div class="quiz-step-item-top">
                                    <div class="quiz-step-item-number">Данные отправлены</div>
                                    <div class="quiz-step-item-title"><span>Данные отправлены. Скоро вы получите
                                            расчет.</span><span class="padding"></span><b>Запишитесь на бесплатную
                                            <br>экскурсию по строящимся объектам</b></div>
                                </div>
                                <div class="quiz-step-item-content">
                                    <div class="section-title-small">На экскурсии вы сможете пообщаться с прорабом и
                                        строителями, а также:</div>
                                    <ul class="excursion-pluses">
                                        <li><b>Познакомитесь</b> с технологией строительства</li>
                                        <li><b>Оцените</b> качество материалов на стройплощадке</li>
                                        <li><b>Зададите</b> вопросы руководителю строительства</li>
                                    </ul>
                                    <div class="excursion-form">
                                        <div class="form-group">
                                            <div class="text-center"><label for="excursion-date-quiz-doma">Укажите
                                                    дату</label></div> <input type="date" name="excursion-date"
                                                id="excursion-date-quiz-doma" class="form-control"
                                                min="2025-07-08" value="2025-07-08">
                                        </div>
                                        <div class="form-group">
                                            <div class="text-center"><label for="excursion-phone-quiz-doma">Укажите
                                                    телефон</label></div> <input type="tel2"
                                                name="excursion-phone" id="excursion-phone-quiz-doma"
                                                class="form-control">
                                        </div>
                                        <div class="form-group submit-group text-center"> <button type="button"
                                                class="button orange quiz-excursion-send-button"
                                                data-quiz="doma">Записаться на экскурсию</button>
                                            <div class="privacy-group">Нажимая на кнопку вы соглашаетесь с условиями
                                                <span onclick="window.open('/privacy-policy/')">Политики
                                                    конфиденциальности</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="quiz-footer"> <button type="button" class="button orange button-quiz-back"
                                data-quiz="doma" style="display: none;">Назад</button> <button type="button"
                                class="button orange button-quiz" data-quiz="doma" disabled>Далее</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="pfilter">
        <div class="container">
            <div class="pfilter-filter-overlay"></div>
            <div class="pfilter-filter-wrapper">
                <form id="pfilter-filter" class="pfilter-filter" method="GET" action="/">
                    <div class="sidebar-title__pfilter">
                        <h3>Подбор проекта</h3>
                    </div> <input type="hidden" name="s" value="filter">
                    <div class="form-group filter-group select-group filter-group_pfilter">
                        <div class="filter-title">Материал:</div> <select name="category_id" id="category_id"
                            class="form-select">
                            <option value="1" selected>Выбрать</option>
                            <option value="49">Каменные дома</option>
                            <option value="50">Дома из блоков</option>
                            <option value="51">Дома из газобетона</option>
                            <option value="52">Дома из керамических блоков</option>
                            <option value="53">Дома из пеноблоков</option>
                            <option value="54">Дома из керамзитобетонных блоков</option>
                            <option value="55">Дома из газосиликатных блоков</option>
                            <option value="56">Дома из теплоблоков</option>
                            <option value="57">Дома из полистиролбетона</option>
                            <option value="58">Дома из арболита</option>
                            <option value="59">Монолитные дома</option>
                            <option value="60">Дома из бетона</option>
                            <option value="61">Дома из кирпича</option>
                            <option value="62">Дома из несъемной опалубки</option>
                            <option value="63">Деревянные дома</option>
                            <option value="64">Дома из бруса</option>
                            <option value="65">Дома из профилированного бруса</option>
                            <option value="66">Дома из двойного бруса</option>
                            <option value="67">Дома из клееного бруса</option>
                            <option value="68">Дома из бревна</option>
                            <option value="69">Дома из оцилиндрованного бревна</option>
                            <option value="70">Дома из лафета</option>
                            <option value="71">Быстровозводимые дома</option>
                            <option value="72">Каркасные дома</option>
                            <option value="73">Дома из СИП-панелей</option>
                            <option value="74">Комбинированные дома</option>
                            <option value="173">Дома из рубленного бревна</option>
                            <option value="174">Бани под ключ</option>
                            <option value="175">Бани из бруса</option>
                            <option value="176">Бани из бревна</option>
                            <option value="228">Строительство гостиниц под ключ</option>
                            <option value="229">Дома из ракушечника</option>
                        </select>
                    </div>
                    <div class="form-group filter-group slider-group filter-group_pfilter">
                        <div class="filter-title">Стоимость строительства, млн.руб</div>
                        <div class="pfilter__input-group"> <input type="text" name="filter-price[min]"
                                class="pfilter__input" id="filter-price-min" value="0.34">
                            <hr> <input type="text" name="filter-price[max]" class="pfilter__input"
                                id="filter-price-max" value="12.95">
                        </div>
                        <div id="price-slider" class="slider-item" data-target="#filter-price" data-min="0.34"
                            data-max="12.95" data-value-min="0.34" data-value-max="12.95" data-step="0.01">
                        </div>
                        <div class="slider-comment"> <span>0.34</span> <span>12.95</span></div>
                    </div>
                    <div class="form-group filter-group_pfilter filter-group slider-group">
                        <div class="filter-title">Площадь, кв.м</div>
                        <div class="pfilter__input-group"> <input type="text" name="filter-area[min]"
                                class="pfilter__input" id="filter-area-min" value="9">
                            <hr> <input type="text" name="filter-area[max]" class="pfilter__input"
                                id="filter-area-max" value="689">
                        </div>
                        <div id="area-slider" class="slider-item" data-target="#filter-area" data-min="9"
                            data-max="689" data-value-min="9" data-value-max="689" data-step="1"></div>
                        <div class="slider-comment"> <span>9</span> <span>689</span></div>
                    </div>
                    <div class="form-group submit-group"> <button type="submit"
                            class="button orange pfilter-submit">Найти проекты</button></div>
                </form>
            </div>
        </div>
    </section>

    <section id="services-list">
        <div class="container">
            <div class="section-title text-center"><b>Построим идеальный дом</b> с учетом всех особенностей Одессы
            </div>
            <div class="flex-row">
                <div class="service-item service-item-medium">
                    <div class="service-item-image"> <noscript><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/09/karkasnik.jpg"
                                alt="Каркасные дома" title="Каркасные дома"></noscript><img class="lazyload"
                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/09/karkasnik.jpg"
                            alt="Каркасные дома" title="Каркасные дома"></div>
                    <div class="service-item-content">
                        <div class="service-item-title"> <a href="/karkasnye-doma/">Каркасные дома</a></div>
                        <div class="service-item-label"><b>194</b> проектов</div>
                        <div class="service-item-price hide-mobile">от <span>21800</span> руб/м<sup>2</sup></div>
                        <div class="service-item-link"> <a href="/karkasnye-doma/"
                                class="button orange">Посмотреть
                                проекты</a></div>
                        <div class="service-item-modal hide-mobile">
                            <div> <a href="#modal" class="orange-link" data-modal="#quiz-modal">Рассчитать
                                    стоимость
                                    <br>строительства</a></div>
                        </div>
                    </div>
                </div>
                <div class="service-item service-item-medium">
                    <div class="service-item-image"> <noscript><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/09/bloki.jpg"
                                alt="Дома из блоков" title="Дома из блоков"></noscript><img class="lazyload"
                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/09/bloki.jpg"
                            alt="Дома из блоков" title="Дома из блоков">
                        <ul class="service-other-links">
                            <li class="service-other-link"><a href="/doma-iz-gazobetona/">Газобетон</a></li>
                            <li class="service-other-link"><a
                                    href="/doma-iz-keramzitobetonnyh-blokov/">Керамзитоблоки</a></li>
                            <li class="service-other-link"><a
                                    href="/doma-iz-keramicheskih-blokov/">Керамические&nbsp;блоки</a></li>
                        </ul>
                    </div>
                    <div class="service-item-content">
                        <div class="service-item-title"> <a href="/doma-iz-blokov/">Дома из блоков</a></div>
                        <div class="service-item-label"><b>491</b> проектов</div>
                        <div class="service-item-price hide-mobile">от <span>18700</span> руб/м<sup>2</sup></div>
                        <div class="service-item-link"> <a href="/doma-iz-blokov/"
                                class="button orange">Посмотреть
                                проекты</a></div>
                        <div class="service-item-modal hide-mobile">
                            <div> <a href="#modal" class="orange-link" data-modal="#quiz-modal">Рассчитать
                                    стоимость
                                    <br>строительства</a></div>
                        </div>
                    </div>
                </div>
                <div class="service-item service-item-medium">
                    <div class="service-item-image"> <noscript><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/09/brusovoi.jpg"
                                alt="Дома из бруса" title="Дома из бруса"></noscript><img class="lazyload"
                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/09/brusovoi.jpg"
                            alt="Дома из бруса" title="Дома из бруса">
                        <ul class="service-other-links">
                            <li class="service-other-link"><a
                                    href="/doma-iz-profilirovannogo-brusa/">Профилированный</a></li>
                            <li class="service-other-link"><a href="/doma-iz-kleenogo-brusa/">Клееный</a></li>
                            <li class="service-other-link"><a href="/doma-iz-dvojnogo-brusa/">Двойной</a></li>
                        </ul>
                    </div>
                    <div class="service-item-content">
                        <div class="service-item-title"> <a href="/doma-iz-brusa/">Дома из бруса</a></div>
                        <div class="service-item-label"><b>170</b> проектов</div>
                        <div class="service-item-price hide-mobile">от <span>21900</span> руб/м<sup>2</sup></div>
                        <div class="service-item-link"> <a href="/doma-iz-brusa/" class="button orange">Посмотреть
                                проекты</a></div>
                        <div class="service-item-modal hide-mobile">
                            <div> <a href="#modal" class="orange-link" data-modal="#quiz-modal">Рассчитать
                                    стоимость
                                    <br>строительства</a></div>
                        </div>
                    </div>
                </div>
                <div class="service-item service-item-big">
                    <div class="service-item-image"> <noscript><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/09/brevnchatiy.jpg"
                                alt="Дома из бревна" title="Дома из бревна"></noscript><img class="lazyload"
                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/09/brevnchatiy.jpg"
                            alt="Дома из бревна" title="Дома из бревна">
                        <ul class="service-other-links">
                            <li class="service-other-link"><a href="/doma-iz-brevna/">Оцилиндрованное</a></li>
                            <li class="service-other-link"><a href="/doma-iz-rublennogo-brevna/">Рубленное</a></li>
                            <li class="service-other-link"><a href="/doma-iz-lafeta/">Лафет</a></li>
                        </ul>
                    </div>
                    <div class="service-item-content">
                        <div class="service-item-title"> <a href="/doma-iz-brevna/">Дома из бревна</a></div>
                        <div class="service-item-price hide-mobile">от <span>19500</span> руб/м<sup>2</sup></div>
                        <div class="service-item-label"><b>27</b> проектов</div>
                        <div class="service-item-link"> <a href="/doma-iz-brevna/"
                                class="button orange">Посмотреть
                                проекты</a></div>
                        <div class="service-item-modal hide-mobile">
                            <div> <a href="#modal" class="orange-link" data-modal="#quiz-modal">Рассчитать
                                    стоимость
                                    <br>строительства</a></div>
                        </div>
                    </div>
                </div>
                <div class="service-item service-item-big">
                    <div class="service-item-image"> <noscript><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/09/kirpichniy.jpg"
                                alt="Кирпичные" title="Кирпичные"></noscript><img class="lazyload"
                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/09/kirpichniy.jpg"
                            alt="Кирпичные" title="Кирпичные"></div>
                    <div class="service-item-content">
                        <div class="service-item-title"> <a href="/doma-iz-kirpicha/">Кирпичные</a></div>
                        <div class="service-item-price hide-mobile">от <span>28900</span> руб/м<sup>2</sup></div>
                        <div class="service-item-label"><b>157</b> проектов</div>
                        <div class="service-item-link"> <a href="/doma-iz-kirpicha/"
                                class="button orange">Посмотреть проекты</a></div>
                        <div class="service-item-modal hide-mobile">
                            <div> <a href="#modal" class="orange-link" data-modal="#quiz-modal">Рассчитать
                                    стоимость
                                    <br>строительства</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="popular-projects">
        <div class="container">
            <h2 class="section-title section-mobile-title">Проекты и цены</h2>
            <div class="section-title text-center">Вы можете выбрать один из 700+ готовых решений или <a
                    href="#modal" data-modal="#smeta-messenger">заказать индивидуальный проект</a></div>
            <div class="catalog-seo-slider">
                <div class="seo-link-wrapper">
                    <div class="catalog-filter-wrapper">
                        <a href="/" class="btn-filter active">Категория</a>
                        <a href="/" class="btn-filter">Категория</a>
                        <a href="/" class="btn-filter">Категория</a>
                        <a href="/" class="btn-filter">Категория</a>
                        <a href="/" class="btn-filter">Категория</a>
                        <a href="/" class="btn-filter">Категория</a>
                        <a href="/" class="btn-filter">Категория</a>
                        <a href="/" class="btn-filter">Категория</a>
                        <a href="/" class="btn-filter">Категория</a>
                        <a href="/" class="btn-filter">Категория</a>
                        <a href="/" class="btn-filter">Категория</a>
                        <a href="/" class="btn-filter">Категория</a>
                        <a href="/" class="btn-filter">Категория</a>
                        <a href="/" class="btn-filter">Категория</a>
                        <a href="/" class="btn-filter">Категория</a>
                        <a href="/" class="btn-filter">Категория</a>
                        <a href="/" class="btn-filter">Категория</a>
                        <a href="/" class="btn-filter">Категория</a>
                        <a href="/" class="btn-filter">Категория</a>
                        <a href="/" class="btn-filter">Категория</a>
                        <a href="/" class="btn-filter">Категория</a>
                        <a href="/" class="btn-filter">Категория</a>
                        <a href="/" class="btn-filter">Категория</a>
                        <a href="/" class="btn-filter">Категория</a>
                    </div>

                    <a href="#" class="btn-filter-control">
                        <svg xmlns="http://www.w3.org/2000/svg" >
                            <path
                                d="M12 17.414 3.293 8.707l1.414-1.414L12 14.586l7.293-7.293 1.414 1.414L12 17.414z" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="flex-row popular-projects-list">
                <?php
                    global $post;

                    $myposts = get_posts([
                        'numberposts' => -1,
                    ]);

                    if( $myposts ){
                        foreach( $myposts as $post ){
                            setup_postdata( $post );
                            ?>
                <div class="project-item-wrapper">
                    <div class="project-item">
                        <div class="project-item-image">
                            <div class="project-labels">
                                <span class="project-label project-label-hit">Хит</span>
                            </div>
                            <a href="/projectsbaderim/">
                                <noscript>
                                    <!-- <img width="416" height="250"
                                                        src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/96e2f0fe41c0780b895eb8e6b44f8f8f-416x250.jpg"
                                                        class="attachment-catalog-thumbnail size-catalog-thumbnail wp-post-image"
                                                        alt="Проект Бадерим" itemprop="image" title="Бадерим"
                                                        loading="lazy" /> -->
                                </noscript>
                                <!-- <img width="416" height="250"
                                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20416%20250%22%3E%3C/svg%3E'
                                                        data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/96e2f0fe41c0780b895eb8e6b44f8f8f-416x250.jpg"
                                                        class="lazyload attachment-catalog-thumbnail size-catalog-thumbnail wp-post-image"
                                                        alt="Проект Бадерим" itemprop="image" title="Бадерим" loading="lazy" /> -->

                                <?php
                                the_post_thumbnail('full', ['class' => 'lazyload attachment-catalog-thumbnail size-catalog-thumbnail wp-post-image']);
                                ?>
                            </a>
                            <div class="project-item-like" data-id="3798">
                                <span class="number">97</span>
                                <span class="heart">
                                </span>
                            </div>
                            <div class="rating">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span class="star-half"></span>
                            </div>
                        </div>
                        <div class="project-item-content">
                            <div class="project-item-title">
                                <a href="/projectsbaderim/">
                                    <span>
                                        "<?php the_title(); ?>"
                                    </span>
                                </a>
                            </div>
                            <div class="project-item-attrs">
                                <div class="project-item-attr project-item-attr-size">
                                    <div class="project-item-attr-text">
                                        <span>Размеры:</span>
                                        <b><?php the_content(); ?></b>
                                    </div>
                                </div>
                                <div class="project-item-attr project-item-attr-rooms">
                                    <div class="project-item-attr-text"> <span>Комнат:</span> <b>5</b></div>
                                </div>
                                <div class="project-item-attr project-item-attr-area">
                                    <div class="project-item-attr-text"> <span>Площадь:</span> <b>195
                                            м<sup>2</sup></b></div>
                                </div>
                                <div class="project-item-attr project-item-attr-bedrooms">
                                    <div class="project-item-attr-text"> <span>Спален:</span> <b>4</b></div>
                                </div>
                            </div>
                            <div class="project-item-features">
                                <ul class="project-item-features-list">
                                    <li class="project-item-feature"><span><svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="7px"
                                                height="7px">
                                                <path fill-rule="evenodd" fill="rgb(116, 187, 22)"
                                                    d="M3.500,0.000 C5.433,0.000 7.000,1.567 7.000,3.500 C7.000,5.433 5.433,7.000 3.500,7.000 C1.567,7.000 0.000,5.433 0.000,3.500 C0.000,1.567 1.567,0.000 3.500,0.000 Z" />
                                            </svg>Тип дома:</span><b>Комбинированный</b></li>
                                    <li class="project-item-feature"><span><svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="7px"
                                                height="7px">
                                                <path fill-rule="evenodd" fill="rgb(116, 187, 22)"
                                                    d="M3.500,0.000 C5.433,0.000 7.000,1.567 7.000,3.500 C7.000,5.433 5.433,7.000 3.500,7.000 C1.567,7.000 0.000,5.433 0.000,3.500 C0.000,1.567 1.567,0.000 3.500,0.000 Z" />
                                            </svg>Срок строительства:</span><b>3 месяца</b></li>
                                </ul>
                            </div>
                            <div class="project-item-price single-price-box">
                                <div class="single-price-value">
                                    Стоимость&nbsp;от<br><span>5&nbsp;850&nbsp;000</span>&nbsp;руб</div>
                            </div>
                        </div> <a href="/projectsbaderim/" class="project-item-btn"><span
                                class="orange-link">Посмотреть проект</span></a>
                    </div>
                </div>
                <?php
                        }
                    }
                        wp_reset_postdata(); // Сбрасываем $post
                    ?>

                <div class="text-center load-more-link-wrapper">
                    <a href="/projects" class="load-more-link">
                        <span>Показать ещё</span>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleButton = document.getElementById('toggleButton');
            const filterWrapper = document.getElementById('filterWrapper');
            const buttonText = toggleButton.querySelector('span');

            toggleButton.addEventListener('click', function(e) {
                e.preventDefault();

                filterWrapper.classList.toggle('expanded');

                if (filterWrapper.classList.contains('expanded')) {
                    buttonText.textContent = 'Свернуть';
                } else {
                    buttonText.textContent = 'Смотреть все';
                }
            });

            // Добавляем обработчики для кнопок фильтров
            const filterButtons = document.querySelectorAll('.btn-filter');
            filterButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();

                    // Удаляем active со всех кнопок
                    filterButtons.forEach(btn => btn.classList.remove('active'));

                    // Добавляем active текущей кнопке
                    this.classList.add('active');
                });
            });
        });
    </script>


    <section id="home-pluses1">
        <div class="container">
            <div class="section-title text-center"><b>Представьте, как уже завтра</b> вы просыпаетесь в доме
                вашей мечты</div>
            <div class="flex-row">

                <div class="home-plus1-item">
                    <div class="gflag-item-box gflag-item-box-1 gflag-item-has-bg">
                        <div class="gflag-item-flag">01</div>
                        <div class="lazyload gflag-item"
                            data-bg="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/plus-1-1.png"
                            style="background-image: url(data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20500%20300%22%3E%3C/svg%3E);">
                            <div class="gflag-item-title"><b>Отдыхаете семьей</b> и встречаете друзей</div>
                            <ul class="gflag-item-pluses-list">
                                <li class="gflag-item-plus-item">Жарите шашлык и барбекю</li>
                                <li class="gflag-item-plus-item">Гуляете босиком по газону</li>
                                <li class="gflag-item-plus-item">Читаете любимую книгу у камина</li>
                                <li class="gflag-item-plus-item">Играете в бильярд</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="home-plus1-item">
                    <div class="gflag-item-box gflag-item-box-2 gflag-item-has-bg">
                        <div class="gflag-item-flag">02</div>
                        <div class="lazyload gflag-item"
                            data-bg="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/plus-1-2.png"
                            style="background-image: url(data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20500%20300%22%3E%3C/svg%3E);">
                            <div class="gflag-item-title"><b>Восстанавливаете силы после работы</b> и занимаетесь
                                спортом на свежем воздухе</div>
                            <ul class="gflag-item-pluses-list">
                                <li class="gflag-item-plus-item">Тренироваться в собственном спорт-зале</li>
                                <li class="gflag-item-plus-item">Плавать в бассейне в любое время</li>
                                <li class="gflag-item-plus-item">Совершать пробежки на природе и встречать рассвет
                                </li>
                                <li class="gflag-item-plus-item">Париться в бане после рабочей недели</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="home-plus1-item">
                    <div class="gflag-item-box gflag-item-box-3 gflag-item-has-bg">
                        <div class="gflag-item-flag">03</div>
                        <div class="lazyload gflag-item"
                            data-bg="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/plus-1-3.png"
                            style="background-image: url(data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20500%20300%22%3E%3C/svg%3E);">
                            <div class="gflag-item-title"><b>Подарите своим детям здоровое и счастливое детство</b>
                                о котором сами мечтали</div>
                            <ul class="gflag-item-pluses-list">
                                <li class="gflag-item-plus-item">Выделите каждому ребенку отдельную комнату</li>
                                <li class="gflag-item-plus-item">Построите игровой комплекс на площадке</li>
                                <li class="gflag-item-plus-item">Сделаете игровую комнату</li>
                                <li class="gflag-item-plus-item">Обеспечите безопасность детей</li>
                            </ul>
                            <div class="gflag-item-text">В будущем ДОМ - это место, куда они <b>всегда смогут
                                    приехать</b> сами или с семьей</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio-slider">
        <div class="container">
            <div class="flex-row">
                <div class="projects-map-title section-title">С нами, за прошлый год <b>въехали в новый дом 257
                        семей</b></div>
                <div class="projects-map-box">
                    <div class="projects-map-box-image"><noscript><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/map-default.png"></noscript><img
                            class="lazyload"
                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/map-default.png"></div>
                    <div class="projects-map-box-text">Это лишь несколько<br>домов, построенных<br>в прошлом году
                    </div>
                    <div class="projects-map-box-button"><a href="#modal" class="button orange modal-map-open"
                            data-modal="#modal-map">Карта объектов</a></div>
                </div>
                <div class="portfolio-main-slider-wrapper">
                    <div class="portfolio-main-slider">
                        <div class="portfolio-main-slider-track">
                            <div class="portfolio-slide">
                                <div class="portfolio-slide-gallery">
                                    <a href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3.jpg"
                                        class="portfolio-slide-main-image" data-fancybox="gallery-1657">
                                        <noscript><img width="1024" height="768"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3-1024x768.jpg"
                                                class="attachment-large size-large wp-post-image" alt=""
                                                loading="lazy"
                                                srcset="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3-1024x768.jpg 1024w, <?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3-300x225.jpg 300w, <?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3-768x576.jpg 768w, <?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3.jpg 1365w"
                                                sizes="(max-width: 1024px) 100vw, 1024px" /></noscript><img
                                            width="1024" height="768"
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%201024%20768%22%3E%3C/svg%3E'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3-1024x768.jpg"
                                            class="lazyload attachment-large size-large wp-post-image"
                                            alt="" loading="lazy"
                                            data-srcset="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3-1024x768.jpg 1024w, <?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3-300x225.jpg 300w, <?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3-768x576.jpg 768w, <?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3.jpg 1365w"
                                            data-sizes="(max-width: 1024px) 100vw, 1024px" /> </a> <a
                                        href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3.jpg"
                                        class="portfolio-slide-secondary-image" data-fancybox="gallery-1657">
                                        <noscript>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3-300x225.jpg"
                                                alt="Дом в стиле хай-тек 123 кв.м"
                                                title="Дом в стиле хай-тек 123 кв.м"></noscript><img
                                            class="lazyload"
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3-300x225.jpg"
                                            alt="Дом в стиле хай-тек 123 кв.м" title="Дом в стиле хай-тек 123 кв.м">
                                    </a> <a
                                        href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/cf60203b318d3e33204bac4ea30075da-3.jpg"
                                        class="portfolio-slide-secondary-image" data-fancybox="gallery-1657">
                                        <noscript><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/cf60203b318d3e33204bac4ea30075da-3-300x225.jpg"
                                                alt="Дом в стиле хай-тек 123 кв.м"
                                                title="Дом в стиле хай-тек 123 кв.м"></noscript><img
                                            class="lazyload"
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/cf60203b318d3e33204bac4ea30075da-3-300x225.jpg"
                                            alt="Дом в стиле хай-тек 123 кв.м" title="Дом в стиле хай-тек 123 кв.м">
                                    </a> <a
                                        href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/16fed8ce85995a5d6ba43a1bc276003c-3.jpg"
                                        class="portfolio-slide-secondary-image" data-fancybox="gallery-1657">
                                        <noscript><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/16fed8ce85995a5d6ba43a1bc276003c-3-300x225.jpg"
                                                alt="Дом в стиле хай-тек 123 кв.м"
                                                title="Дом в стиле хай-тек 123 кв.м"></noscript><img
                                            class="lazyload"
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/16fed8ce85995a5d6ba43a1bc276003c-3-300x225.jpg"
                                            alt="Дом в стиле хай-тек 123 кв.м" title="Дом в стиле хай-тек 123 кв.м">
                                    </a> <a
                                        href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/fd3e54868a363e8164c5fbd8fa26e5be-3.jpg"
                                        class="portfolio-slide-secondary-image" data-fancybox="gallery-1657">
                                        <noscript><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/fd3e54868a363e8164c5fbd8fa26e5be-3-300x225.jpg"
                                                alt="Дом в стиле хай-тек 123 кв.м"
                                                title="Дом в стиле хай-тек 123 кв.м"></noscript><img
                                            class="lazyload"
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/fd3e54868a363e8164c5fbd8fa26e5be-3-300x225.jpg"
                                            alt="Дом в стиле хай-тек 123 кв.м" title="Дом в стиле хай-тек 123 кв.м">
                                    </a>
                                </div>
                                <div class="portfolio-slide-content">
                                    <div class="portfolio-slide-title"><a
                                            href="/portfolio/dom-v-stile-haj-tek-123-kv-m/">Дом
                                            в стиле хай-тек 123 кв.м</a></div>
                                    <div class="portfolio-slide-project-time">
                                        <div class="portfolio-slide-project"></div>
                                        <div class="portfolio-slide-time">Построили под ключ <b>за 60 дней</b>
                                        </div>
                                    </div>
                                    <div class="portfolio-slide-price">
                                        <div class="portfolio-slide-price-before">Стоимость <br>строительства
                                        </div>
                                        <div class="portfolio-slide-price-value">5 990 100</div>
                                        <div class="portfolio-slide-price-after">руб</div>
                                    </div>
                                    <div class="portfolio-slide-works">
                                        <div class="portfolio-slide-works-title">В стоимость вошли работа и
                                            материалы:</div>
                                        <div class="portfolio-slide-works-list"> <span>- Разработка
                                                индивидуального проекта</span> <span>- УШП-фундамент</span>
                                            <span>- Коробка дома из блоков</span> <span>- Организация инженерных
                                                коммуникаций (электричество, канализация, водопровод,
                                                газ)</span> <span>- Установка окон и входной двери</span>
                                            <span>- Фасадные работы</span> <span>- Внутренняя отделка</span>
                                        </div>
                                        <div class="portfolio-slide-works-read-more"> <a href="#">Смотреть
                                                все</a></div>
                                    </div>
                                    <div id="second-22"
                                        class="single-tab-item flex-tab-item portfolio-slide-review">
                                        <div class="portfolio-slide-works-title" style="width: 100%;">Отзыв
                                            заказчика:</div>
                                        <div class="single-portfolio-review-wrap">
                                            <div class="single-portfolio-review-author"> <noscript><img
                                                        src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/otzyv-4-1.jpg"
                                                        alt="Владимир Петренко"
                                                        title="Владимир Петренко"></noscript><img class="lazyload"
                                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                                    data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/otzyv-4-1.jpg"
                                                    alt="Владимир Петренко" title="Владимир Петренко"></div>
                                            <div class="single-portfolio-review-text"><b>Владимир
                                                    Петренко</b><br>21 июня 2021<br>«Сдали дом в срок, не было
                                                никаких проблем - ни воровства материалов, ни пьяных рабочих, ни
                                                явных "косяков". Очень доволен их услугами»</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio-slide">
                                <div class="portfolio-slide-gallery"> <a
                                        href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/8dfca031a360ac65ce357837da3f5997.jpg"
                                        class="portfolio-slide-main-image" data-fancybox="gallery-1466">
                                        <noscript><img width="825" height="618"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/8dfca031a360ac65ce357837da3f5997.jpg"
                                                class="attachment-large size-large wp-post-image" alt=""
                                                loading="lazy"
                                                srcset="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/8dfca031a360ac65ce357837da3f5997.jpg 825w, <?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/8dfca031a360ac65ce357837da3f5997-300x225.jpg 300w, <?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/8dfca031a360ac65ce357837da3f5997-768x575.jpg 768w"
                                                sizes="(max-width: 825px) 100vw, 825px" /></noscript><img
                                            width="825" height="618"
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20825%20618%22%3E%3C/svg%3E'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/8dfca031a360ac65ce357837da3f5997.jpg"
                                            class="lazyload attachment-large size-large wp-post-image"
                                            alt="" loading="lazy"
                                            data-srcset="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/8dfca031a360ac65ce357837da3f5997.jpg 825w, <?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/8dfca031a360ac65ce357837da3f5997-300x225.jpg 300w, <?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/8dfca031a360ac65ce357837da3f5997-768x575.jpg 768w"
                                            data-sizes="(max-width: 825px) 100vw, 825px" /> </a> <a
                                        href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/8dfca031a360ac65ce357837da3f5997.jpg"
                                        class="portfolio-slide-secondary-image" data-fancybox="gallery-1466">
                                        <noscript><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/8dfca031a360ac65ce357837da3f5997-300x225.jpg"
                                                alt="Дом из клееного бруса 82 м2"
                                                title="Дом из клееного бруса 82 м2"></noscript><img class="lazyload"
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/8dfca031a360ac65ce357837da3f5997-300x225.jpg"
                                            alt="Дом из клееного бруса 82 м2" title="Дом из клееного бруса 82 м2">
                                    </a> <a
                                        href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/3cf9b7379eec2ba026c7ecad9512335a.jpg"
                                        class="portfolio-slide-secondary-image" data-fancybox="gallery-1466">
                                        <noscript><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/3cf9b7379eec2ba026c7ecad9512335a-300x225.jpg"
                                                alt="Дом из клееного бруса 82 м2"
                                                title="Дом из клееного бруса 82 м2"></noscript><img class="lazyload"
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/3cf9b7379eec2ba026c7ecad9512335a-300x225.jpg"
                                            alt="Дом из клееного бруса 82 м2" title="Дом из клееного бруса 82 м2">
                                    </a> <a
                                        href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/5e8429800f9c626def2b9b40434ac1fa.jpg"
                                        class="portfolio-slide-secondary-image" data-fancybox="gallery-1466">
                                        <noscript><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/5e8429800f9c626def2b9b40434ac1fa-300x226.jpg"
                                                alt="Дом из клееного бруса 82 м2"
                                                title="Дом из клееного бруса 82 м2"></noscript><img class="lazyload"
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/5e8429800f9c626def2b9b40434ac1fa-300x226.jpg"
                                            alt="Дом из клееного бруса 82 м2" title="Дом из клееного бруса 82 м2">
                                    </a> <a
                                        href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/e0cd6ea471c0b4798ed61cf5f9aeba15.jpg"
                                        class="portfolio-slide-secondary-image" data-fancybox="gallery-1466">
                                        <noscript><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/e0cd6ea471c0b4798ed61cf5f9aeba15-300x225.jpg"
                                                alt="Дом из клееного бруса 82 м2"
                                                title="Дом из клееного бруса 82 м2"></noscript><img class="lazyload"
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/e0cd6ea471c0b4798ed61cf5f9aeba15-300x225.jpg"
                                            alt="Дом из клееного бруса 82 м2" title="Дом из клееного бруса 82 м2">
                                    </a></div>
                                <div class="portfolio-slide-content">
                                    <div class="portfolio-slide-title"><a
                                            href="/portfolio/dom-iz-kleenogo-brusa-82-m2/">Дом
                                            из клееного бруса 82 м2</a></div>
                                    <div class="portfolio-slide-project-time">
                                        <div class="portfolio-slide-project"></div>
                                        <div class="portfolio-slide-time">Построили под ключ <b>за 60 дней</b>
                                        </div>
                                    </div>
                                    <div class="portfolio-slide-price">
                                        <div class="portfolio-slide-price-before">Стоимость <br>строительства
                                        </div>
                                        <div class="portfolio-slide-price-value">5 051 200</div>
                                        <div class="portfolio-slide-price-after">руб</div>
                                    </div>
                                    <div class="portfolio-slide-works">
                                        <div class="portfolio-slide-works-title">В стоимость вошли работа и
                                            материалы:</div>
                                        <div class="portfolio-slide-works-list"> <span>- Выравнивание
                                                участка</span> <span>- Монолитный фундамент</span> <span>-
                                                Коробка дома из бруса</span> <span>- Инженерные
                                                коммуникации</span> <span>- Фасадные работы</span> <span>-
                                                Кровельные работы</span> <span>- Внутренняя отделка</span></div>
                                        <div class="portfolio-slide-works-read-more"> <a href="#">Смотреть
                                                все</a></div>
                                    </div>
                                    <div id="second-22"
                                        class="single-tab-item flex-tab-item portfolio-slide-review">
                                        <div class="portfolio-slide-works-title" style="width: 100%;">Отзыв
                                            заказчика:</div>
                                        <div class="single-portfolio-review-wrap">
                                            <div class="single-portfolio-review-author"> <noscript><img
                                                        src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/otzyv-21.jpg"
                                                        alt="Михаил Андреевич"
                                                        title="Михаил Андреевич"></noscript><img class="lazyload"
                                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                                    data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/otzyv-21.jpg"
                                                    alt="Михаил Андреевич" title="Михаил Андреевич"></div>
                                            <div class="single-portfolio-review-text"><b>Михаил
                                                    Андреевич</b><br>12 сентября 2019<br>«Начал с ними работать
                                                и всё прошло хорошо - к оговоренной дате мне сдали уже готовый
                                                красивый дом»</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio-slide">
                                <div class="portfolio-slide-gallery"> <a
                                        href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/ff3873297baf4c9e201a694a089ee67a.png"
                                        class="portfolio-slide-main-image" data-fancybox="gallery-1271">
                                        <noscript><img width="1024" height="682"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/ff3873297baf4c9e201a694a089ee67a-1024x682.png"
                                                class="attachment-large size-large wp-post-image" alt=""
                                                loading="lazy"
                                                srcset="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/ff3873297baf4c9e201a694a089ee67a-1024x682.png 1024w, <?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/ff3873297baf4c9e201a694a089ee67a-300x200.png 300w, <?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/ff3873297baf4c9e201a694a089ee67a-768x512.png 768w, <?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/ff3873297baf4c9e201a694a089ee67a.png 1280w"
                                                sizes="(max-width: 1024px) 100vw, 1024px" /></noscript><img
                                            width="1024" height="682"
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%201024%20682%22%3E%3C/svg%3E'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/ff3873297baf4c9e201a694a089ee67a-1024x682.png"
                                            class="lazyload attachment-large size-large wp-post-image"
                                            alt="" loading="lazy"
                                            data-srcset="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/ff3873297baf4c9e201a694a089ee67a-1024x682.png 1024w, <?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/ff3873297baf4c9e201a694a089ee67a-300x200.png 300w, <?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/ff3873297baf4c9e201a694a089ee67a-768x512.png 768w, <?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/ff3873297baf4c9e201a694a089ee67a.png 1280w"
                                            data-sizes="(max-width: 1024px) 100vw, 1024px" /> </a> <a
                                        href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/ff3873297baf4c9e201a694a089ee67a.png"
                                        class="portfolio-slide-secondary-image" data-fancybox="gallery-1271">
                                        <noscript><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/ff3873297baf4c9e201a694a089ee67a-300x200.png"
                                                alt="Дом из теплоблоков 112 кв.м."
                                                title="Дом из теплоблоков 112 кв.м."></noscript><img
                                            class="lazyload"
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/ff3873297baf4c9e201a694a089ee67a-300x200.png"
                                            alt="Дом из теплоблоков 112 кв.м." title="Дом из теплоблоков 112 кв.м.">
                                    </a> <a
                                        href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/144c52e442b55fa11e71223f08b467a1.png"
                                        class="portfolio-slide-secondary-image" data-fancybox="gallery-1271">
                                        <noscript><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/144c52e442b55fa11e71223f08b467a1-300x200.png"
                                                alt="Дом из теплоблоков 112 кв.м."
                                                title="Дом из теплоблоков 112 кв.м."></noscript><img
                                            class="lazyload"
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/144c52e442b55fa11e71223f08b467a1-300x200.png"
                                            alt="Дом из теплоблоков 112 кв.м." title="Дом из теплоблоков 112 кв.м.">
                                    </a> <a
                                        href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/95aa2e7f0c7f0be17b5837111e751274.png"
                                        class="portfolio-slide-secondary-image" data-fancybox="gallery-1271">
                                        <noscript><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/95aa2e7f0c7f0be17b5837111e751274-300x200.png"
                                                alt="Дом из теплоблоков 112 кв.м."
                                                title="Дом из теплоблоков 112 кв.м."></noscript><img
                                            class="lazyload"
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/95aa2e7f0c7f0be17b5837111e751274-300x200.png"
                                            alt="Дом из теплоблоков 112 кв.м." title="Дом из теплоблоков 112 кв.м.">
                                    </a> <a
                                        href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/2a24b85e04aa7b9036415694b2383285.png"
                                        class="portfolio-slide-secondary-image" data-fancybox="gallery-1271">
                                        <noscript><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/2a24b85e04aa7b9036415694b2383285-300x200.png"
                                                alt="Дом из теплоблоков 112 кв.м."
                                                title="Дом из теплоблоков 112 кв.м."></noscript><img
                                            class="lazyload"
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/2a24b85e04aa7b9036415694b2383285-300x200.png"
                                            alt="Дом из теплоблоков 112 кв.м." title="Дом из теплоблоков 112 кв.м.">
                                    </a></div>
                                <div class="portfolio-slide-content">
                                    <div class="portfolio-slide-title"><a
                                            href="/portfolio/dom-iz-teploblokov-112-kv-m/">Дом
                                            из теплоблоков 112 кв.м.</a></div>
                                    <div class="portfolio-slide-project-time">
                                        <div class="portfolio-slide-project"></div>
                                        <div class="portfolio-slide-time">Построили под ключ <b>за 60 дней</b>
                                        </div>
                                    </div>
                                    <div class="portfolio-slide-price">
                                        <div class="portfolio-slide-price-before">Стоимость <br>строительства
                                        </div>
                                        <div class="portfolio-slide-price-value">4 838 400</div>
                                        <div class="portfolio-slide-price-after">руб</div>
                                    </div>
                                    <div class="portfolio-slide-works">
                                        <div class="portfolio-slide-works-title">В стоимость вошли работа и
                                            материалы:</div>
                                        <div class="portfolio-slide-works-list"> <span>- Выравнивание
                                                участка</span> <span>- Ленточный фундамент</span> <span>-
                                                Коробка дома из теплоблоков</span> <span>- Фасадные и кровельные
                                                работы</span> <span>- Внутренняя отделка</span></div>
                                        <div class="portfolio-slide-works-read-more"> <a href="#">Смотреть
                                                все</a></div>
                                    </div>
                                    <div id="second-22"
                                        class="single-tab-item flex-tab-item portfolio-slide-review">
                                        <div class="portfolio-slide-works-title" style="width: 100%;">Отзыв
                                            заказчика:</div>
                                        <div class="single-portfolio-review-wrap">
                                            <div class="single-portfolio-review-author"> <noscript><img
                                                        src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/otzyv-32.jpg"
                                                        alt="Таня Асылова" title="Таня Асылова"></noscript><img
                                                    class="lazyload"
                                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                                    data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/otzyv-32.jpg"
                                                    alt="Таня Асылова" title="Таня Асылова"></div>
                                            <div class="single-portfolio-review-text"><b>Таня Асылова</b><br>3
                                                апреля 2021<br>«Работают профессионалы»</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="portfolio-slider-pagination"></div>
                </div>
                <div class="slider-button portfolio-button-next">›</div>
                <div class="slider-button portfolio-button-prev">‹</div>
            </div>
        </div>
        </sectio <section id="instagram">
        <div class="container">
            <div class="instagram-box lazyload"
                data-bg="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/images/insta-bg.png"
                style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/images/insta-bg.png);">

                <style>
                    .instagram-box {
                        background-image: url('<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/images/insta-bg.png');
                    }
                </style>

                <div class="instagram-box-icon"> <noscript><img
                            src="/assets/wp-content/themes/super_dom/images/insta-big.png"></noscript><img
                        class="lazyload"
                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                        data-src="/assets/wp-content/themes/super_dom/images/insta-big.png"></div>
                <div class="instagram-box-content">
                    <div class="instagram-box-text">Больше выполненных <br>работ у нас в Инстаграме</div>
                    <div class="instagram-box-hashtag">#svoy_dom</div>
                </div>
                <div class="instagram-box-photos"> <noscript><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/9f0e5cc58a3245d00014497d8659ff76.jpg"
                            class="instagram-box-photo"></noscript><img
                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                        data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/9f0e5cc58a3245d00014497d8659ff76.jpg"
                        class="lazyload instagram-box-photo"> <noscript><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/48fac8d040c503f7e7d9acf3ad3fbde3-3.jpg"
                            class="instagram-box-photo"></noscript><img
                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                        data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/48fac8d040c503f7e7d9acf3ad3fbde3-3.jpg"
                        class="lazyload instagram-box-photo"> <noscript><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/c93bd1a565d212c3ea895d048aca0709.jpg"
                            class="instagram-box-photo"></noscript><img
                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                        data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/c93bd1a565d212c3ea895d048aca0709.jpg"
                        class="lazyload instagram-box-photo"> <noscript><img
                            src="superuploads/2021/07/06d75664185794aff3177095de09498a.jpg"
                            class="instagram-box-photo"></noscript><img
                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                        data-src="superuploads/2021/07/06d75664185794aff3177095de09498a.jpg"
                        class="lazyload instagram-box-photo"></div>
            </div>
        </div>
    </section>

    <section id="pluses-slider" class="lazyload"
        data-bg="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/psbg.png"
        style="	 background-image: url('<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/psbg.png');">
        <div class="container">
            <div class="section-title text-center">Чтобы быть спокойным и уверенным в качественном доме - <b>вам
                    нужен надежный подрядчик</b></div>
            <div class="pluses-slider-wrapper">
                <div class="swiper-container pluses-slider">

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
                            <div class="gflag-item-text">Вы получаете дом, который не надо доделывать,
                                подкрашивать</div>
                        </div>
                    </div>

                    <div class="gflag-item-box gflag-item-box-2 gflag-item-has-icon">
                        <div class="gflag-item-flag">02</div>
                        <div class="gflag-item"> <noscript><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/ps2.png"
                                    alt="5 этапов оплаты" title="5 этапов оплаты"
                                    class="gflag-item-icon"></noscript><img
                                src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/ps2.png"
                                alt="5 этапов оплаты" title="5 этапов оплаты" class="lazyload gflag-item-icon">
                            <div class="gflag-item-title">5 этапов оплаты</div>
                            <div class="gflag-item-text">Вы платите только после окончания и проверки
                                каждого этапа работы</div>
                        </div>
                    </div>

                    <div class="swiper-slide">
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
                                <div class="gflag-item-text">Создадим с нуля или доработаем любой понравившийся
                                    проект</div>
                            </div>
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
                            <div class="gflag-item-text">Работаем напрямую с поставщиками стройматериалов
                            </div>
                        </div>
                    </div>


                    <div class="gflag-item-box gflag-item-box-5 gflag-item-has-icon">
                        <div class="gflag-item-flag">05</div>
                        <div class="gflag-item"> <noscript><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/ps1.png"
                                    alt="Сроки строительства и оплаты прописаны"
                                    title="Сроки строительства и оплаты прописаны"
                                    class="gflag-item-icon"></noscript><img
                                src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/ps1.png"
                                alt="Сроки строительства и оплаты прописаны"
                                title="Сроки строительства и оплаты прописаны" class="lazyload gflag-item-icon">
                            <div class="gflag-item-title">Сроки строительства и оплаты прописаны</div>
                            <div class="gflag-item-text">На этапе подписания договора составляется
                                план-график работ и их финансирования</div>
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
                            <div class="gflag-item-text">Штат своих специалистов, которые являются
                                профессионалами своего дела и знают все нюансы в строительстве</div>
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
                            <div class="gflag-item-text">За вашим объектом будет закреплен прораб, который
                                контролирует все этапы строительства</div>
                        </div>
                    </div>


                </div>
                <!-- <div class="swiper-button-next ps-button"></div>
     <div class="swiper-button-prev ps-button"></div> -->
            </div>
        </div>
    </section>

    <section id="six-steps">
        <div class="container">
            <div class="section-title text-center"><b>Посмотрите на 6 этапов</b>, как будет строиться ваш идеальный
                дом</div>
            <div class="six-steps-btns">
                <button class="six-steps-btn bg active" data-step="0" data-real="1">Этап 1</button>
                <button class="six-steps-btn bg" data-step="1" data-real="2">Этап 2</button>
                <button class="six-steps-btn bg" data-step="2" data-real="3">Этап 3</button>
                <button class="six-steps-btn bg" data-step="3" data-real="4">Этап 4</button>
                <button class="six-steps-btn bg" data-step="4" data-real="5">Этап 5</button>
                <button class="six-steps-btn bg" data-step="5" data-real="6">Этап 6</button>
            </div>

            <div class="swiper-container steps-slider">
                <!-- 1 -->
                <div class="swiper-slide six-steps-tab-content active">
                    <div class="step-item">
                        <div class="step-item-image"> <noscript><img width="1024" height="683"
                                    src="<?php echo get_template_directory_uri(); ?>	/assets/superuploads/2021/07/image-35-1024x683.png"
                                    class="attachment-large size-large"
                                    alt="Согласовываем с вами все предварительные вопросы"
                                    title="Согласовываем с вами все предварительные вопросы"
                                    srcset="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/image-35-1024x683.png 1024w, <?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/image-35-300x200.png 300w, <?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/image-35-768x512.png 768w, <?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/image-35-1536x1024.png 1536w, <?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/image-35.png 1800w"
                                    sizes="(max-width: 1024px) 100vw, 1024px" /></noscript><img width="1024"
                                height="683"
                                src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%201024%20683%22%3E%3C/svg%3E'
                                data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/image-35-1024x683.png"
                                class="lazyload attachment-large size-large"
                                alt="Согласовываем с вами все предварительные вопросы"
                                title="Согласовываем с вами все предварительные вопросы"
                                data-srcset="<?php echo get_template_directory_uri(); ?>/assetssuperuploads/2021/07/image-35-1024x683.png 1024w, <?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/image-35-300x200.png 300w, /superuploads/2021/07/image-35-768x512.png 768w, /superuploads/2021/07/image-35-1536x1024.png 1536w, /superuploads/2021/07/image-35.png 1800w"
                                data-sizes="(max-width: 1024px) 100vw, 1024px" /></div>
                        <div class="step-item-content">
                            <div class="step-item-before-title">
                                <div class="step-item-label">Этап&nbsp;1</div>
                                <div class="step-item-time">Время: <b>1 день</b></div>
                            </div>
                            <div class="step-item-title">Согласовываем с вами все предварительные вопросы</div>
                            <div class="step-item-subtitle">Что входит в 1-й этап:</div>
                            <ul class="step-item-structure">
                                <li><b>Консультация</b> по выбору материала строительства;</li>
                                <li><b>Подбор</b> проекта дома при необходимости;</li>
                                <li>Предварительный <b>расчет</b> строительства.</li>
                            </ul>
                            <div class="step-item-comment">Первый этап <b>помогает вам узнать преимущества
                                    работы с нами</b> и ни к чему вас не обязывает</div>
                        </div>
                    </div>
                </div>

                <!-- 2 -->
                <div class="swiper-slide six-steps-tab-content">
                    <div class="step-item">
                        <div class="step-item-image"> <noscript><img width="1024" height="683"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/image-36-1024x683.png"
                                    class="attachment-large size-large"
                                    alt="Если нужен проект, выбираем из типовых или разрабатываем индивидуальный"
                                    title="Если нужен проект, выбираем из типовых или разрабатываем индивидуальный"
                                    srcset="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/image-36-1024x683.png 1024w, /superuploads/2021/07/image-36-300x200.png 300w, /superuploads/2021/07/image-36-768x512.png 768w, /superuploads/2021/07/image-36.png 1200w"
                                    sizes="(max-width: 1024px) 100vw, 1024px" /></noscript><img width="1024"
                                height="683"
                                src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%201024%20683%22%3E%3C/svg%3E'
                                data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/image-36-1024x683.png"
                                class="lazyload attachment-large size-large"
                                alt="Если нужен проект, выбираем из типовых или разрабатываем индивидуальный"
                                title="Если нужен проект, выбираем из типовых или разрабатываем индивидуальный"
                                data-srcset="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/image-36-1024x683.png 1024w, /superuploads/2021/07/image-36-300x200.png 300w, /superuploads/2021/07/image-36-768x512.png 768w, /superuploads/2021/07/image-36.png 1200w"
                                data-sizes="(max-width: 1024px) 100vw, 1024px" /></div>
                        <div class="step-item-content">
                            <div class="step-item-before-title">
                                <div class="step-item-label">Этап&nbsp;2</div>
                                <div class="step-item-time">Время: <b>от 10 дней</b></div>
                            </div>
                            <div class="step-item-title">Если нужен проект, выбираем из типовых или
                                разрабатываем индивидуальный</div>
                            <div class="step-item-subtitle">Что входит в проект:</div>
                            <ul class="step-item-structure">
                                <li>Пояснительная записка;</li>
                                <li><b>Схема планировочной организации</b> с расположение дома,</li>
                                <li>дополнительных построек, скважины, септика;</li>
                                <li>Поэтажные планы с расстановкой мебели;</li>
                                <li>Фасады в цвете с высотными отметками;</li>
                                <li>Реалистичные перспективные виды дома со всех сторон.</li>
                            </ul>
                            <div class="step-item-comment">Также <b>возможна переделка типового проекта</b> под
                                ваши пожелания</div>
                        </div>
                    </div>
                </div>

                <!-- 3 -->
                <div class="swiper-slide six-steps-tab-content">
                    <div class="step-item">
                        <div class="step-item-image"> <noscript><img width="1024" height="504"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/image-37-1024x504.png"
                                    class="attachment-large size-large"
                                    alt="Заливка фундамента. Начало строительства"
                                    title="Заливка фундамента. Начало строительства"
                                    srcset="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/image-37-1024x504.png 1024w, /superuploads/2021/07/image-37-300x148.png 300w, /superuploads/2021/07/image-37-768x378.png 768w, /superuploads/2021/07/image-37.png 1170w"
                                    sizes="(max-width: 1024px) 100vw, 1024px" /></noscript><img width="1024"
                                height="504"
                                src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%201024%20504%22%3E%3C/svg%3E'
                                data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/image-37-1024x504.png"
                                class="lazyload attachment-large size-large"
                                alt="Заливка фундамента. Начало строительства"
                                title="Заливка фундамента. Начало строительства"
                                data-srcset="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/image-37-1024x504.png 1024w, /superuploads/2021/07/image-37-300x148.png 300w, /superuploads/2021/07/image-37-768x378.png 768w, /superuploads/2021/07/image-37.png 1170w"
                                data-sizes="(max-width: 1024px) 100vw, 1024px" /></div>
                        <div class="step-item-content">
                            <div class="step-item-before-title">
                                <div class="step-item-label">Этап&nbsp;3</div>
                                <div class="step-item-time">Время: <b>от 14 дней, в теплое время года</b></div>
                            </div>
                            <div class="step-item-title">Заливка фундамента. Начало строительства</div>
                            <div class="step-item-subtitle">Какие работы производятся:</div>
                            <ul class="step-item-structure">
                                <li><b>Разметка фундамента</b> после планировки участка;</li>
                                <li><b>Земляные работы</b> (копка траншеи или котлована);</li>
                                <li>Монтаж опалубки и арматурных каркасов;</li>
                                <li>Заливка стен фундамента бетоном;</li>
                                <li>Демонтаж опалубки;</li>
                                <li>Обратная засыпка грунта.</li>
                            </ul>
                            <div class="step-item-comment">Заливка фундамент - это самый тяжелый и ответственный
                                этап строительства дома. Как правило в Одессе используется ленточный фундамент.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 4 -->
                <div class="swiper-slide six-steps-tab-content">
                    <div class="step-item">
                        <div class="step-item-image"> <noscript><img width="1024" height="683"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/cellenbeton-1-1024x683.png"
                                    class="attachment-large size-large" alt="Возведение стен"
                                    title="Возведение стен"
                                    srcset="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/cellenbeton-1-1024x683.png 1024w, /superuploads/2021/07/cellenbeton-1-300x200.png 300w, /superuploads/2021/07/cellenbeton-1-768x512.png 768w, /superuploads/2021/07/cellenbeton-1-1536x1024.png 1536w, /superuploads/2021/07/cellenbeton-1-2048x1365.png 2048w"
                                    sizes="(max-width: 1024px) 100vw, 1024px" /></noscript><img width="1024"
                                height="683"
                                src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%201024%20683%22%3E%3C/svg%3E'
                                data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/cellenbeton-1-1024x683.png"
                                class="lazyload attachment-large size-large" alt="Возведение стен"
                                title="Возведение стен"
                                data-srcset="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/cellenbeton-1-1024x683.png 1024w, /superuploads/2021/07/cellenbeton-1-300x200.png 300w, /superuploads/2021/07/cellenbeton-1-768x512.png 768w, /superuploads/2021/07/cellenbeton-1-1536x1024.png 1536w, /superuploads/2021/07/cellenbeton-1-2048x1365.png 2048w"
                                data-sizes="(max-width: 1024px) 100vw, 1024px" /></div>
                        <div class="step-item-content">
                            <div class="step-item-before-title">
                                <div class="step-item-label">Этап&nbsp;4</div>
                                <div class="step-item-time">Время: <b>20-30 дней</b></div>
                            </div>
                            <div class="step-item-title">Возведение стен</div>
                            <div class="step-item-subtitle">Варианты строительства в зависимости от типа
                                материала стен:</div>
                            <ul class="step-item-structure">
                                <li><b>Каркасный дом;</b></li>
                                <li><b>Из блоков</b> (газобетон, арболит, керамоблоки);</li>
                                <li>Из бруса (Профилированный, Клееный, Двойной);</li>
                                <li>Из бревна (Оцилиндрованное, Ручной рубки);</li>
                                <li>Из кирпича;</li>
                                <li>Из СИП-панелей.</li>
                            </ul>
                            <div class="step-item-comment">В зависимости от материала стен будет зависеть
                                стоимость и сроки строительства коробки дома</div>
                        </div>
                    </div>
                </div>

                <!-- 5 -->
                <div class="swiper-slide six-steps-tab-content">
                    <div class="step-item">
                        <div class="step-item-image"> <noscript><img width="751" height="500"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/step5.png"
                                    class="attachment-large size-large" alt="Установка крыши"
                                    title="Установка крыши"
                                    srcset="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/step5.png 751w, /superuploads/2021/05/step5-300x200.png 300w"
                                    sizes="(max-width: 751px) 100vw, 751px" /></noscript><img width="751"
                                height="500"
                                src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20751%20500%22%3E%3C/svg%3E'
                                data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/step5.png"
                                class="lazyload attachment-large size-large" alt="Установка крыши"
                                title="Установка крыши"
                                data-srcset="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/step5.png 751w, /superuploads/2021/05/step5-300x200.png 300w"
                                data-sizes="(max-width: 751px) 100vw, 751px" /></div>
                        <div class="step-item-content">
                            <div class="step-item-before-title">
                                <div class="step-item-label">Этап&nbsp;5</div>
                                <div class="step-item-time">Время: <b>7-14 дней</b></div>
                            </div>
                            <div class="step-item-title">Установка крыши</div>
                            <div class="step-item-subtitle">Что входит в работы:</div>
                            <ul class="step-item-structure">
                                <li><b>Установка стропильно</b> системы для выбранного варианта крыши
                                    (двухскатная, вальмовая, мансардная и др.);</li>
                                <li><b>Монтаж</b> изоляционного слоя кровли;</li>
                                <li><b>Монтаж кровельного материала</b> (металлочерепица, мягкая кровля,
                                    фальцевая кровля, модульная кровля и др.).</li>
                            </ul>
                            <div class="step-item-comment">Обращаем ваше внимание, что сроки и стоимость монтажа
                                кровли зависит от цены материалов и сложности конструкции</div>
                        </div>
                    </div>
                </div>

                <!-- 6 -->
                <div class="swiper-slide six-steps-tab-content">
                    <div class="step-item">
                        <div class="step-item-image"> <noscript><img width="751" height="500"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/step6.png"
                                    class="attachment-large size-large" alt="Внешняя отделка"
                                    title="Внешняя отделка"
                                    srcset="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/step6.png 751w, /superuploads/2021/05/step6-300x200.png 300w"
                                    sizes="(max-width: 751px) 100vw, 751px" /></noscript><img width="751"
                                height="500"
                                src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20751%20500%22%3E%3C/svg%3E'
                                data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/step6.png"
                                class="lazyload attachment-large size-large" alt="Внешняя отделка"
                                title="Внешняя отделка"
                                data-srcset="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/step6.png 751w, /superuploads/2021/05/step6-300x200.png 300w"
                                data-sizes="(max-width: 751px) 100vw, 751px" /></div>
                        <div class="step-item-content">
                            <div class="step-item-before-title">
                                <div class="step-item-label">Этап&nbsp;6</div>
                                <div class="step-item-time">Время: <b>7-14 дней</b></div>
                            </div>
                            <div class="step-item-title">Внешняя отделка</div>
                            <div class="step-item-subtitle">Что входит в работы:</div>
                            <ul class="step-item-structure">
                                <li><b>Установка окон;</b></li>
                                <li><b>Фасадные работы</b> (вариант фасада).</li>
                            </ul>
                            <div class="step-item-comment">Работы по отделке – это финальная фаза во время
                                возведения дома</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="excursion">
        <div class="container">
            <div class="excursion-wrapper lazyload"
                data-bg="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/images/excursion_bg.jpg"
                style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/images/excursion_bg.jpg);">

                <style>
                    .excursion-wrapper {
                        background-image: url(<?php echo get_template_directory_uri(); ?>'/assets/wp-content/themes/super_dom/images/excursion_bg.jpg');
                    }
                </style>
                <div class="excursion-content">
                    <div class="section-title">Предлагаем вам <b>записаться на бесплатную групповую экскурсию</b> по
                        строящимся объектам</div>
                    <div class="section-title-small">На экскурсии вы сможете пообщаться с прорабом и строителями, а
                        также:</div>
                    <ul class="excursion-pluses">
                        <li><b>Познакомитесь</b> с технологией строительства</li>
                        <li><b>Оцените</b> качество материалов на стройплощадке</li>
                        <li><b>Зададите</b> вопросы руководителю строительства</li>
                    </ul>
                    <form action="javascript:void(0)" class="excursion-form">
                        <div class="form-group-title">Укажите когда вам удобно посетить экскурсию и оставьте телефон
                        </div>
                        <div class="form-group"> <label for="excursion-date">Укажите дату</label> <input
                                type="date" name="excursion-date" id="excursion-date" class="form-control"
                                min="2025-07-08" value="2025-07-12" required></div>
                        <div class="form-group"> <label for="excursion-tel">Введите телефон</label> <input
                                type="tel" name="excursion-tel" id="excursion-tel" class="form-control"
                                placeholder="+7" required></div>
                        <div class="form-group"> <label for="excursion-name">Введите имя</label> <input
                                type="text" name="your-name" id="excursion-name" class="form-control"
                                placeholder="Введите имя">
                        </div>
                        <div class="form-group submit-group text-center"> <button type="submit"
                                class="button orange">Записаться на<br>экскурсию по объектам</button> <input
                                type="hidden" name="form_id" value="excursion-form">
                            <div class="privacy-group">Нажимая на кнопку вы соглашаетесь с условиями <span
                                    onclick="window.open('/privacy-policy/')">Политики
                                    конфиденциальности</span></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php
        include_once 'blocks/reviews-slider.php';
    ?>

    <section id="directors-word">
        <div class="container">
            <div class="flex-row">
                <div class="directors-word-col"> <noscript><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/kopiya-direktor-tipa-2-1.png"
                            class="directors-word-image"></noscript><img
                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                        data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/kopiya-direktor-tipa-2-1.png"
                        class="lazyload directors-word-image">
                    <div class="section-title section-title-mobile"><b>Здравствуйте, я Ермаков Василий,</b> директор
                        и основатель компании.</div>
                </div>
                <div class="directors-word-col">
                    <div class="section-title"><b>Здравствуйте, я Ермаков Василий,</b> директор и основатель
                        компании.</div>
                    <div class="directors-word-content">
                        <p>На рынке строительных услуг мы уже 12 лет. За это время нам удалось сформировать
                            сплоченный коллектив специалистов с более чем двадцатилетним стажем. Вместе с тем я
                            слежу за тем, чтобы наши специалисты оставались в курсе последних технологий,
                            совершенствовали свои навыки. За счет этого мы можем гарантировать долговечность
                            выполненных нами проектов.</p>
                    </div>
                    <div class="section-title-small directors-title"><b>Факты в цифрах</b></div>
                    <ul class="directors-facts">
                        <li class="director-fact"> <span class="director-fact-title"><b>12</b> лет <br></span> <span
                                class="director-fact-text">компания на рынке</span></li>
                        <li class="director-fact"> <span class="director-fact-title"><b>300</b>+ <br></span> <span
                                class="director-fact-text">объектов построено</span></li>
                        <li class="director-fact"> <span class="director-fact-title"><b>5</b> лет<br></span> <span
                                class="director-fact-text">гарантии на работы</span></li>
                    </ul>
                    <div class="section-title-small directors-title" style="margin-top: 16px;"><b>Строим по всей
                            Украине</b></div>
                    <ul class="sitemap-item-links">
                        <li><a href="">Киев</a></li>
                        <li><a href="">Харьков</a></li>
                        <li><a href="">Днепр</a></li>
                        <li><a href="">Запорожье</a></li>
                        <li><a href="">Львов</a></li>
                        <li><a href="">Кривой Рог</a></li>
                        <li><a href="">Николаев</a></li>
                        <li><a href="">Мариуполь</a></li>
                        <li><a href="">Луганск</a></li>
                        <li><a href="">Винница</a></li>
                        <li><a href="">Макеевка</a></li>
                        <li><a href="">Херсон</a></li>
                        <li><a href="">Полтава</a></li>
                        <li><a href="">Чернигов</a></li>
                        <li><a href="">Черкассы</a></li>
                        <li><a href="">Житомир</a></li>
                        <li><a href="">Сумы</a></li>
                        <li><a href="">Хмельницкий</a></li>
                        <li><a href="">Черновцы</a></li>
                        <li><a href="">Горловка</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="specialists-slider" style="display: none;">
        <div class="container specialists-slider-grid">

            <div class="column">
                <div class="section-title">Каждые этапы работ выполняют <b>отдельные специалисты</b></div>
                <div class="section-title-small">А не мастер на все руки</div>
            </div>

            <div class="column">
                <div class="flex-row specialists-slider-container">
                    <div class="specialists-slider-left">

                        <div class="swiper-pagination specialists-slider-pagination"></div>
                    </div>
                    <div class="specialists-slider-right">
                        <div class="specialists-slider-wrapper">
                            <div class="specialists-slider-container">
                                <div class="specialists-slider-track">
                                    <!-- Слайды остаются как у вас -->
                                    <div class="specialists-slide">
                                        <div class="specialist-item">
                                            <img class="lazyload"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/sotrudnik-2.jpg"
                                                alt="Василий Ермаков">
                                            <div class="specialist-item-fio text-center">Василий Ермаков</div>
                                            <div class="specialist-item-post text-center">Генеральный директор</div>
                                            <ul class="specialist-item-pluses">
                                                <li>- Опыт работы более 10 лет</li>
                                                <li>- Высшее строительное образование</li>
                                                <li>- Более 200 сданных объектов</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="specialists-slide">
                                        <div class="specialist-item">
                                            <img class="lazyload"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/sotrudnik-2.jpg"
                                                alt="Василий Ермаков">
                                            <div class="specialist-item-fio text-center">Василий Ермаков</div>
                                            <div class="specialist-item-post text-center">Генеральный директор</div>
                                            <ul class="specialist-item-pluses">
                                                <li>- Опыт работы более 10 лет</li>
                                                <li>- Высшее строительное образование</li>
                                                <li>- Более 200 сданных объектов</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="specialists-slide">
                                        <div class="specialist-item">
                                            <img class="lazyload"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/sotrudnik-2.jpg"
                                                alt="Василий Ермаков">
                                            <div class="specialist-item-fio text-center">Василий Ермаков</div>
                                            <div class="specialist-item-post text-center">Генеральный директор</div>
                                            <ul class="specialist-item-pluses">
                                                <li>- Опыт работы более 10 лет</li>
                                                <li>- Высшее строительное образование</li>
                                                <li>- Более 200 сданных объектов</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="specialists-slide">
                                        <div class="specialist-item">
                                            <img class="lazyload"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/sotrudnik-2.jpg"
                                                alt="Василий Ермаков">
                                            <div class="specialist-item-fio text-center">Василий Ермаков</div>
                                            <div class="specialist-item-post text-center">Генеральный директор</div>
                                            <ul class="specialist-item-pluses">
                                                <li>- Опыт работы более 10 лет</li>
                                                <li>- Высшее строительное образование</li>
                                                <li>- Более 200 сданных объектов</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="specialists-slide">
                                        <div class="specialist-item">
                                            <img class="lazyload"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/sotrudnik-2.jpg"
                                                alt="Василий Ермаков">
                                            <div class="specialist-item-fio text-center">Василий Ермаков</div>
                                            <div class="specialist-item-post text-center">Генеральный директор</div>
                                            <ul class="specialist-item-pluses">
                                                <li>- Опыт работы более 10 лет</li>
                                                <li>- Высшее строительное образование</li>
                                                <li>- Более 200 сданных объектов</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="specialists-slide">
                                        <div class="specialist-item">
                                            <img class="lazyload"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/sotrudnik-2.jpg"
                                                alt="Василий Ермаков">
                                            <div class="specialist-item-fio text-center">Василий Ермаков</div>
                                            <div class="specialist-item-post text-center">Генеральный директор</div>
                                            <ul class="specialist-item-pluses">
                                                <li>- Опыт работы более 10 лет</li>
                                                <li>- Высшее строительное образование</li>
                                                <li>- Более 200 сданных объектов</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="specialists-slide">
                                        <div class="specialist-item">
                                            <img class="lazyload"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/sotrudnik-2.jpg"
                                                alt="Василий Ермаков">
                                            <div class="specialist-item-fio text-center">Василий Ермаков</div>
                                            <div class="specialist-item-post text-center">Генеральный директор</div>
                                            <ul class="specialist-item-pluses">
                                                <li>- Опыт работы более 10 лет</li>
                                                <li>- Высшее строительное образование</li>
                                                <li>- Более 200 сданных объектов</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="specialists-slide">
                                        <div class="specialist-item">
                                            <img class="lazyload"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/sotrudnik-2.jpg"
                                                alt="Василий Ермаков">
                                            <div class="specialist-item-fio text-center">Василий Ермаков</div>
                                            <div class="specialist-item-post text-center">Генеральный директор</div>
                                            <ul class="specialist-item-pluses">
                                                <li>- Опыт работы более 10 лет</li>
                                                <li>- Высшее строительное образование</li>
                                                <li>- Более 200 сданных объектов</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="specialists-slide">
                                        <div class="specialist-item">
                                            <img class="lazyload"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/sotrudnik-2.jpg"
                                                alt="Василий Ермаков">
                                            <div class="specialist-item-fio text-center">Василий Ермаков</div>
                                            <div class="specialist-item-post text-center">Генеральный директор</div>
                                            <ul class="specialist-item-pluses">
                                                <li>- Опыт работы более 10 лет</li>
                                                <li>- Высшее строительное образование</li>
                                                <li>- Более 200 сданных объектов</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Остальные слайды -->
                                </div>
                            </div>
                        </div>
                        <div class="slider-button spec-button-next">›</div>
                        <div class="slider-button spec-button-prev">‹</div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="faq-list">
        <div class="container">
            <div class="section-title text-center">Вопросы и ответы</div>


            <div class="new-faq-grid" id="new-faq-accordion">
                <div class="new-faq-card">
                    <div class="new-faq-header" data-faq="faq-1">
                        <button class="new-faq-toggle">
                            <span class="new-faq-title">Какие дома вы проектируете?</span>
                            <span class="new-faq-icon">+</span>
                        </button>
                    </div>
                    <div class="new-faq-content" id="faq-1">
                        <div class="new-faq-text">
                            <p>В нашем портфолио есть самые разные проекты: в стиле хайтек, с большим
                                процентом остекления, значительными консольными вылетами и другими
                                элементами, присущими этой стилистике. Есть классические коттеджи различной
                                площади. Мы можем сделать качественный проект любого дома. Даже если вы
                                захотите спроектировать что-то очень оригинальное, мы справимся с задачей,
                                главное, чтобы желаемое совпадало с возможностями по строительству. Обратите
                                внимание, что при заключении договора на возведение коттеджа —
                                проектирование будет бесплатным.</p>
                        </div>
                    </div>
                </div>

                <div class="new-faq-card">
                    <div class="new-faq-header" data-faq="faq-2">
                        <button class="new-faq-toggle">
                            <span class="new-faq-title">Из чего складывается стоимость дома?</span>
                            <span class="new-faq-icon">+</span>
                        </button>
                    </div>
                    <div class="new-faq-content" id="faq-2">
                        <div class="new-faq-text">
                            <p>Стоимость дома зависит от нескольких факторов.</p>
                            <ol>
                                <li>Используемых материалов в строительстве.</li>
                                <li>Вида фундамента.</li>
                                <li>Площади дома, схемой несущих конструкций, этажности.</li>
                                <li>Наличия или отсутствия подвала, цокольного и мансардного этажей, а также
                                    балконов и террас.</li>
                                <li>Формы и материала кровли.</li>
                                <li>Состава и сложности инженерного раздела.</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="new-faq-card">
                    <div class="new-faq-header" data-faq="faq-3">
                        <button class="new-faq-toggle">
                            <span class="new-faq-title">С чего начинается строительство дома?</span>
                            <span class="new-faq-icon">+</span>
                        </button>
                    </div>
                    <div class="new-faq-content" id="faq-3">
                        <div class="new-faq-text">
                            <p>Дом начинается с проекта. Сначала совместно с заказчиком создается подробное
                                техническое задание:</p>
                            <ul>
                                <li>Определяется расположение дома на участке, стиль и размеры строения.
                                </li>
                                <li>Согласовывается количество, тип и высота этажей.</li>
                                <li>Согласовывается площадь помещений.</li>
                                <li>Определяются основные требования к конструктивным решениям и материалам
                                    несущих стен и ограждающих конструкций, внутреннему инженерному
                                    обеспечению.</li>
                            </ul>
                            <p>Затем подписывается договор и мы начинаем работу по проектированию.<br />
                                После этого мы приступаем к возведению фундамента и коробки дома.</p>
                            <p>По завершению, у нас можно заказать дизайн интерьера и ландшафтного участка,
                                внутреннюю отделку, прокладку инженерных сетей. В нашей компании вы получите
                                полностью готовый дом «под ключ».</p>
                        </div>
                    </div>
                </div>

                <div class="new-faq-card">
                    <div class="new-faq-header" data-faq="faq-3">
                        <button class="new-faq-toggle">
                            <span class="new-faq-title">С чего начинается строительство дома?</span>
                            <span class="new-faq-icon">+</span>
                        </button>
                    </div>
                    <div class="new-faq-content" id="faq-3">
                        <div class="new-faq-text">
                            <p>Дом начинается с проекта. Сначала совместно с заказчиком создается подробное
                                техническое задание:</p>

                            <p>Затем подписывается договор и мы начинаем работу по проектированию.<br />
                                После этого мы приступаем к возведению фундамента и коробки дома.</p>
                            <p>По завершению, у нас можно заказать дизайн интерьера и ландшафтного участка,
                                внутреннюю отделку, прокладку инженерных сетей. В нашей компании вы получите
                                полностью готовый дом «под ключ».</p>
                        </div>
                    </div>
                </div>

                <div class="new-faq-card">
                    <div class="new-faq-header" data-faq="faq-1">
                        <button class="new-faq-toggle">
                            <span class="new-faq-title">Какие дома вы проектируете?</span>
                            <span class="new-faq-icon">+</span>
                        </button>
                    </div>
                    <div class="new-faq-content" id="faq-1">
                        <div class="new-faq-text">
                            <p>В нашем портфолио есть самые разные проекты: в стиле хайтек, с большим
                                процентом остекления, значительными консольными вылетами и другими
                                элементами, присущими этой стилистике. Есть классические коттеджи различной
                                площади. Мы можем сделать качественный проект любого дома. Даже если вы
                                захотите спроектировать что-то очень оригинальное, мы справимся с задачей,
                                главное, чтобы желаемое совпадало с возможностями по строительству. Обратите
                                внимание, что при заключении договора на возведение коттеджа —
                                проектирование будет бесплатным.</p>
                        </div>
                    </div>
                </div>

                <div class="new-faq-card">
                    <div class="new-faq-header" data-faq="faq-2">
                        <button class="new-faq-toggle">
                            <span class="new-faq-title">Из чего складывается стоимость дома?</span>
                            <span class="new-faq-icon">+</span>
                        </button>
                    </div>
                    <div class="new-faq-content" id="faq-2">
                        <div class="new-faq-text">
                            <p>Стоимость дома зависит от нескольких факторов.</p>
                            <ol>
                                <li>Используемых материалов в строительстве.</li>
                                <li>Вида фундамента.</li>
                                <li>Площади дома, схемой несущих конструкций, этажности.</li>
                                <li>Наличия или отсутствия подвала, цокольного и мансардного этажей, а также
                                    балконов и террас.</li>
                                <li>Формы и материала кровли.</li>
                                <li>Состава и сложности инженерного раздела.</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="new-faq-card">
                    <div class="new-faq-header" data-faq="faq-3">
                        <button class="new-faq-toggle">
                            <span class="new-faq-title">С чего начинается строительство дома?</span>
                            <span class="new-faq-icon">+</span>
                        </button>
                    </div>
                    <div class="new-faq-content" id="faq-3">
                        <div class="new-faq-text">
                            <p>Дом начинается с проекта. Сначала совместно с заказчиком создается подробное
                                техническое задание:</p>
                            <ul>
                                <li>Определяется расположение дома на участке, стиль и размеры строения.
                                </li>
                                <li>Согласовывается количество, тип и высота этажей.</li>
                                <li>Согласовывается площадь помещений.</li>
                                <li>Определяются основные требования к конструктивным решениям и материалам
                                    несущих стен и ограждающих конструкций, внутреннему инженерному
                                    обеспечению.</li>
                            </ul>
                            <p>Затем подписывается договор и мы начинаем работу по проектированию.<br />
                                После этого мы приступаем к возведению фундамента и коробки дома.</p>
                            <p>По завершению, у нас можно заказать дизайн интерьера и ландшафтного участка,
                                внутреннюю отделку, прокладку инженерных сетей. В нашей компании вы получите
                                полностью готовый дом «под ключ».</p>
                        </div>
                    </div>
                </div>

                <div class="new-faq-card">
                    <div class="new-faq-header" data-faq="faq-3">
                        <button class="new-faq-toggle">
                            <span class="new-faq-title">С чего начинается строительство дома?</span>
                            <span class="new-faq-icon">+</span>
                        </button>
                    </div>
                    <div class="new-faq-content" id="faq-3">
                        <div class="new-faq-text">
                            <p>Дом начинается с проекта. Сначала совместно с заказчиком создается подробное
                                техническое задание:</p>

                            <p>Затем подписывается договор и мы начинаем работу по проектированию.<br />
                                После этого мы приступаем к возведению фундамента и коробки дома.</p>
                            <p>По завершению, у нас можно заказать дизайн интерьера и ландшафтного участка,
                                внутреннюю отделку, прокладку инженерных сетей. В нашей компании вы получите
                                полностью готовый дом «под ключ».</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="smeta-form">
        <div class="container">
            <div class="smeta-box lazyload"
                data-bg="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/images/smeta-bg.jpg"
                style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/images/smeta-bg.jpg);">
                <div class="flex-row">
                    <div class="smeta-form-left">
                        <div class="section-title"><b>Если у вас уже есть <br>смета на строительство</b> <br>в 95%
                            случаев мы предлагаем <br>меньшую стоимость и без <br>потери качества</div>
                        <div class="section-title-small"><b>Как мы этого добиваемся?</b></div>
                        <ul class="smeta-pluses">
                            <li><b>Оптовые скидки</b> на проверенные материалы от партнеров (экономия до 30%);</li>
                            <li><b>Оптимальный подбор материалов</b> и поставщиков (экономия до 15%);</li>
                            <li><b>Налаженный рабочий процесс</b> без потери времени (экономия до 20%).</li>
                        </ul>
                    </div>
                    <div class="smeta-form-right">
                        <form class="smeta-form" method="POST" action="javascript:void(0)">
                            <div class="form-group-socials">
                                <div class="form-group-title text-center">Просто прикрепите<br>готовую смету и вы
                                    узнаете<br> как сэкономить на стройке</div>
                                <div class="before-title text-center">Инженер-сметчик рассчитает стоимость<br>работ
                                    и материалов по оптовым ценам</div>
                                <div class="form-group file-form-group"> <label class="file-label"> <input
                                            type="file" name="smeta-files[]" multiple class="form-control">
                                        <span class="file-label-text">Прикрепить файл</span> <span
                                            class="files-list"></span> </label></div>
                                <div class="form-group">
                                    <div class="text-center"><label class="form-label"><b>Куда выслать наш вариант
                                                сметы?</b></label></div>
                                </div>
                                <div class="form-group form-group-socials-labels"> <input type="radio"
                                        id="whatsapp-smeta-form" name="send_to" value="whatsapp"> <label
                                        class="form-group-social-label" for="whatsapp-smeta-form"> <noscript><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-whatsapp.png"
                                                alt="Whatsapp" title="Whatsapp"></noscript>
                                        <img class="lazyload"
                                            src='<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-whatsapp.png'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-whatsapp.png"
                                            alt="Whatsapp" title="Whatsapp"> <span
                                            class="form-group-social-label-text">Whatsapp</span> </label> <input
                                        type="radio" id="viber-smeta-form" name="send_to" value="viber">
                                    <label class="form-group-social-label" for="viber-smeta-form"> <noscript><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-viber.png"
                                                alt="Viber" title="Viber"></noscript><img class="lazyload"
                                            src='<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-viber.png'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-viber.png"
                                            alt="Viber" title="Viber"> <span
                                            class="form-group-social-label-text">Viber</span>
                                    </label> <input type="radio" id="telegram-smeta-form" name="send_to"
                                        value="telegram">
                                    <label class="form-group-social-label" for="telegram-smeta-form"> <noscript><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-telegram.png"
                                                alt="Telegram" title="Telegram"></noscript><img class="lazyload"
                                            src='<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-telegram.png'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-telegram.png"
                                            alt="Telegram" title="Telegram"> <span
                                            class="form-group-social-label-text">Telegram</span> </label> <input
                                        type="radio" id="pphone-smeta-form" name="send_to" value="Телефон"
                                        checked>
                                    <label class="form-group-social-label" for="pphone-smeta-form"> <noscript><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-phone.png"
                                                alt="Телефон" title="Телефон"></noscript><img class="lazyload"
                                            src='<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-phone.png'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-phone.png"
                                            alt="Телефон" title="Телефон"> <span
                                            class="form-group-social-label-text">Телефон</span> </label>
                                </div>
                                <div class="form-group">
                                    <div class="text-center"> <label class="form-label"
                                            for="phone-smeta-form">Введите телефон</label></div> <input
                                        type="tel" name="phone" id="phone-smeta-form" class="form-control"
                                        placeholder="+7" required>
                                </div>
                                <div class="form-group">
                                    <div class="text-center" style="display: none;"> <label class="form-label"
                                            for="your-name-smeta-form">Введите имя</label></div> <input
                                        type="text" name="your-name" id="your-name-smeta-form"
                                        class="form-control" placeholder="Введите имя">
                                </div>
                                <div class="form-group submit-group"> <button type="submit"
                                        class="button orange smeta-form-button">Получить смету</button> <input
                                        type="hidden" name="form_id" value="smeta-form"></div>
                                <div class="form-group privacy-group">Нажимая на кнопку вы соглашаетесь с условиями
                                    <span onclick="window.open('/privacy-policy/')">Политики
                                        конфиденциальности</span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contacts" class="hidden-print"> <span style="display: none;" itemprop="name">СтройДом</span>
        <div class="container">
            <div class="flex-row">
                <div class="contacts-col contacts-col-map">
                    <div class="section-title-small"><b>Мы на карте</b></div>
                    <div class="contacts-adderss-item" itemprop="address" itemscope
                        itemtype="https://schema.org/PostalAddress"> <span style="display: none;"
                            itemprop="streetAddress">Одесса, Греческая улица, 1А<br>(Перед приездом -
                            позвоните!)</span>
                        <div class="contacts-adderss-icon"></div>
                        <div class="contacts-adderss-content">
                            <div class="contacts-title">Адрес офиса</div>
                            <div class="contacts-adderss-value">Одесса, Греческая улица, 1А<br>(Перед приездом -
                                позвоните!)</div>
                        </div>
                    </div>
                    <div class="foorter-contacts-map" id="foorter-contacts-map"
                        style="width: 100%;height: 200px;">
                    </div>
                    <script type="text/javascript">
                        var coords = JSON.parse('["46.481861","30.747392"]');
                        var address = 'Одесса, Греческая улица, 1А<br>(Перед приездом - позвоните!)';
                        var coords_2 = undefined;
                        var address_2 = undefined;
                    </script>
                </div>
                <div class="contacts-col contacts-col-data">
                    <div class="section-title-small text-center"><b>Наши контакты</b></div>
                    <div class="socials-text flicker-text"> <span class="green-dot animate-flicker"></span> <span
                            class="flicker-text-content">Без выходных: 9:00-18:00</span></div>
                    <div class="phone-box"> <a href="tel:+7 (967) 555-75-92"><span itemprop="telephone">+7 (967)
                                555-75-92</span></a></div>
                    <a href="#modal" class="button orange contacts-button custom-modal-open-button">Позвоните
                        мне</a>
                    <div class="contacts-title text-center">Пишите в мессенджер,<br>отвечаем мгновенно</div>
                    <div class="socials-list contacts-socials-list"> <a href="#viber" class="social-item">
                            <noscript><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-viber.png"></noscript><img
                                class="lazyload" src=''
                                data-src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-viber.png">
                        </a> <a href="#telegram" class="social-item"> <noscript><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-telegram.png"></noscript><img
                                class="lazyload"
                                src='<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-viber.png'
                                data-src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-telegram.png">
                        </a> <a href="#whatsapp" class="social-item"> <noscript><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-whatsapp.png"></noscript><img
                                class="lazyload"
                                src='<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-whatsapp.png'
                                data-src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-whatsapp.png">
                        </a></div>
                    <div class="contacts-email-box"> <noscript><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-email-min.png"></noscript><img
                            class="lazyload"
                            src='<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-email-min.png'
                            data-src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-email-min.png">
                        <div class="contacts-title text-center">Электронная почта</div>
                        <div class="contacts-email"><a href="mailto:mail@amstroj.com"><span
                                    itemprop="email">mail@amstroj.com</span></a></div>
                    </div>
                </div>
                <div class="contacts-col contacts-col-photos">
                    <div class="section-title-small text-center"><b>До встречи</b></div>
                    <div class="meeting-box"> <noscript><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/images/meeting1.png"></noscript><img
                            class="lazyload"
                            src='<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/images/meeting1.png'
                            data-src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/images/meeting1.png">
                        <span class="meeting-label">В офисе</span></div>
                    <div class="meeting-box"> <noscript><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/images/meeting2.png"></noscript><img
                            class="lazyload"
                            src='<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/images/meeting2.png'
                            data-src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/images/meeting2.png">
                        <span class="meeting-label">На участке</span></div>
                </div>
                <div class="contacts-col contacts-col-bookmark">
                    <div class="add-bookmark-box text-center">
                        <div class="section-title-small text-center"><b>Добавьте сайт в избранное</b></div>
                        <div class="add-bookmark-text-item">Обратившись к нам, вы<br>получите лучшую цену
                            на<br>строительство дома</div>
                        <div class="add-bookmark-text-item"><b>И чтобы не потерять сайт, добавьте его в закладки</b>
                        </div> <a href="#" class="button green add-bookmark">Добавить сайт<br>в избранное</a>
                        <div class="add-bookmark-text-item"><b>Либо нажмите<br>сочетание клавиш</b></div>
                        <div class="add-bookmark-text-big">CTRL + D</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    include_once 'modal-windows/modal-form-with-contacts.php';
    ?>

</main>

<?php get_footer(); ?>
