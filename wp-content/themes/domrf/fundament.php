<?php
/*
Template Name: fundament
*/
?>

<?php get_header(); ?>

<div class="lazyload default-header" data-bg="<?php echo get_template_directory_uri(); ?>/assets/superuploads/images/single-bg.jpg"
    style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/superuploads/images/single-bg.jpg">

    <style>
    .single-header,
    .default-header {
        background-image: url("<?php echo get_template_directory_uri(); ?>/assets/superuploads/images/single-bg.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        height: 100vh;
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
                                    aria-current="page">Фундамент</span></span></span></div>
                    

                    <h1 class="breadcrumbs" style="font-size: 40px;">
                        <b>Строительство фундамента с вековой надежностью,</b> под ключ в Одессе
                    </h1>
                    <!-- <div class="imitation-h1"></div> -->
                    <!-- <div class="after-title"></div> -->
                    <ul class="top-preroll-pluses">
                        <li class="top-preroll-plus"><b class="fsz-big">8</b> лет<br><b>Строим</b> фундаменты</li>
                        <li class="top-preroll-plus"><b class="fsz-big">5</b> лет<br><b>Гарантия</b> по договору
                        </li>
                        <li class="top-preroll-plus">до <b class="fsz-big">15%</b><br><b>Скидка</b> на песок и бетон
                        </li>
                    </ul>
                    <div class="top-preroll-button-box">
                        <a href="#modal" class="button orange top-preroll-button scroll-to-calc">
                            Рассчитать стоимость<br>фундамента
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<main>
    <section id="quiz-fund" class="quiz-section lazyload" style="magrin-top: 64px;">
        <div class="container">
            <div class="quiz-container">
                <div class="quiz-content">
                    <div class="before-title text-center">Пройдите бесплатный тест-калькулятор и</div>
                    <div class="section-title text-center"><b>Получите предварительный расчет<br> стоимости</b>
                        фундамента за 1 минуту</div>
                    <div class="left-manager-box">
                        <div class="left-manager-photo"> <noscript><img src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/sotrudnik-8.jpg"
                                    alt="Иван Михайленков" title="Иван Михайленков"></noscript><img class="lazyload"
                                src=''
                                data-src="superuploads/2021/07/sotrudnik-8.jpg" alt="Иван Михайленков"
                                title="Иван Михайленков"></div> 
                        <div class="left-manager-fio">Иван Михайленков</div>
                        <div class="left-manager-post">Ведущий архитектор</div>
                        <div class="left-manager-text">Здравствуйте, меня зовут Иван, и я помогу вам понять какой
                            бюджет нужен для строительства вашего дома под ключ.</div>
                        <div class="left-manager-pluses-title">Ответив на вопросы <b>вы получите:</b></div>
                        <div class="left-manager-pluses-list">
                            <div class="lazyload left-manager-plus-item left-manager-plus-item-0"
                                data-bg="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/lm1.png"
                                style="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/lm1.png">
                                <span class="left-manager-plus-item-icon"></span> <span
                                    class="left-manager-plus-item-text"><b>Ориентировочную стоимость</b>
                                    строительства</span>
                            </div>
                            <div class="lazyload left-manager-plus-item left-manager-plus-item-1"
                                data-bg="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/lm2.png"
                                style="">
                                <span class="left-manager-plus-item-icon"></span> <span
                                    class="left-manager-plus-item-text"><b>Точную подборку проектов</b> исходя из
                                    ваших ответов либо предложим новый вариант</span>
                            </div>
                            <div class="lazyload left-manager-plus-item left-manager-plus-item-2"
                                data-bg="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/lm3.png"
                                style="">
                                <span class="left-manager-plus-item-icon"></span> <span
                                    class="left-manager-plus-item-text"><b>Один из 3-х подарков</b> при заказе
                                    строительства у нас</span>
                            </div>
                        </div>
                    </div>
                    <form class="quiz-form" id="quiz-form-fund"> <input type="hidden" name="action" value="send_quiz">
                        <input type="hidden" name="quiz_type" value="fund_data">
                        <div class="quiz-header">
                            <div class="quiz-loader">
                                <div class="quiz-loader-progress"></div>
                            </div>
                        </div>
                        <div class="quiz-body">
                            <div id="quiz-fund-step-0" class="quiz-step-item show" data-step="1">
                                <div class="quiz-step-item-top">
                                    <div class="quiz-step-item-number">01</div>
                                    <div class="quiz-step-item-title">Какой фундамент вам нужен?</div>
                                </div>
                                <div class="quiz-step-item-content"> <input type="radio" class="radio-hidden"
                                        id="quiz-fund-0-0" name="quiz-fund[0]" value="Монолитная плита"> <label
                                        for="quiz-fund-0-0"
                                        class="quiz-label-item quiz-label-type-radio label-item-small label-item-with_image">
                                        <noscript><img src="<?php echo get_template_directory_uri(); ?>/assets/assets/superuploads/2021/08/bez-imeni-4.png"
                                                class="quiz-label-item-image" alt="Монолитная плита"
                                                title="Монолитная плита"></noscript><img
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/bez-imeni-4.png"
                                            class="lazyload quiz-label-item-image" alt="Монолитная плита"
                                            title="Монолитная плита">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">Монолитная плита</div>
                                    </label> <input type="radio" class="radio-hidden" id="quiz-fund-0-1"
                                        name="quiz-fund[0]" value="УШП"> <label for="quiz-fund-0-1"
                                        class="quiz-label-item quiz-label-type-radio label-item-small label-item-with_image">
                                        <noscript><img src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/bez-imeni-6.png"
                                                class="quiz-label-item-image" alt="УШП" title="УШП"></noscript><img
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/bez-imeni-6.png"
                                            class="lazyload quiz-label-item-image" alt="УШП" title="УШП">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">УШП</div>
                                    </label> <input type="radio" class="radio-hidden" id="quiz-fund-0-2"
                                        name="quiz-fund[0]" value="Ленточный"> <label for="quiz-fund-0-2"
                                        class="quiz-label-item quiz-label-type-radio label-item-small label-item-with_image">
                                        <noscript><img src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/bez-imeni-1.png"
                                                class="quiz-label-item-image" alt="Ленточный"
                                                title="Ленточный"></noscript><img
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/bez-imeni-1.png"
                                            class="lazyload quiz-label-item-image" alt="Ленточный" title="Ленточный">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">Ленточный</div>
                                    </label> <input type="radio" class="radio-hidden" id="quiz-fund-0-3"
                                        name="quiz-fund[0]" value="Свайно-винтовой"> <label for="quiz-fund-0-3"
                                        class="quiz-label-item quiz-label-type-radio label-item-small label-item-with_image">
                                        <noscript><img src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/bez-imeni-3.png"
                                                class="quiz-label-item-image" alt="Свайно-винтовой"
                                                title="Свайно-винтовой"></noscript><img
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/bez-imeni-3.png"
                                            class="lazyload quiz-label-item-image" alt="Свайно-винтовой"
                                            title="Свайно-винтовой">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">Свайно-винтовой</div>
                                    </label> <input type="radio" class="radio-hidden" id="quiz-fund-0-4"
                                        name="quiz-fund[0]" value="Свайно-ростверковый"> <label for="quiz-fund-0-4"
                                        class="quiz-label-item quiz-label-type-radio label-item-small label-item-with_image">
                                        <noscript><img src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/bez-imeni-5.png"
                                                class="quiz-label-item-image" alt="Свайно-ростверковый"
                                                title="Свайно-ростверковый"></noscript><img
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/bez-imeni-5.png"
                                            class="lazyload quiz-label-item-image" alt="Свайно-ростверковый"
                                            title="Свайно-ростверковый">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">Свайно-ростверковый</div>
                                    </label> <input type="radio" class="radio-hidden" id="quiz-fund-0-5"
                                        name="quiz-fund[0]" value="Другой"> <label for="quiz-fund-0-5"
                                        class="quiz-label-item quiz-label-type-radio label-item-small label-item-with_image">
                                        <noscript><img src="superuploads/superuploads/2021/08/bez-imeni-2.png"
                                                class="quiz-label-item-image" alt="Другой"
                                                title="Другой"></noscript><img
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="superuploads/superuploads/2021/08/bez-imeni-2.png"
                                            class="lazyload quiz-label-item-image" alt="Другой" title="Другой">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">Другой</div>
                                    </label></div>
                            </div>
                            <div id="quiz-fund-step-1" class="quiz-step-item" data-step="2">
                                <div class="quiz-step-item-top">
                                    <div class="quiz-step-item-number">02</div>
                                    <div class="quiz-step-item-title">Для чего нужен фундамент?</div>
                                </div>
                                <div class="quiz-step-item-content"> <input type="radio" class="radio-hidden"
                                        id="quiz-fund-1-0" name="quiz-fund[1]" value="Дом"> <label for="quiz-fund-1-0"
                                        class="quiz-label-item quiz-label-type-radio label-item-small label-item-with_image">
                                        <noscript><img src="superuploads/2022/02/42dfd86d4054ddb77a3cdda7492806092.png"
                                                class="quiz-label-item-image" alt="Дом" title="Дом"></noscript><img
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="superuploads/2022/02/42dfd86d4054ddb77a3cdda7492806092.png"
                                            class="lazyload quiz-label-item-image" alt="Дом" title="Дом">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">Дом</div>
                                    </label> <input type="radio" class="radio-hidden" id="quiz-fund-1-1"
                                        name="quiz-fund[1]" value="Баня"> <label for="quiz-fund-1-1"
                                        class="quiz-label-item quiz-label-type-radio label-item-small label-item-with_image">
                                        <noscript><img src="superuploads/2021/08/3-1-300x200.png"
                                                class="quiz-label-item-image" alt="Баня" title="Баня"></noscript><img
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="superuploads/2021/08/3-1-300x200.png"
                                            class="lazyload quiz-label-item-image" alt="Баня" title="Баня">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">Баня</div>
                                    </label> <input type="radio" class="radio-hidden" id="quiz-fund-1-2"
                                        name="quiz-fund[1]" value="Гараж"> <label for="quiz-fund-1-2"
                                        class="quiz-label-item quiz-label-type-radio label-item-small label-item-with_image">
                                        <noscript><img
                                                src="superuploads/2022/02/f116c94bf245d5a1289c739fb4fcfc072-300x218.png"
                                                class="quiz-label-item-image" alt="Гараж" title="Гараж"></noscript><img
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="superuploads/2022/02/f116c94bf245d5a1289c739fb4fcfc072-300x218.png"
                                            class="lazyload quiz-label-item-image" alt="Гараж" title="Гараж">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">Гараж</div>
                                    </label> <input type="radio" class="radio-hidden" id="quiz-fund-1-3"
                                        name="quiz-fund[1]" value="Коммерческий объект"> <label for="quiz-fund-1-3"
                                        class="quiz-label-item quiz-label-type-radio label-item-small label-item-with_image">
                                        <noscript><img src="superuploads/2021/08/f3-1.png" class="quiz-label-item-image"
                                                alt="Коммерческий объект" title="Коммерческий объект"></noscript><img
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="superuploads/2021/08/f3-1.png"
                                            class="lazyload quiz-label-item-image" alt="Коммерческий объект"
                                            title="Коммерческий объект">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">Коммерческий объект</div>
                                    </label> <input type="radio" class="radio-hidden" id="quiz-fund-1-4"
                                        name="quiz-fund[1]" value="Дача"> <label for="quiz-fund-1-4"
                                        class="quiz-label-item quiz-label-type-radio label-item-small label-item-with_image">
                                        <noscript><img src="superuploads/2021/08/f2-1-300x225.png"
                                                class="quiz-label-item-image" alt="Дача" title="Дача"></noscript><img
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="superuploads/2021/08/f2-1-300x225.png"
                                            class="lazyload quiz-label-item-image" alt="Дача" title="Дача">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">Дача</div>
                                    </label> <input type="radio" class="radio-hidden" id="quiz-fund-1-5"
                                        name="quiz-fund[1]" value="Другое"> <label for="quiz-fund-1-5"
                                        class="quiz-label-item quiz-label-type-radio label-item-small label-item-with_image">
                                        <noscript><img src="superuploads/2022/02/718f02c507a5e1f4948bf9dee56f9ed62.jpg"
                                                class="quiz-label-item-image" alt="Другое"
                                                title="Другое"></noscript><img
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="superuploads/2022/02/718f02c507a5e1f4948bf9dee56f9ed62.jpg"
                                            class="lazyload quiz-label-item-image" alt="Другое" title="Другое">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">Другое</div>
                                    </label></div>
                            </div>
                            <div id="quiz-fund-step-2" class="quiz-step-item" data-step="3">
                                <div class="quiz-step-item-top">
                                    <div class="quiz-step-item-number">03</div>
                                    <div class="quiz-step-item-title">Укажите размеры</div>
                                </div>
                                <div class="quiz-step-item-content"> <input type="radio" class="radio-hidden"
                                        id="quiz-fund-2-0" name="quiz-fund[2]" value="До 100 кв.м."> <label
                                        for="quiz-fund-2-0"
                                        class="quiz-label-item quiz-label-type-radio label-item- label-item-without_image">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">До 100 кв.м.</div>
                                    </label> <input type="radio" class="radio-hidden" id="quiz-fund-2-1"
                                        name="quiz-fund[2]" value="До 100 - 150 кв.м."> <label for="quiz-fund-2-1"
                                        class="quiz-label-item quiz-label-type-radio label-item- label-item-without_image">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">До 100 - 150 кв.м.</div>
                                    </label> <input type="radio" class="radio-hidden" id="quiz-fund-2-2"
                                        name="quiz-fund[2]" value="До 150 - 200 кв.м."> <label for="quiz-fund-2-2"
                                        class="quiz-label-item quiz-label-type-radio label-item- label-item-without_image">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">До 150 - 200 кв.м.</div>
                                    </label> <input type="radio" class="radio-hidden" id="quiz-fund-2-3"
                                        name="quiz-fund[2]" value="Более 200 кв.м."> <label for="quiz-fund-2-3"
                                        class="quiz-label-item quiz-label-type-radio label-item- label-item-without_image">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">Более 200 кв.м.</div>
                                    </label></div>
                            </div>
                            <div id="quiz-fund-step-3" class="quiz-step-item column-bg-3" data-step="4">
                                <div class="quiz-step-item-top">
                                    <div class="quiz-step-item-number">04</div>
                                    <div class="quiz-step-item-title">Когда планируете строительство?</div>
                                </div>
                                <div class="quiz-step-item-content"> <input type="radio" class="radio-hidden"
                                        id="quiz-fund-3-0" name="quiz-fund[3]" value="В ближайшее время"> <label
                                        for="quiz-fund-3-0"
                                        class="quiz-label-item quiz-label-type-radio label-item-medium label-item-without_image label-item-is_column">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">В ближайшее время</div>
                                    </label> <input type="radio" class="radio-hidden" id="quiz-fund-3-1"
                                        name="quiz-fund[3]" value="В этом году"> <label for="quiz-fund-3-1"
                                        class="quiz-label-item quiz-label-type-radio label-item-medium label-item-without_image label-item-is_column">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">В этом году</div>
                                    </label> <input type="radio" class="radio-hidden" id="quiz-fund-3-2"
                                        name="quiz-fund[3]" value="В следующем году"> <label for="quiz-fund-3-2"
                                        class="quiz-label-item quiz-label-type-radio label-item-medium label-item-without_image label-item-is_column">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">В следующем году</div>
                                    </label> <input type="radio" class="radio-hidden" id="quiz-fund-3-3"
                                        name="quiz-fund[3]" value="Не определился"> <label for="quiz-fund-3-3"
                                        class="quiz-label-item quiz-label-type-radio label-item-medium label-item-without_image label-item-is_column">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">Не определился</div>
                                    </label></div>
                            </div>
                            <div id="quiz-fund-step-4" class="quiz-step-item" data-step="5">
                                <div class="quiz-step-item-top">
                                    <div class="quiz-step-item-number">05</div>
                                    <div class="quiz-step-item-title">Какой подарок для вашего участка вы бы
                                        выбрали, при заказе строительства</div>
                                </div>
                                <div class="quiz-step-item-content"> <input type="radio" class="radio-hidden"
                                        id="quiz-fund-4-0" name="quiz-fund[4]" value="Бассейн"> <label
                                        for="quiz-fund-4-0"
                                        class="quiz-label-item quiz-label-type-radio label-item-small label-item-with_image label-item-is_long">
                                        <noscript><img src="superuploads/2021/05/doma-p-1-198x300.png"
                                                class="quiz-label-item-image" alt="Бассейн"
                                                title="Бассейн"></noscript><img
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="superuploads/2021/05/doma-p-1-198x300.png"
                                            class="lazyload quiz-label-item-image" alt="Бассейн" title="Бассейн">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">Бассейн</div>
                                    </label> <input type="radio" class="radio-hidden" id="quiz-fund-4-1"
                                        name="quiz-fund[4]" value="Беседка"> <label for="quiz-fund-4-1"
                                        class="quiz-label-item quiz-label-type-radio label-item-small label-item-with_image label-item-is_long">
                                        <noscript><img src="superuploads/2021/05/doma-p-2-198x300.png"
                                                class="quiz-label-item-image" alt="Беседка"
                                                title="Беседка"></noscript><img
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="superuploads/2021/05/doma-p-2-198x300.png"
                                            class="lazyload quiz-label-item-image" alt="Беседка" title="Беседка">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">Беседка</div>
                                    </label> <input type="radio" class="radio-hidden" id="quiz-fund-4-2"
                                        name="quiz-fund[4]" value="Качели"> <label for="quiz-fund-4-2"
                                        class="quiz-label-item quiz-label-type-radio label-item-small label-item-with_image label-item-is_long">
                                        <noscript><img src="superuploads/2021/05/doma-p3-198x300.png"
                                                class="quiz-label-item-image" alt="Качели"
                                                title="Качели"></noscript><img
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="superuploads/2021/05/doma-p3-198x300.png"
                                            class="lazyload quiz-label-item-image" alt="Качели" title="Качели">
                                        <div class="quiz-label-item-radio"> <span class="checked"></span> <span
                                                class="unchecked"></span></div>
                                        <div class="quiz-label-item-text">Качели</div>
                                    </label></div>
                            </div>
                            <div id="quiz-fund-step-5" class="quiz-step-item quiz-step-item-before-thanks"
                                data-step="6">
                                <div class="quiz-step-item-top">
                                    <div class="quiz-step-item-number">Расчет пройден</div>
                                    <div class="quiz-step-item-title"><b>Мы получили данные <br>и приступаем к
                                            расчетам</b><span class="padding"></span>Укажите куда выслать <br>расчет
                                        стоимости?</div>
                                </div>
                                <div class="quiz-step-item-content">
                                    <div class="form-group-socials">
                                        <div class="form-group form-group-socials-labels"> <input type="radio"
                                                id="whatsapp-quiz-fund" name="send_to" value="whatsapp"> <label
                                                class="form-group-social-label" for="whatsapp-quiz-fund">
                                                <noscript><img
                                                        src="wp-content/themes/super_dom/icons/label-whatsapp.png"
                                                        alt="Whatsapp" title="Whatsapp"></noscript><img class="lazyload"
                                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                                    data-src="wp-content/themes/super_dom/icons/label-whatsapp.png"
                                                    alt="Whatsapp" title="Whatsapp"> <span
                                                    class="form-group-social-label-text">Whatsapp</span> </label>
                                            <input type="radio" id="viber-quiz-fund" name="send_to" value="viber">
                                            <label class="form-group-social-label" for="viber-quiz-fund">
                                                <noscript><img src="wp-content/themes/super_dom/icons/label-viber.png"
                                                        alt="Viber" title="Viber"></noscript><img class="lazyload"
                                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                                    data-src="wp-content/themes/super_dom/icons/label-viber.png"
                                                    alt="Viber" title="Viber"> <span
                                                    class="form-group-social-label-text">Viber</span> </label>
                                            <input type="radio" id="telegram-quiz-fund" name="send_to" value="telegram">
                                            <label class="form-group-social-label" for="telegram-quiz-fund">
                                                <noscript><img
                                                        src="wp-content/themes/super_dom/icons/label-telegram.png"
                                                        alt="Telegram" title="Telegram"></noscript><img class="lazyload"
                                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                                    data-src="wp-content/themes/super_dom/icons/label-telegram.png"
                                                    alt="Telegram" title="Telegram"> <span
                                                    class="form-group-social-label-text">Telegram</span> </label>
                                            <input type="radio" id="pphone-quiz-fund" name="send_to" value="Телефон"
                                                checked> <label class="form-group-social-label" for="pphone-quiz-fund">
                                                <noscript><img src="wp-content/themes/super_dom/icons/label-phone.png"
                                                        alt="Телефон" title="Телефон"></noscript><img class="lazyload"
                                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                                    data-src="wp-content/themes/super_dom/icons/label-phone.png"
                                                    alt="Телефон" title="Телефон"> <span
                                                    class="form-group-social-label-text">Телефон</span> </label>
                                        </div>
                                        <div class="form-group"> <input type="text" name="your-name"
                                                id="your-name-quiz-fund" class="form-control" placeholder="Введите имя">
                                        </div>
                                        <div class="form-group">
                                            <div class="text-center"> <label class="form-label"
                                                    for="phone-quiz-fund">Введите телефон</label></div> <input
                                                type="tel" name="phone" id="phone-quiz-fund" class="form-control"
                                                placeholder="+7">
                                        </div>
                                        <div class="form-group submit-group"> <button type="button"
                                                class="button orange project-last-button quiz-send-button"
                                                data-quiz="fund">Получить расчет + подарок</button></div>
                                        <div class="form-group privacy-group">Нажимая на кнопку вы соглашаетесь с
                                            условиями <span onclick="window.open('privacy-policy/')">Политики
                                                конфиденциальности</span></div>
                                    </div>
                                </div>
                            </div>
                            <div id="quiz-fund-step-6" class="quiz-step-item quiz-step-item-thanks" data-step="7">
                                <div class="quiz-step-item-top">
                                    <div class="quiz-step-item-number">Данные отправлены</div>
                                    <div class="quiz-step-item-title"><span>Данные отправлены. Скоро вы получите
                                            расчет.</span><span class="padding"></span><b>Запишитесь на бесплатную
                                            <br>экскурсию по строящимся объектам</b></div>
                                </div>
                                <div class="quiz-step-item-content">
                                    <div class="section-title-small"></div>
                                    <ul class="excursion-pluses">
                                        <li><b>Познакомитесь</b> с технологией строительства</li>
                                        <li><b>Оцените</b> качество материалов на стройплощадке</li>
                                        <li><b>Зададите</b> вопросы руководителю строительства</li>
                                    </ul>
                                    <div class="excursion-form">
                                        <div class="form-group">
                                            <div class="text-center"><label for="excursion-date-quiz-fund">Укажите
                                                    дату</label></div> <input type="date" name="excursion-date"
                                                id="excursion-date-quiz-fund" class="form-control" min="2025-07-09"
                                                value="2025-07-09">
                                        </div>
                                        <div class="form-group">
                                            <div class="text-center"><label for="excursion-phone-quiz-fund">Укажите
                                                    телефон</label></div> <input type="tel2" name="excursion-phone"
                                                id="excursion-phone-quiz-fund" class="form-control">
                                        </div>
                                        <div class="form-group submit-group text-center"> <button type="button"
                                                class="button orange quiz-excursion-send-button"
                                                data-quiz="fund">Записаться на экскурсию</button>
                                            <div class="privacy-group">Нажимая на кнопку вы соглашаетесь с условиями
                                                <span onclick="window.open('privacy-policy/')">Политики
                                                    конфиденциальности</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="quiz-footer"> <button type="button" class="button orange button-quiz-back"
                                data-quiz="fund" style="display: none;">Назад</button> <button type="button"
                                class="button orange button-quiz" data-quiz="fund" disabled>Далее</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="service-pluses1">
        <div class="container">
            <div class="section-title text-center"><b>Строим фундаменты</b> для больших и<br>малых строительных
                объектов</div>
            <div class="service-pluses1-list">
                <div class="service-plus-item">
                    <div class="gflag-item-box gflag-item-box-1 gflag-item-has-bg">
                        <div class="gflag-item-flag">01</div>
                        <div class="lazyload gflag-item" data-bg="superuploads/2021/07/f1-1.png"
                            style="background-image: url(data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20500%20300%22%3E%3C/svg%3E);">
                            <div class="gflag-item-title">Частный дом</div>
                        </div>
                    </div>
                </div>
                <div class="service-plus-item">
                    <div class="gflag-item-box gflag-item-box-2 gflag-item-has-bg">
                        <div class="gflag-item-flag">02</div>
                        <div class="lazyload gflag-item" data-bg="superuploads/2021/07/f2-1.png"
                            style="background-image: url(data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20500%20300%22%3E%3C/svg%3E);">
                            <div class="gflag-item-title">Дача</div>
                        </div>
                    </div>
                </div>
                <div class="service-plus-item">
                    <div class="gflag-item-box gflag-item-box-3 gflag-item-has-bg">
                        <div class="gflag-item-flag">03</div>
                        <div class="lazyload gflag-item" data-bg="superuploads/2021/07/f3-1.png"
                            style="background-image: url(data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20500%20300%22%3E%3C/svg%3E);">
                            <div class="gflag-item-title">Коммерческий объект</div>
                        </div>
                    </div>
                </div>
                <div class="service-plus-item">
                    <div class="gflag-item-box gflag-item-box-4 gflag-item-has-bg">
                        <div class="gflag-item-flag">04</div>
                        <div class="lazyload gflag-item" data-bg="superuploads/2021/07/f4-1.png"
                            style="background-image: url(data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20500%20300%22%3E%3C/svg%3E);">
                            <div class="gflag-item-title">Гараж</div>
                        </div>
                    </div>
                </div>
                <div class="service-plus-item">
                    <div class="gflag-item-box gflag-item-box-5 gflag-item-has-bg">
                        <div class="gflag-item-flag">05</div>
                        <div class="lazyload gflag-item" data-bg="superuploads/2021/08/3-1-1.png"
                            style="background-image: url(data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20500%20300%22%3E%3C/svg%3E);">
                            <div class="gflag-item-title">Баня</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="service-price">
        <div class="container">
            <div class="section-title"><b>Примерные цены</b><br>за работу + материалы</div>
            <div class="flex-row">
                <div class="accordion" id="price-accordion">
                    <div class="price-item">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="price-head-0"> <button class="accordion-button">Ленточный
                                    фундамент</button></h2>
                            <div id="price-0" class="accordion-collapse collapse show" style="display: block;;">
                                <div class="accordion-body">
                                    <div class="price-row-item"> <span class="price-col-item-name">Ленточный
                                            фундамент 6 на 6</span> <span class="price-col-item-line"></span> <span
                                            class="price-col-item-value">от 250 000 руб</span></div>
                                    <div class="price-row-item"> <span class="price-col-item-name">Ленточный
                                            фундамент 6 на 8</span> <span class="price-col-item-line"></span> <span
                                            class="price-col-item-value">от 270 000 руб</span></div>
                                    <div class="price-row-item"> <span class="price-col-item-name">Ленточный
                                            фундамент 7 на 7</span> <span class="price-col-item-line"></span> <span
                                            class="price-col-item-value">от 355 000 руб</span></div>
                                    <div class="price-row-item"> <span class="price-col-item-name">Ленточный
                                            фундамент 8 на 8</span> <span class="price-col-item-line"></span> <span
                                            class="price-col-item-value">от 447 000 руб</span></div>
                                    <div class="price-row-item"> <span class="price-col-item-name">Ленточный
                                            фундамент 9 на 9</span> <span class="price-col-item-line"></span> <span
                                            class="price-col-item-value">от 486 000 руб</span></div>
                                    <div class="price-row-item"> <span class="price-col-item-name">Ленточный
                                            фундамент 10 на 10</span> <span class="price-col-item-line"></span>
                                        <span class="price-col-item-value">от 538 000 руб</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="price-item">
                        <div class="accordion-item collapsed">
                            <h2 class="accordion-header" id="price-head-1"> <button
                                    class="accordion-button collapsed">Свайно-винтовой фундамент</button></h2>
                            <div id="price-1" class="accordion-collapse collapse" style="display: none;;">
                                <div class="accordion-body">
                                    <div class="price-row-item"> <span class="price-col-item-name">Фундамент
                                            6×6</span> <span class="price-col-item-line"></span> <span
                                            class="price-col-item-value">от 36 500 руб</span></div>
                                    <div class="price-row-item"> <span class="price-col-item-name">Фундамент
                                            6×8</span> <span class="price-col-item-line"></span> <span
                                            class="price-col-item-value">от 47 000 руб</span></div>
                                    <div class="price-row-item"> <span class="price-col-item-name">Фундамент
                                            7×7</span> <span class="price-col-item-line"></span> <span
                                            class="price-col-item-value">от 61 000 руб</span></div>
                                    <div class="price-row-item"> <span class="price-col-item-name">Фундамент
                                            8×8</span> <span class="price-col-item-line"></span> <span
                                            class="price-col-item-value">от 89 000 руб</span></div>
                                    <div class="price-row-item"> <span class="price-col-item-name">Фундамент
                                            9×9</span> <span class="price-col-item-line"></span> <span
                                            class="price-col-item-value">от 112 000 руб</span></div>
                                    <div class="price-row-item"> <span class="price-col-item-name">Фундамент
                                            10×10</span> <span class="price-col-item-line"></span> <span
                                            class="price-col-item-value">от 150 000 руб</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="price-item">
                        <div class="accordion-item collapsed">
                            <h2 class="accordion-header" id="price-head-2"> <button
                                    class="accordion-button collapsed">Монолитная плита</button></h2>
                            <div id="price-2" class="accordion-collapse collapse" style="display: none;;">
                                <div class="accordion-body">
                                    <div class="price-row-item"> <span class="price-col-item-name">Монолитная плита
                                            6×6</span> <span class="price-col-item-line"></span> <span
                                            class="price-col-item-value">от 285 000 руб</span></div>
                                    <div class="price-row-item"> <span class="price-col-item-name">Монолитная плита
                                            6×8</span> <span class="price-col-item-line"></span> <span
                                            class="price-col-item-value">от 356 000 руб</span></div>
                                    <div class="price-row-item"> <span class="price-col-item-name">Монолитная плита
                                            7×7</span> <span class="price-col-item-line"></span> <span
                                            class="price-col-item-value">от 356 000 руб</span></div>
                                    <div class="price-row-item"> <span class="price-col-item-name">Монолитная плита
                                            8×8</span> <span class="price-col-item-line"></span> <span
                                            class="price-col-item-value">от 417 000 руб</span></div>
                                    <div class="price-row-item"> <span class="price-col-item-name">Монолитная плита
                                            9×9</span> <span class="price-col-item-line"></span> <span
                                            class="price-col-item-value">от 477 000 руб</span></div>
                                    <div class="price-row-item"> <span class="price-col-item-name">Монолитная плита
                                            10×10</span> <span class="price-col-item-line"></span> <span
                                            class="price-col-item-value">от 559 000 руб</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="price-item">
                        <div class="accordion-item collapsed">
                            <h2 class="accordion-header" id="price-head-3"> <button
                                    class="accordion-button collapsed">УШП</button></h2>
                            <div id="price-3" class="accordion-collapse collapse" style="display: none;;">
                                <div class="accordion-body">
                                    <div class="price-row-item"> <span class="price-col-item-name">Фундамент
                                            6×6</span> <span class="price-col-item-line"></span> <span
                                            class="price-col-item-value">от 443 000 руб</span></div>
                                    <div class="price-row-item"> <span class="price-col-item-name">Фундамент
                                            6×8</span> <span class="price-col-item-line"></span> <span
                                            class="price-col-item-value">от 556 000 руб</span></div>
                                    <div class="price-row-item"> <span class="price-col-item-name">Фундамент
                                            7×7</span> <span class="price-col-item-line"></span> <span
                                            class="price-col-item-value">от 556 000 руб</span></div>
                                    <div class="price-row-item"> <span class="price-col-item-name">Фундамент
                                            8×8</span> <span class="price-col-item-line"></span> <span
                                            class="price-col-item-value">от 619 000 руб</span></div>
                                    <div class="price-row-item"> <span class="price-col-item-name">Фундамент
                                            9×9</span> <span class="price-col-item-line"></span> <span
                                            class="price-col-item-value">от 711 000 руб</span></div>
                                    <div class="price-row-item"> <span class="price-col-item-name">Фундамент
                                            10×10</span> <span class="price-col-item-line"></span> <span
                                            class="price-col-item-value">от 768 000 руб</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="price-form-wrap">
                    <form class="smeta-form" method="POST" action="javascript:void(0)">
                        <div class="form-group-socials">
                            <div class="form-group-title text-center">Укажите свою площадь дома<br>и получите расчет
                                стоимости<br>фундамента через 5 минут</div>
                            <div class="before-title text-center">Мы вышлем подборку<br>вам в мессенджер</div>
                            <div class="form-group"> <select name="fund_type" id="fund_type-price-form"
                                    class="form-control form-select">
                                    <option value="">Выберите тип фундамента</option>
                                    <option value="Ленточный фундамент">Ленточный фундамент</option>
                                    <option value="Свайно-винтовой фундамент">Свайно-винтовой фундамент</option>
                                    <option value="Монолитная плита">Монолитная плита</option>
                                </select></div>
                            <div class="form-group"> <input type="number" name="area" id="area-price-form"
                                    class="form-control" placeholder="Введите площадь дома"></div>
                            <div class="form-group">
                                <div class="text-center"><label class="form-label"><b>Куда выслать наш вариант
                                            сметы?</b></label></div>
                            </div>
                            <div class="form-group form-group-socials-labels"> <input type="radio"
                                    id="whatsapp-price-form" name="send_to" value="whatsapp"> <label
                                    class="form-group-social-label" for="whatsapp-price-form"> <noscript><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/icons/label-whatsapp.png" alt="Whatsapp"
                                            title="Whatsapp"></noscript><img class="lazyload"
                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                        data-src="<?php echo get_template_directory_uri(); ?>/assets/icons/label-whatsapp.png" alt="Whatsapp"
                                        title="Whatsapp"> <span class="form-group-social-label-text">Whatsapp</span>
                                </label> <input type="radio" id="viber-price-form" name="send_to" value="viber"> <label
                                    class="form-group-social-label" for="viber-price-form"> <noscript><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/icons/label-viber.png" alt="Viber"
                                            title="Viber"></noscript><img class="lazyload"
                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                        data-src="<?php echo get_template_directory_uri(); ?>/assets/icons/label-viber.png" alt="Viber"
                                        title="Viber"> <span class="form-group-social-label-text">Viber</span> </label>
                                <input type="radio" id="telegram-price-form" name="send_to" value="telegram"> <label
                                    class="form-group-social-label" for="telegram-price-form"> <noscript><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/icons/label-telegram.png" alt="Telegram"
                                            title="Telegram"></noscript><img class="lazyload"
                                        src='<?php echo get_template_directory_uri(); ?>/assets/icons/label-telegram.png'
                                        data-src="<?php echo get_template_directory_uri(); ?>/assets/icons/label-telegram.png" alt="Telegram"
                                        title="Telegram"> <span class="form-group-social-label-text">Telegram</span>
                                </label> <input type="radio" id="pphone-price-form" name="send_to" value="Телефон"
                                    checked>
                                <label class="form-group-social-label" for="pphone-price-form"> <noscript><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/icons/label-phone.png" alt="Телефон"
                                            title="Телефон"></noscript><img class="lazyload"
                                        src='<?php echo get_template_directory_uri(); ?>/assets/icons/label-phone.png'
                                        data-src="<?php echo get_template_directory_uri(); ?>/assets/icons/label-phone.png" alt="Телефон"
                                        title="Телефон"> <span class="form-group-social-label-text">Телефон</span>
                                </label>
                            </div>
                            <div class="form-group">
                                <div class="text-center"> <label class="form-label" for="phone-price-form">Введите
                                        телефон</label></div> <input type="tel" name="phone" id="phone-price-form"
                                    class="form-control" placeholder="+7" required>
                            </div>
                            <div class="form-group">
                                <div class="text-center"> <label class="form-label"
                                        for="your-name-phone-price-form">Введите имя</label></div> <input type="text"
                                    name="your-name" id="your-name-phone-price-form" class="form-control"
                                    placeholder="Введите имя">
                            </div>
                            <div class="form-group submit-group"> <button type="submit"
                                    class="button orange smeta-form-button">Получить подборку проектов</button>
                                <input type="hidden" name="form_id" value="fundament-form">
                            </div>
                            <div class="form-group privacy-group">Нажимая на кнопку вы соглашаетесь с условиями
                                <span onclick="window.open('privacy-policy/')">Политики
                                    конфиденциальности</span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <section id="service-portfolio">
        <div class="container">
            <div class="section-title text-center"><b>Посмотрите примеры объектов</b>, где<br>выполнялись работы по
                фундаменту</div>
            <div class="flex-row">
                <div class="project-item-wrapper">
                    <div class="project-item portfolio-item">
                        <div class="project-item-image"> <a
                                href="portfolio/dom-v-stile-haj-tek-123-kv-m/"><noscript><img width="416" height="250"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3-416x250.jpg"
                                        class="attachment-catalog-thumbnail size-catalog-thumbnail wp-post-image" alt=""
                                        loading="lazy" /></noscript><img width="416" height="250"
                                    src='<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3-416x250.jpg'
                                    data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3-416x250.jpg"
                                    class="lazyload attachment-catalog-thumbnail size-catalog-thumbnail wp-post-image"
                                    alt="" loading="lazy" /></a></div>
                        <div class="project-item-content">
                            <div class="project-item-title"><a href="portfolio/dom-v-stile-haj-tek-123-kv-m/">Дом в
                                    стиле
                                    хай-тек 123 кв.м</a></div>
                            <div class="portfolio-item-price single-price-box">
                                <div class="single-price-title">Стоимость <br>строительства от</div>
                                <div class="single-price-value"><span>5 990 100</span> руб</div>
                            </div>
                        </div> <a href="portfolio/dom-v-stile-haj-tek-123-kv-m/" class="project-item-btn"><span
                                class="orange-link">Посмотреть проект</span></a>
                    </div>
                </div>


            </div>
        </div>
    </section>


    <section id="service-steps">
        <style>
            #service-steps {
                background-image: url('<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/ss1.png');
                background-size: cover;
                background-position: center bottom;
            }

            .gflag-item-box {
                border: 1px solid #ccc;
                border-radius: 10px;
            }

            .gflag-item-icon {
                display: none;
            }

            .gflag-item-title {
                margin-top: 22px;
            }
        </style>

        <div class="container">
            <div class="section-title text-center"><b>Посмотрите на 8 этапов</b>, как будет<br>строиться ваш
                идеальный фундамент</div>
            <div class="single-top-tabs-content">
                <div id="service_step-0" class="single-tab-item">
                    <div class="flex-row pluses-row">
                        <div class="gflag-item-box vflag-item-box gflag-item-box-1 gflag-item-has-icon">
                            <div class="vflag-item-flag">01</div>
                            <div class="gflag-item"> <noscript><img src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/ss1.png"
                                        alt="Консультация и замер участка" title="Консультация и замер участка"
                                        class="gflag-item-icon"></noscript><img
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="superuploads/2021/07/ss1.png" alt="Консультация и замер участка"
                                    title="Консультация и замер участка" class="lazyload gflag-item-icon">
                                <div class="gflag-item-title">Консультация и замер участка</div>
                                <div class="gflag-item-text">Мастер приедет к вам на участок, проведет замеры и
                                    ответит на все вопросы</div> <a href="#modal"
                                    class="button orange vflag-item-button" data-modal="#call-modal">Вызвать
                                    мастера</a>
                            </div>
                        </div>
                        <div class="gflag-item-box vflag-item-box gflag-item-box-2 gflag-item-has-icon">
                            <div class="vflag-item-flag">02</div>
                            <div class="gflag-item"> <noscript><img src="superuploads/2021/07/ss3.png"
                                        alt="Геодезические работы" title="Геодезические работы"
                                        class="gflag-item-icon"></noscript><img
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="superuploads/2021/07/ss3.png" alt="Геодезические работы"
                                    title="Геодезические работы" class="lazyload gflag-item-icon">
                                <div class="gflag-item-title">Геодезические работы</div>
                                <div class="gflag-item-text">Строительные оси с проекта переносятся на участок.
                                    Измеряется перепад высот на участке</div>
                            </div>
                        </div>
                        <div class="gflag-item-box vflag-item-box gflag-item-box-3 gflag-item-has-icon">
                            <div class="vflag-item-flag">03</div>
                            <div class="gflag-item"> <noscript><img src="superuploads/2021/07/ss5.png"
                                        alt="Разметка фундамента" title="Разметка фундамента"
                                        class="gflag-item-icon"></noscript><img
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="superuploads/2021/07/ss5.png" alt="Разметка фундамента"
                                    title="Разметка фундамента" class="lazyload gflag-item-icon">
                                <div class="gflag-item-title">Разметка фундамента</div>
                                <div class="gflag-item-text">Разметка производится лазерным нивелиром, для точного
                                    расположения стен вашего дома</div>
                            </div>
                        </div>
                        <div class="gflag-item-box vflag-item-box gflag-item-box-4 gflag-item-has-icon">
                            <div class="vflag-item-flag">04</div>
                            <div class="gflag-item"> <noscript><img src="superuploads/2021/07/ss4.png"
                                        alt="Земляные работы спецтехникой" title="Земляные работы спецтехникой"
                                        class="gflag-item-icon"></noscript><img
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="superuploads/2021/07/ss4.png" alt="Земляные работы спецтехникой"
                                    title="Земляные работы спецтехникой" class="lazyload gflag-item-icon">
                                <div class="gflag-item-title">Земляные работы спецтехникой</div>
                                <div class="gflag-item-text">Котлован и траншеи будут идеально ровными и пригодными
                                    к заливке бетоном</div>
                            </div>
                        </div>
                        <div class="gflag-item-box vflag-item-box gflag-item-box-5 gflag-item-has-icon">
                            <div class="vflag-item-flag">05</div>
                            <div class="gflag-item"> <noscript><img src="superuploads/2021/07/ss5.png"
                                        alt="Монтаж опалубки" title="Монтаж опалубки"
                                        class="gflag-item-icon"></noscript><img
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="superuploads/2021/07/ss5.png" alt="Монтаж опалубки"
                                    title="Монтаж опалубки" class="lazyload gflag-item-icon">
                                <div class="gflag-item-title">Монтаж опалубки</div>
                                <div class="gflag-item-text">В зависимости от твердости грунта опалубка
                                    устанавливается для цоколя или на всю глубину фундамента</div>
                            </div>
                        </div>
                        <div class="gflag-item-box vflag-item-box gflag-item-box-6 gflag-item-has-icon">
                            <div class="vflag-item-flag">06</div>
                            <div class="gflag-item"> <noscript><img src="superuploads/2021/07/ss6.png"
                                        alt="Армирование каркаса" title="Армирование каркаса"
                                        class="gflag-item-icon"></noscript><img
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="superuploads/2021/07/ss6.png" alt="Армирование каркаса"
                                    title="Армирование каркаса" class="lazyload gflag-item-icon">
                                <div class="gflag-item-title">Армирование каркаса</div>
                                <div class="gflag-item-text">Армирование производится сеткой или решёткой с
                                    квадратными ячейками</div>
                            </div>
                        </div>
                        <div class="gflag-item-box vflag-item-box gflag-item-box-7 gflag-item-has-icon">
                            <div class="vflag-item-flag">07</div>
                            <div class="gflag-item"> <noscript><img src="superuploads/2021/07/ss2.png"
                                        alt="Прием бетонной смеси" title="Прием бетонной смеси"
                                        class="gflag-item-icon"></noscript><img
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="superuploads/2021/07/ss2.png" alt="Прием бетонной смеси"
                                    title="Прием бетонной смеси" class="lazyload gflag-item-icon">
                                <div class="gflag-item-title">Прием бетонной смеси</div>
                                <div class="gflag-item-text">Укладку бетонной смеси ведут параллельно с
                                    вибрированием бетона</div>
                            </div>
                        </div>
                        <div class="gflag-item-box vflag-item-box gflag-item-box-8 gflag-item-has-icon">
                            <div class="vflag-item-flag">08</div>
                            <div class="gflag-item"> <noscript><img src="superuploads/2021/08/sp12.png"
                                        alt="Окончательный расчет" title="Окончательный расчет"
                                        class="gflag-item-icon"></noscript><img
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="superuploads/2021/08/sp12.png" alt="Окончательный расчет"
                                    title="Окончательный расчет" class="lazyload gflag-item-icon">
                                <div class="gflag-item-title">Окончательный расчет</div>
                                <div class="gflag-item-text">После завершения всех работ подписываем акт о приемке
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="service_step-1" class="single-tab-item" style="display: none;">
                    <div class="flex-row pluses-row">
                        <div class="gflag-item-box vflag-item-box gflag-item-box-1 gflag-item-has-icon">
                            <div class="vflag-item-flag">01</div>
                            <div class="gflag-item"> <noscript><img src="superuploads/2021/07/ss1.png"
                                        alt="Расчет винтового фундамента" title="Расчет винтового фундамента"
                                        class="gflag-item-icon"></noscript><img
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="superuploads/2021/07/ss1.png" alt="Расчет винтового фундамента"
                                    title="Расчет винтового фундамента" class="lazyload gflag-item-icon">
                                <div class="gflag-item-title">Расчет винтового фундамента</div>
                                <div class="gflag-item-text">Мастер приедет к вам на участок, проведет замеры и
                                    ответит на все вопросы</div> <a href="#modal"
                                    class="button orange vflag-item-button" data-modal="#call-modal">Вызвать
                                    мастера</a>
                            </div>
                        </div>
                        <div class="gflag-item-box vflag-item-box gflag-item-box-2 gflag-item-has-icon">
                            <div class="vflag-item-flag">02</div>
                            <div class="gflag-item"> <noscript><img src="superuploads/2021/07/ss3.png" alt="Выбор свай"
                                        title="Выбор свай" class="gflag-item-icon"></noscript><img
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="superuploads/2021/07/ss3.png" alt="Выбор свай" title="Выбор свай"
                                    class="lazyload gflag-item-icon">
                                <div class="gflag-item-title">Выбор свай</div>
                                <div class="gflag-item-text">Залогом получения надежного основания под дом является
                                    правильный выбор сваи</div>
                            </div>
                        </div>
                        <div class="gflag-item-box vflag-item-box gflag-item-box-3 gflag-item-has-icon">
                            <div class="vflag-item-flag">03</div>
                            <div class="gflag-item"> <noscript><img src="superuploads/2021/07/ss5.png"
                                        alt="Нанесение разметки" title="Нанесение разметки"
                                        class="gflag-item-icon"></noscript><img
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="superuploads/2021/07/ss5.png" alt="Нанесение разметки"
                                    title="Нанесение разметки" class="lazyload gflag-item-icon">
                                <div class="gflag-item-title">Нанесение разметки</div>
                                <div class="gflag-item-text">В соответствии с проектом выполняется разметка участка
                                </div>
                            </div>
                        </div>
                        <div class="gflag-item-box vflag-item-box gflag-item-box-4 gflag-item-has-icon">
                            <div class="vflag-item-flag">04</div>
                            <div class="gflag-item"> <noscript><img src="superuploads/2021/07/ss4.png"
                                        alt="Закручивание свай" title="Закручивание свай"
                                        class="gflag-item-icon"></noscript><img
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="superuploads/2021/07/ss4.png" alt="Закручивание свай"
                                    title="Закручивание свай" class="lazyload gflag-item-icon">
                                <div class="gflag-item-title">Закручивание свай</div>
                                <div class="gflag-item-text">Винтовой фундамент привлекателен тем, что работу по
                                    закручиванию свай можно выполнить за несколько часов</div>
                            </div>
                        </div>
                        <div class="gflag-item-box vflag-item-box gflag-item-box-5 gflag-item-has-icon">
                            <div class="vflag-item-flag">05</div>
                            <div class="gflag-item"> <noscript><img src="superuploads/2021/07/ss5.png"
                                        alt="Выравнивание фундамента" title="Выравнивание фундамента"
                                        class="gflag-item-icon"></noscript><img
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="superuploads/2021/07/ss5.png" alt="Выравнивание фундамента"
                                    title="Выравнивание фундамента" class="lazyload gflag-item-icon">
                                <div class="gflag-item-title">Выравнивание фундамента</div>
                                <div class="gflag-item-text">Удаляем излишки при выравнивании свайного поля по
                                    уровню</div>
                            </div>
                        </div>
                        <div class="gflag-item-box vflag-item-box gflag-item-box-6 gflag-item-has-icon">
                            <div class="vflag-item-flag">06</div>
                            <div class="gflag-item"> <noscript><img src="superuploads/2021/07/ss6.png"
                                        alt="Бетонирование" title="Бетонирование"
                                        class="gflag-item-icon"></noscript><img
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="superuploads/2021/07/ss6.png" alt="Бетонирование" title="Бетонирование"
                                    class="lazyload gflag-item-icon">
                                <div class="gflag-item-title">Бетонирование</div>
                                <div class="gflag-item-text">Чтобы обеспечить защиту внутренних стенок, в полость
                                    сваи заливается бетон. Сверху монтируется оголовок сваи</div>
                            </div>
                        </div>
                        <div class="gflag-item-box vflag-item-box gflag-item-box-7 gflag-item-has-icon">
                            <div class="vflag-item-flag">07</div>
                            <div class="gflag-item"> <noscript><img src="superuploads/2021/07/ss2.png" alt="Ростверк"
                                        title="Ростверк" class="gflag-item-icon"></noscript><img
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="superuploads/2021/07/ss2.png" alt="Ростверк" title="Ростверк"
                                    class="lazyload gflag-item-icon">
                                <div class="gflag-item-title">Ростверк</div>
                                <div class="gflag-item-text">Ростверк крепится на оголовок сваи. В случае
                                    обустройства бетонного ростверка оголовок не требуется</div>
                            </div>
                        </div>
                        <div class="gflag-item-box vflag-item-box gflag-item-box-8 gflag-item-has-icon">
                            <div class="vflag-item-flag">08</div>
                            <div class="gflag-item"> <noscript><img src="superuploads/2021/08/sp12.png"
                                        alt="Уход за свайным фундаментом" title="Уход за свайным фундаментом"
                                        class="gflag-item-icon"></noscript><img
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="superuploads/2021/08/sp12.png" alt="Уход за свайным фундаментом"
                                    title="Уход за свайным фундаментом" class="lazyload gflag-item-icon">
                                <div class="gflag-item-title">Уход за свайным фундаментом</div>
                                <div class="gflag-item-text">После установки винтового фундамента можно сразу
                                    приступать к строительству дома</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="service_step-2" class="single-tab-item" style="display: none;">
                    <div class="flex-row pluses-row">
                        <div class="gflag-item-box vflag-item-box gflag-item-box-1 gflag-item-has-icon">
                            <div class="vflag-item-flag">01</div>
                            <div class="gflag-item"> <noscript><img src="superuploads/2021/07/ss1.png"
                                        alt="Консультация и замер участка" title="Консультация и замер участка"
                                        class="gflag-item-icon"></noscript><img
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="superuploads/2021/07/ss1.png" alt="Консультация и замер участка"
                                    title="Консультация и замер участка" class="lazyload gflag-item-icon">
                                <div class="gflag-item-title">Консультация и замер участка</div>
                                <div class="gflag-item-text">Мастер приедет к вам на участок, проведет замеры и
                                    ответит на все вопросы</div> <a href="#modal"
                                    class="button orange vflag-item-button" data-modal="#call-modal">Вызвать
                                    мастера</a>
                            </div>
                        </div>
                        <div class="gflag-item-box vflag-item-box gflag-item-box-2 gflag-item-has-icon">
                            <div class="vflag-item-flag">02</div>
                            <div class="gflag-item"> <noscript><img src="superuploads/2021/07/ss3.png"
                                        alt="Геодезические работы" title="Геодезические работы"
                                        class="gflag-item-icon"></noscript><img
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="superuploads/2021/07/ss3.png" alt="Геодезические работы"
                                    title="Геодезические работы" class="lazyload gflag-item-icon">
                                <div class="gflag-item-title">Геодезические работы</div>
                                <div class="gflag-item-text">Строительные оси с проекта переносятся на участок.
                                    Измеряется перепад высот на участке</div>
                            </div>
                        </div>
                        <div class="gflag-item-box vflag-item-box gflag-item-box-3 gflag-item-has-icon">
                            <div class="vflag-item-flag">03</div>
                            <div class="gflag-item"> <noscript><img src="superuploads/2021/07/ss5.png"
                                        alt="Разметка фундамента" title="Разметка фундамента"
                                        class="gflag-item-icon"></noscript><img
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="superuploads/2021/07/ss5.png" alt="Разметка фундамента"
                                    title="Разметка фундамента" class="lazyload gflag-item-icon">
                                <div class="gflag-item-title">Разметка фундамента</div>
                                <div class="gflag-item-text">Разметка производится лазерным нивелиром, для точного
                                    расположения стен вашего дома</div>
                            </div>
                        </div>
                        <div class="gflag-item-box vflag-item-box gflag-item-box-4 gflag-item-has-icon">
                            <div class="vflag-item-flag">04</div>
                            <div class="gflag-item"> <noscript><img src="superuploads/2021/07/ss4.png"
                                        alt="Земляные работы спецтехникой" title="Земляные работы спецтехникой"
                                        class="gflag-item-icon"></noscript><img
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="superuploads/2021/07/ss4.png" alt="Земляные работы спецтехникой"
                                    title="Земляные работы спецтехникой" class="lazyload gflag-item-icon">
                                <div class="gflag-item-title">Земляные работы спецтехникой</div>
                                <div class="gflag-item-text">Котлован и траншеи будут идеально ровными и пригодными
                                    к заливке бетоном</div>
                            </div>
                        </div>
                        <div class="gflag-item-box vflag-item-box gflag-item-box-5 gflag-item-has-icon">
                            <div class="vflag-item-flag">05</div>
                            <div class="gflag-item"> <noscript><img src="superuploads/2021/07/ss3.png"
                                        alt="Укладка основания под плиту" title="Укладка основания под плиту"
                                        class="gflag-item-icon"></noscript><img
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="superuploads/2021/07/ss3.png" alt="Укладка основания под плиту"
                                    title="Укладка основания под плиту" class="lazyload gflag-item-icon">
                                <div class="gflag-item-title">Укладка основания под плиту</div>
                                <div class="gflag-item-text">Основанием служит пирог из нескольких слоев</div>
                            </div>
                        </div>
                        <div class="gflag-item-box vflag-item-box gflag-item-box-6 gflag-item-has-icon">
                            <div class="vflag-item-flag">06</div>
                            <div class="gflag-item"> <noscript><img src="superuploads/2021/07/ss5.png"
                                        alt="Монтаж опалубки и армирование" title="Монтаж опалубки и армирование"
                                        class="gflag-item-icon"></noscript><img
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="superuploads/2021/07/ss5.png" alt="Монтаж опалубки и армирование"
                                    title="Монтаж опалубки и армирование" class="lazyload gflag-item-icon">
                                <div class="gflag-item-title">Монтаж опалубки и армирование</div>
                                <div class="gflag-item-text">Опалубка для монолита может быть двух видов:
                                    съемная;
                                    несъемная.</div>
                            </div>
                        </div>
                        <div class="gflag-item-box vflag-item-box gflag-item-box-7 gflag-item-has-icon">
                            <div class="vflag-item-flag">07</div>
                            <div class="gflag-item"> <noscript><img src="superuploads/2021/07/ss6.png"
                                        alt="Заливка бетонной смеси" title="Заливка бетонной смеси"
                                        class="gflag-item-icon"></noscript><img
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="superuploads/2021/07/ss6.png" alt="Заливка бетонной смеси"
                                    title="Заливка бетонной смеси" class="lazyload gflag-item-icon">
                                <div class="gflag-item-title">Заливка бетонной смеси</div>
                                <div class="gflag-item-text">Укладку бетонной смеси ведут параллельно с
                                    вибрированием бетона</div>
                            </div>
                        </div>
                        <div class="gflag-item-box vflag-item-box gflag-item-box-8 gflag-item-has-icon">
                            <div class="vflag-item-flag">08</div>
                            <div class="gflag-item"> <noscript><img src="superuploads/2021/08/sp12.png"
                                        alt="Уход за бетоном, распалубочные работы"
                                        title="Уход за бетоном, распалубочные работы"
                                        class="gflag-item-icon"></noscript><img
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="superuploads/2021/08/sp12.png" alt="Уход за бетоном, распалубочные работы"
                                    title="Уход за бетоном, распалубочные работы" class="lazyload gflag-item-icon">
                                <div class="gflag-item-title">Уход за бетоном, распалубочные работы</div>
                                <div class="gflag-item-text">Накрывание залитой поверхности полиэтиленом для
                                    предотвращения испарения жидкости</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php
    include_once('blocks/specialists-slider.php');
    ?>


    <?php
    include_once('blocks/excursion.php');
    ?>

    <?php
    include_once('blocks/reviews-slider.php');
    ?>


    <?php
    include_once('blocks/reviews-slider.php');
    ?>


    <?php
    include_once('blocks/reviews-slider.php');
    ?>

    <?php
    include_once 'blocks/faq-list.php';
    ?>

    <?php
    include_once('blocks/contacts.php');
    ?>

</main>


<?php get_footer(); ?>