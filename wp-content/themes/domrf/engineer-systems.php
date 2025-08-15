<?php
/*
Template Name: engineer-systems
*/
?>

<?php get_header(); ?>

<div class="service-header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/home_bg.jpg');">
    <style>
        .service-header {
            height: 75vh;
        }
    </style>
    
    <?php
        include_once 'blocks/header.php';
    ?>

    <div class="top-preroll">
        <div class="container">
            <div class="flex-row">
                <div class="top-preroll-wrap">
                    <div class="breadcrumbs-real hidden-print"><span><span><a
                                    href="makeevka/">ОдессаСтрой</a> <span
                                    class="separator">|</span> <span class="breadcrumb_last"
                                    aria-current="page">Проектирование домов</span></span></span></div>
                    <h1 class="breadcrumbs"><b>Монтаж инженерных систем</b><br>под ключ в области</h1>
                    <div class="imitation-h1"></div>
                    <div class="after-title"></div>
                    <ul class="top-preroll-pluses">
                        <li class="top-preroll-plus"><b>Цена не изменится</b> в процессе строительства</li>
                        <li class="top-preroll-plus">Расширенная <b>гарантия 5 лет</b> включена в договор</li>
                        <li class="top-preroll-plus">От проекта до дома <b>”под ключ” за 120 дней</b></li>
                    </ul>
                    <div class="top-preroll-button-box">
                        <a href="#modal" class="button orange top-preroll-button scroll-to-calc"
                            data-modal="#quiz-modal">
                            Рассчитать стоимость<br>строительства дома </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<main>
    <section id="service-price">
        <div class="container">
            <div class="section-title"><b>Цены на монтаж инженерных систем</b> в Одессе</div>
            <div class="flex-row">
                <div class="accordion" id="price-accordion">
                    <div class="price-item">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="price-head-0">
                                <button class="accordion-button">Цена монтажа канализации:</button>
                            </h2>
                            <div id="price-0" class="accordion-collapse collapse show" style="display: block;;">
                                <div class="accordion-body">
                                    <div class="price-row-item">
                                        <span class="price-col-item-name">Цена за 1 санузел</span>
                                        <span class="price-col-item-line"></span>
                                        <span class="price-col-item-value">от 10000-12000 руб.</span>
                                    </div>
                                    <div class="price-row-item">
                                        <span class="price-col-item-name">Цена за 2 санузла</span>
                                        <span class="price-col-item-line"></span>
                                        <span class="price-col-item-value">от 22000-23000 руб.</span>
                                    </div>
                                    <div class="price-row-item">
                                        <span class="price-col-item-name">Цена за 3 санузла</span>
                                        <span class="price-col-item-line"></span>
                                        <span class="price-col-item-value">от 30000-35000 руб.</span>
                                    </div>
                                    <div class="price-row-item">
                                        <span class="price-col-item-name">Цена монтажа канализации кухни</span>
                                        <span class="price-col-item-line"></span>
                                        <span class="price-col-item-value">от 3000 руб.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="price-item">
                        <div class="accordion-item collapsed">
                            <h2 class="accordion-header" id="price-head-1">
                                <button class="accordion-button collapsed">Цена монтажа котельной:</button>
                            </h2>
                            <div id="price-1" class="accordion-collapse collapse" style="display: none;;">
                                <div class="accordion-body">
                                    <div class="price-row-item">
                                        <span class="price-col-item-name">Цена за 12-30 квт</span>
                                        <span class="price-col-item-line"></span>
                                        <span class="price-col-item-value">от 10000 руб.</span>
                                    </div>
                                    <div class="price-row-item">
                                        <span class="price-col-item-name">Цена за 28-50 квт</span>
                                        <span class="price-col-item-line"></span>
                                        <span class="price-col-item-value">от 20000 руб.</span>
                                    </div>
                                    <div class="price-row-item">
                                        <span class="price-col-item-name">Цена за 45-70 квт</span>
                                        <span class="price-col-item-line"></span>
                                        <span class="price-col-item-value">от 20000 руб.</span>
                                    </div>
                                    <div class="price-row-item">
                                        <span class="price-col-item-name">Цена за 60-100 квт</span>
                                        <span class="price-col-item-line"></span>
                                        <span class="price-col-item-value">от 20000 руб.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="price-item">
                        <div class="accordion-item collapsed">
                            <h2 class="accordion-header" id="price-head-2">
                                <button class="accordion-button collapsed">Цена монтажа отопления:</button>
                            </h2>
                            <div id="price-2" class="accordion-collapse collapse" style="display: none;;">
                                <div class="accordion-body">
                                    <div class="price-row-item">
                                        <span class="price-col-item-name">Тупиковая схема</span>
                                        <span class="price-col-item-line"></span>
                                        <span class="price-col-item-value">от 5000 руб.</span>
                                    </div>
                                    <div class="price-row-item">
                                        <span class="price-col-item-name">Попутная схема</span>
                                        <span class="price-col-item-line"></span>
                                        <span class="price-col-item-value">от 6000 руб.</span>
                                    </div>
                                    <div class="price-row-item">
                                        <span class="price-col-item-name">Лучевая схема</span>
                                        <span class="price-col-item-line"></span>
                                        <span class="price-col-item-value">от 3500 руб.</span>
                                    </div>
                                    <div class="price-row-item">
                                        <span class="price-col-item-name">Однотрубная схема</span>
                                        <span class="price-col-item-line"></span>
                                        <span class="price-col-item-value">от 4500 руб.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="price-item">
                        <div class="accordion-item collapsed">
                            <h2 class="accordion-header" id="price-head-3">
                                <button class="accordion-button collapsed">Цена монтажа водоснабжения:</button>
                            </h2>
                            <div id="price-3" class="accordion-collapse collapse" style="display: none;;">
                                <div class="accordion-body">
                                    <div class="price-row-item">
                                        <span class="price-col-item-name">Ввод воды из скважины до 50 м</span>
                                        <span class="price-col-item-line"></span>
                                        <span class="price-col-item-value">от 25000-30000 руб.</span>
                                    </div>
                                    <div class="price-row-item">
                                        <span class="price-col-item-name">Ввод воды из скважины свыше 50 м</span>
                                        <span class="price-col-item-line"></span>
                                        <span class="price-col-item-value">от 30000 руб.</span>
                                    </div>
                                    <div class="price-row-item">
                                        <span class="price-col-item-name">Подключение к городской сети</span>
                                        <span class="price-col-item-line"></span>
                                        <span class="price-col-item-value">от 5000 руб.</span>
                                    </div>
                                    <div class="price-row-item">
                                        <span class="price-col-item-name">Устройство бесперебойной подачи</span>
                                        <span class="price-col-item-line"></span>
                                        <span class="price-col-item-value">от 30000-45000 руб.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="price-item">
                        <div class="accordion-item collapsed">
                            <h2 class="accordion-header" id="price-head-4">
                                <button class="accordion-button collapsed">Цена монтажа электрики:</button>
                            </h2>
                            <div id="price-4" class="accordion-collapse collapse" style="display: none;;">
                                <div class="accordion-body">
                                    <div class="price-row-item">
                                        <span class="price-col-item-name">Площадь дома 80кв.м.</span>
                                        <span class="price-col-item-line"></span>
                                        <span class="price-col-item-value">от 50-60 тыс руб</span>
                                    </div>
                                    <div class="price-row-item">
                                        <span class="price-col-item-name">Площадь дома 100-120кв.м.</span>
                                        <span class="price-col-item-line"></span>
                                        <span class="price-col-item-value">от 55-70 тыс руб</span>
                                    </div>
                                    <div class="price-row-item">
                                        <span class="price-col-item-name">Площадь дома 130-170 кв.м.</span>
                                        <span class="price-col-item-line"></span>
                                        <span class="price-col-item-value">от 65-90 тыс руб</span>
                                    </div>
                                    <div class="price-row-item">
                                        <span class="price-col-item-name">Площадь дома 170-200кв.м.</span>
                                        <span class="price-col-item-line"></span>
                                        <span class="price-col-item-value">от 100-120 тыс руб</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="price-form-wrap">
                    <form class="smeta-form has-validation" method="POST" action="javascript:void(0)">
                        <div class="form-group-socials">
                            <div class="form-group-title text-center">Укажите свою площадь дома<br>и получите расчет
                                стоимости<br>фундамента через 5 минут</div>
                            <div class="before-title text-center">Мы вышлем подборку<br>вам в мессенджер</div>
                            <div class="form-group">
                                <input type="text" name="your-name" id="your-name-price-form" class="form-control"
                                    placeholder="Ваше имя">
                            </div>
                            <div class="form-group">
                                <input type="number" name="area" id="area-price-form" class="form-control"
                                    placeholder="Введите площадь дома">
                            </div>
                            <div class="form-group">
                                <div class="text-center"><label class="form-label"><b>Куда выслать наш вариант
                                            сметы?</b></label></div>
                            </div>
                            <div class="form-group form-group-socials-labels">
                                <input type="radio" id="whatsapp-price-form" name="send_to" value="whatsapp">
                                <label class="form-group-social-label" for="whatsapp-price-form">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-whatsapp.png" alt="Whatsapp"
                                        title="Whatsapp">
                                    <span class="form-group-social-label-text">Whatsapp</span>
                                </label>
                                <input type="radio" id="viber-price-form" name="send_to" value="viber">
                                <label class="form-group-social-label" for="viber-price-form">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-viber.png" alt="Viber"
                                        title="Viber">
                                    <span class="form-group-social-label-text">Viber</span>
                                </label>
                                <input type="radio" id="telegram-price-form" name="send_to" value="telegram">
                                <label class="form-group-social-label" for="telegram-price-form">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-telegram.png" alt="Telegram"
                                        title="Telegram">
                                    <span class="form-group-social-label-text">Telegram</span>
                                </label>
                                <input type="radio" id="pphone-price-form" name="send_to" value="Телефон" checked="">
                                <label class="form-group-social-label" for="pphone-price-form">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-phone.png" alt="Телефон"
                                        title="Телефон">
                                    <span class="form-group-social-label-text">Телефон</span>
                                </label>
                            </div>
                            <div class="form-group">
                                <div class="text-center">
                                    <label class="form-label" for="phone-price-form">Введите телефон</label>
                                </div>
                                <input type="tel" name="phone" id="phone-price-form" class="form-control"
                                    placeholder="+7" required="">
                            </div>
                            <div class="form-group">
                                <div class="text-center">
                                    <label class="form-label" for="your-name-phone-price-form">Введите имя</label>
                                </div>
                                <input type="text" name="your-name" id="your-name-phone-price-form" class="form-control"
                                    placeholder="Введите имя">
                            </div>
                            <div class="form-group submit-group">
                                <button type="submit" class="button orange smeta-form-button">Получить подборку
                                    проектов</button>
                                <input type="hidden" name="form_id" value="default-form">
                            </div>
                            <div class="form-group privacy-group">Нажимая на кнопку вы соглашаетесь с условиями <span
                                    onclick="window.open('privacy-policy/')">Политики конфиденциальности</span></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="service-portfolio">
        <div class="container">
            <div class="section-title text-center"><b>Посмотрите примеры объектов</b>, где<br>выполнялись работы по
                монтажу инженерных систем</div>
            <div class="flex-row">
                <div class="project-items-with-projects">
                    <div class="project-item portfolio-item">
                        <div class="project-item-image">
                                <noscript>
                                    <img
                                        width="416" height="250"
                                        src="http://ab/wp-content/themes/domrf/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3-300x225.jpg"
                                        class="attachment-catalog-thumbnail size-catalog-thumbnail wp-post-image"
                                        alt="image" />
                                </noscript>
                                <img width="416" height="250" src="http://ab/wp-content/themes/domrf/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3-300x225.jpg" data-src="http://ab/wp-content/themes/domrf/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3-300x225.jpg" class="attachment-catalog-thumbnail size-catalog-thumbnail wp-post-image ls-is-cached lazyloaded" alt="cover">
                        </div>
                        <div class="project-item-content">
                            <div class="project-item-title"><a href="">Дом
                                    из газобетона под ключ 133 кв.м.</a></div>
                            <div class="portfolio-item-price single-price-box">
                                <div class="single-price-title">Стоимость <br>строительства от</div>
                                <div class="single-price-value"><span>6 477 100</span> руб</div>
                            </div>
                        </div>
                        <a href="/portfolio-page/" class="project-item-btn"><span class="orange-link">Посмотреть проект</span></a>
                    </div>

                    <div class="project-item portfolio-item">
                        <div class="project-item-image">
                                <noscript>
                                    <img
                                        width="416" height="250"
                                        src="http://ab/wp-content/themes/domrf/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3-300x225.jpg"
                                        class="attachment-catalog-thumbnail size-catalog-thumbnail wp-post-image"
                                        alt="image" />
                                </noscript>
                                <img width="416" height="250" src="http://ab/wp-content/themes/domrf/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3-300x225.jpg" data-src="http://ab/wp-content/themes/domrf/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3-300x225.jpg" class="attachment-catalog-thumbnail size-catalog-thumbnail wp-post-image ls-is-cached lazyloaded" alt="cover">
                        </div>
                        <div class="project-item-content">
                            <div class="project-item-title"><a href="">Дом
                                    из газобетона под ключ 133 кв.м.</a></div>
                            <div class="portfolio-item-price single-price-box">
                                <div class="single-price-title">Стоимость <br>строительства от</div>
                                <div class="single-price-value"><span>6 477 100</span> руб</div>
                            </div>
                        </div>
                        <a href="/portfolio-page/" class="project-item-btn"><span class="orange-link">Посмотреть проект</span></a>
                    </div>

                    <div class="project-item portfolio-item">
                        <div class="project-item-image">
                                <noscript>
                                    <img
                                        width="416" height="250"
                                        src="http://ab/wp-content/themes/domrf/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3-300x225.jpg"
                                        class="attachment-catalog-thumbnail size-catalog-thumbnail wp-post-image"
                                        alt="image" />
                                </noscript>
                                <img width="416" height="250" src="http://ab/wp-content/themes/domrf/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3-300x225.jpg" data-src="http://ab/wp-content/themes/domrf/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3-300x225.jpg" class="attachment-catalog-thumbnail size-catalog-thumbnail wp-post-image ls-is-cached lazyloaded" alt="cover">
                        </div>
                        <div class="project-item-content">
                            <div class="project-item-title"><a href="">Дом
                                    из газобетона под ключ 133 кв.м.</a></div>
                            <div class="portfolio-item-price single-price-box">
                                <div class="single-price-title">Стоимость <br>строительства от</div>
                                <div class="single-price-value"><span>6 477 100</span> руб</div>
                            </div>
                        </div>
                        <a href="/portfolio-page/" class="project-item-btn"><span class="orange-link">Посмотреть проект</span></a>
                    </div>

                    <div class="project-item portfolio-item">
                        <div class="project-item-image">
                                <noscript>
                                    <img
                                        width="416" height="250"
                                        src="http://ab/wp-content/themes/domrf/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3-300x225.jpg"
                                        class="attachment-catalog-thumbnail size-catalog-thumbnail wp-post-image"
                                        alt="image" />
                                </noscript>
                                <img width="416" height="250" src="http://ab/wp-content/themes/domrf/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3-300x225.jpg" data-src="http://ab/wp-content/themes/domrf/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3-300x225.jpg" class="attachment-catalog-thumbnail size-catalog-thumbnail wp-post-image ls-is-cached lazyloaded" alt="cover">
                        </div>
                        <div class="project-item-content">
                            <div class="project-item-title"><a href="">Дом
                                    из газобетона под ключ 133 кв.м.</a></div>
                            <div class="portfolio-item-price single-price-box">
                                <div class="single-price-title">Стоимость <br>строительства от</div>
                                <div class="single-price-value"><span>6 477 100</span> руб</div>
                            </div>
                        </div>
                        <a href="/portfolio-page/" class="project-item-btn"><span class="orange-link">Посмотреть проект</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        include_once('blocks/specialists-slider.php')
    ?>

     <?php
        include_once('blocks/excursion.php')
    ?>

    <?php
        include_once('blocks/reviews-slider.php')
    ?>

    <?php
        include_once('blocks/directors-word.php')
    ?>

    <?php
        include_once('blocks/faq-list.php')
    ?>

    <?php
        include_once('blocks/contacts.php')
    ?>
</main>


<?php get_footer(); ?>