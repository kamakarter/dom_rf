<?php
/*
Template Name: create-houses
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
                    <div class="breadcrumbs-real hidden-print"><span><span><a href="makeevka/">ОдессаСтрой</a> <span class="separator">|</span> <span class="breadcrumb_last" aria-current="page">Проектирование домов</span></span></span></div>
                    <h1 class="breadcrumbs"><b>Проектирование домов</b>в области</h1>
                    <div class="imitation-h1"></div>
                    <div class="after-title"></div>
                    <ul class="top-preroll-pluses">
                        <li class="top-preroll-plus"><b>Цена не изменится</b> в процессе строительства</li>
                        <li class="top-preroll-plus">Расширенная <b>гарантия 5 лет</b> включена в договор</li>
                        <li class="top-preroll-plus">От проекта до дома <b>”под ключ” за 120 дней</b></li>
                    </ul>
                    <div class="top-preroll-button-box">
                        <a href="#modal" class="button orange top-preroll-button scroll-to-calc" data-modal="#quiz-modal">
                            Рассчитать стоимость<br>строительства дома </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<main>
    

    <section id="service-price" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets//wp-content/themes/super_dom/images/service_price_bg.png');" >
        <div class="container">
            <div class="section-title"><b>Цены на проектирование домов</b> в Одессе</div>
            <div class="flex-row">
                <div class="accordion" id="price-accordion">
                    <div class="price-item">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="price-head-0">
                                <button class="accordion-button">Прайс-лист</button>
                            </h2>
                            <div id="price-0" class="accordion-collapse collapse show" style="display: block;;">
                                <div class="accordion-body">
                                    <div class="price-row-item">
                                        <span class="price-col-item-name">Эскизная часть проекта</span>
                                        <span class="price-col-item-line"></span>
                                        <span class="price-col-item-value">от 250 руб/м²</span>
                                    </div>
                                    <div class="price-row-item">
                                        <span class="price-col-item-name">Архитектурная часть проекта</span>
                                        <span class="price-col-item-line"></span>
                                        <span class="price-col-item-value">от 300 руб/м²</span>
                                    </div>
                                    <div class="price-row-item">
                                        <span class="price-col-item-name">Конструкторская часть проекта</span>
                                        <span class="price-col-item-line"></span>
                                        <span class="price-col-item-value">от 350 руб/м²</span>
                                    </div>
                                    <div class="price-row-item">
                                        <span class="price-col-item-name">Отопление и вентиляция</span>
                                        <span class="price-col-item-line"></span>
                                        <span class="price-col-item-value">от 250 руб/м²</span>
                                    </div>
                                    <div class="price-row-item">
                                        <span class="price-col-item-name">Водоснабжение и канализация</span>
                                        <span class="price-col-item-line"></span>
                                        <span class="price-col-item-value">от 250 руб/м²</span>
                                    </div>
                                    <div class="price-row-item">
                                        <span class="price-col-item-name">Электрооборудование</span>
                                        <span class="price-col-item-line"></span>
                                        <span class="price-col-item-value">от 200 руб/м²</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="price-form-wrap">
                    <form class="smeta-form has-validation" method="POST" action="javascript:void(0)">
                        <div class="form-group-socials">
                            <div class="form-group-title text-center">Укажите свою площадь дома<br>и получите расчет стоимости<br>фундамента через 5 минут</div>
                            <div class="before-title text-center">Мы вышлем подборку<br>вам в мессенджер</div>
                            <div class="form-group">
                                <select name="home_type" id="home_type-price-form" class="form-control form-select">
                                    <option value="">Выберите тип дома</option>
                                    <option value="Дом из газобетона">Дом из газобетона</option>
                                    <option value="Дом из кирпича">Дом из кирпича</option>
                                    <option value="Дом из теплой керамики">Дом из теплой керамики</option>
                                    <option value="Дом из профилированного бруса">Дом из профилированного бруса</option>
                                    <option value="Дом из клееного бруса">Дом из клееного бруса</option>
                                    <option value="Дом из оцилиндрованного бревна">Дом из оцилиндрованного бревна</option>
                                    <option value="Каркасный дом">Каркасный дом</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="number" name="area" id="area-price-form" class="form-control" placeholder="Введите площадь дома">
                            </div>
                            <div class="form-group">
                                <div class="text-center"><label class="form-label"><b>Куда выслать наш вариант сметы?</b></label></div>
                            </div>
                            <div class="form-group form-group-socials-labels">
                                <input type="radio" id="whatsapp-price-form" name="send_to" value="whatsapp">
                                <label class="form-group-social-label" for="whatsapp-price-form">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-whatsapp.png" alt="Whatsapp" title="Whatsapp">
                                    <span class="form-group-social-label-text">Whatsapp</span>
                                </label>
                                <input type="radio" id="viber-price-form" name="send_to" value="viber">
                                <label class="form-group-social-label" for="viber-price-form">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-viber.png" alt="Viber" title="Viber">
                                    <span class="form-group-social-label-text">Viber</span>
                                </label>
                                <input type="radio" id="telegram-price-form" name="send_to" value="telegram">
                                <label class="form-group-social-label" for="telegram-price-form">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-telegram.png" alt="Telegram" title="Telegram">
                                    <span class="form-group-social-label-text">Telegram</span>
                                </label>
                                <input type="radio" id="pphone-price-form" name="send_to" value="Телефон" checked="">
                                <label class="form-group-social-label" for="pphone-price-form">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-phone.png" alt="Телефон" title="Телефон">
                                    <span class="form-group-social-label-text">Телефон</span>
                                </label>
                            </div>
                            <div class="form-group">
                                <div class="text-center">
                                    <label class="form-label" for="phone-price-form">Введите телефон</label>
                                </div>
                                <input type="tel" name="phone" id="phone-price-form" class="form-control" placeholder="+7" required="">
                            </div>
                            <div class="form-group">
                                <div class="text-center">
                                    <label class="form-label" for="your-name-phone-price-form">Введите имя</label>
                                </div>
                                <input type="text" name="your-name" id="your-name-phone-price-form" class="form-control" placeholder="Введите имя">
                            </div>
                            <div class="form-group submit-group">
                                <button type="submit" class="button orange smeta-form-button">Получить подборку проектов</button>
                                <input type="hidden" name="form_id" value="proektirovanie-form">
                            </div>
                            <div class="form-group privacy-group">Нажимая на кнопку вы соглашаетесь с условиями <span onclick="window.open('privacy-policy/')">Политики конфиденциальности</span></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="service-portfolio">
        <div class="container">
            <div class="section-title text-center"><b>Посмотрите примеры домов</b> <br>построенных по нашим проектам</div>
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