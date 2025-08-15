<?php
/*
Template Name: home
*/
?>

<?php
get_header();
?>

<?php
    include_once 'modal-windows/modal-form-with-contacts.php';
?>


<!-- custom-modal-open-button -->

<div class="front-page-header header-bg"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/home_bg.jpg');">

    <style>
        .front-page-header.header-bg {
            background-image: url('<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/home_bg.jpg');
        }
    </style>

    <?php
        include_once 'blocks/header.php';
    ?>

    
    
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
                    <form class="quiz-form" id="quiz-form-doma"> <input type="hidden" name="action" value="send_quiz">
                        <input type="hidden" name="quiz_type" value="doma_data">
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
                                            class="lazyload quiz-label-item-image" alt="Дом из оцилиндрованного бревна"
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
                                                        alt="Whatsapp" title="Whatsapp"></noscript><img class="lazyload"
                                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                                    data-src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-whatsapp.png"
                                                    alt="Whatsapp" title="Whatsapp"> <span
                                                    class="form-group-social-label-text">Whatsapp</span> </label>
                                            <input type="radio" id="viber-quiz-doma" name="send_to" value="viber">
                                            <label class="form-group-social-label" for="viber-quiz-doma">
                                                <noscript><img
                                                        src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-viber.png"
                                                        alt="Viber" title="Viber"></noscript><img class="lazyload"
                                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                                    data-src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-viber.png"
                                                    alt="Viber" title="Viber"> <span
                                                    class="form-group-social-label-text">Viber</span> </label>
                                            <input type="radio" id="telegram-quiz-doma" name="send_to" value="telegram">
                                            <label class="form-group-social-label" for="telegram-quiz-doma">
                                                <noscript><img
                                                        src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-telegram.png"
                                                        alt="Telegram" title="Telegram"></noscript><img class="lazyload"
                                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                                    data-src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-telegram.png"
                                                    alt="Telegram" title="Telegram"> <span
                                                    class="form-group-social-label-text">Telegram</span> </label>
                                            <input type="radio" id="pphone-quiz-doma" name="send_to" value="Телефон"
                                                checked> <label class="form-group-social-label" for="pphone-quiz-doma">
                                                <noscript><img
                                                        src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-phone.png"
                                                        alt="Телефон" title="Телефон"></noscript><img class="lazyload"
                                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                                    data-src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-phone.png"
                                                    alt="Телефон" title="Телефон"> <span
                                                    class="form-group-social-label-text">Телефон</span> </label>
                                        </div>
                                        <div class="form-group"> <input type="text" name="your-name"
                                                id="your-name-quiz-doma" class="form-control" placeholder="Введите имя">
                                        </div>
                                        <div class="form-group">
                                            <div class="text-center"> <label class="form-label"
                                                    for="phone-quiz-doma">Введите телефон</label></div> <input
                                                type="tel" name="phone" id="phone-quiz-doma" class="form-control"
                                                placeholder="+7">
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
                            <div id="quiz-doma-step-7" class="quiz-step-item quiz-step-item-thanks" data-step="8">
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
                                                id="excursion-date-quiz-doma" class="form-control" min="2025-07-08"
                                                value="2025-07-08">
                                        </div>
                                        <div class="form-group">
                                            <div class="text-center"><label for="excursion-phone-quiz-doma">Укажите
                                                    телефон</label></div> <input type="tel2" name="excursion-phone"
                                                id="excursion-phone-quiz-doma" class="form-control">
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
                            <hr> <input type="text" name="filter-area[max]" class="pfilter__input" id="filter-area-max"
                                value="689">
                        </div>
                        <div id="area-slider" class="slider-item" data-target="#filter-area" data-min="9" data-max="689"
                            data-value-min="9" data-value-max="689" data-step="1"></div>
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
                        <div class="service-item-link"> <a href="/karkasnye-doma/" class="button orange">Посмотреть
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
                        <div class="service-item-link"> <a href="/doma-iz-blokov/" class="button orange">Посмотреть
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
                        <div class="service-item-link"> <a href="/doma-iz-brevna/" class="button orange">Посмотреть
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
                        <div class="service-item-link"> <a href="/doma-iz-kirpicha/" class="button orange">Посмотреть
                                проекты</a></div>
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
            <div class="section-title text-center">Вы можете выбрать один из 700+ готовых решений или <a href="#modal"
                    data-modal="#smeta-messenger">заказать индивидуальный проект</a></div>
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
                        <svg xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 17.414 3.293 8.707l1.414-1.414L12 14.586l7.293-7.293 1.414 1.414L12 17.414z" />
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

                if ($myposts) {
                    foreach ($myposts as $post) {
                        setup_postdata($post);
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
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="7px" height="7px">
                                                        <path fill-rule="evenodd" fill="rgb(116, 187, 22)"
                                                            d="M3.500,0.000 C5.433,0.000 7.000,1.567 7.000,3.500 C7.000,5.433 5.433,7.000 3.500,7.000 C1.567,7.000 0.000,5.433 0.000,3.500 C0.000,1.567 1.567,0.000 3.500,0.000 Z" />
                                                    </svg>Тип дома:</span><b>Комбинированный</b></li>
                                            <li class="project-item-feature"><span><svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="7px" height="7px">
                                                        <path fill-rule="evenodd" fill="rgb(116, 187, 22)"
                                                            d="M3.500,0.000 C5.433,0.000 7.000,1.567 7.000,3.500 C7.000,5.433 5.433,7.000 3.500,7.000 C1.567,7.000 0.000,5.433 0.000,3.500 C0.000,1.567 1.567,0.000 3.500,0.000 Z" />
                                                    </svg>Срок строительства:</span><b>3 месяца</b></li>
                                        </ul>
                                    </div>
                                    <div class="project-item-price single-price-box">
                                        <div class="single-price-value">
                                            Стоимость&nbsp;от<br><span>5&nbsp;850&nbsp;000</span>&nbsp;руб</div>
                                    </div>
                                </div> <a href="/projectsbaderim/" class="project-item-btn"><span class="orange-link">Посмотреть
                                        проект</span></a>
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
                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/map-default.png">
                    </div>
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
                                                class="attachment-large size-large wp-post-image" alt="" loading="lazy"
                                                srcset="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3-1024x768.jpg 1024w, <?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3-300x225.jpg 300w, <?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3-768x576.jpg 768w, <?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3.jpg 1365w"
                                                sizes="(max-width: 1024px) 100vw, 1024px" /></noscript><img width="1024"
                                            height="768"
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%201024%20768%22%3E%3C/svg%3E'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3-1024x768.jpg"
                                            class="lazyload attachment-large size-large wp-post-image" alt=""
                                            loading="lazy"
                                            data-srcset="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3-1024x768.jpg 1024w, <?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3-300x225.jpg 300w, <?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3-768x576.jpg 768w, <?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3.jpg 1365w"
                                            data-sizes="(max-width: 1024px) 100vw, 1024px" /> </a> <a
                                        href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3.jpg"
                                        class="portfolio-slide-secondary-image" data-fancybox="gallery-1657">
                                        <noscript>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3-300x225.jpg"
                                                alt="Дом в стиле хай-тек 123 кв.м"
                                                title="Дом в стиле хай-тек 123 кв.м"></noscript><img class="lazyload"
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3-300x225.jpg"
                                            alt="Дом в стиле хай-тек 123 кв.м" title="Дом в стиле хай-тек 123 кв.м">
                                    </a> <a
                                        href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/cf60203b318d3e33204bac4ea30075da-3.jpg"
                                        class="portfolio-slide-secondary-image" data-fancybox="gallery-1657">
                                        <noscript><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/cf60203b318d3e33204bac4ea30075da-3-300x225.jpg"
                                                alt="Дом в стиле хай-тек 123 кв.м"
                                                title="Дом в стиле хай-тек 123 кв.м"></noscript><img class="lazyload"
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/cf60203b318d3e33204bac4ea30075da-3-300x225.jpg"
                                            alt="Дом в стиле хай-тек 123 кв.м" title="Дом в стиле хай-тек 123 кв.м">
                                    </a> <a
                                        href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/16fed8ce85995a5d6ba43a1bc276003c-3.jpg"
                                        class="portfolio-slide-secondary-image" data-fancybox="gallery-1657">
                                        <noscript><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/16fed8ce85995a5d6ba43a1bc276003c-3-300x225.jpg"
                                                alt="Дом в стиле хай-тек 123 кв.м"
                                                title="Дом в стиле хай-тек 123 кв.м"></noscript><img class="lazyload"
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/16fed8ce85995a5d6ba43a1bc276003c-3-300x225.jpg"
                                            alt="Дом в стиле хай-тек 123 кв.м" title="Дом в стиле хай-тек 123 кв.м">
                                    </a> <a
                                        href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/fd3e54868a363e8164c5fbd8fa26e5be-3.jpg"
                                        class="portfolio-slide-secondary-image" data-fancybox="gallery-1657">
                                        <noscript><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/fd3e54868a363e8164c5fbd8fa26e5be-3-300x225.jpg"
                                                alt="Дом в стиле хай-тек 123 кв.м"
                                                title="Дом в стиле хай-тек 123 кв.м"></noscript><img class="lazyload"
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
                                    <div id="second-22" class="single-tab-item flex-tab-item portfolio-slide-review">
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
                                                class="attachment-large size-large wp-post-image" alt="" loading="lazy"
                                                srcset="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/8dfca031a360ac65ce357837da3f5997.jpg 825w, <?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/8dfca031a360ac65ce357837da3f5997-300x225.jpg 300w, <?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/8dfca031a360ac65ce357837da3f5997-768x575.jpg 768w"
                                                sizes="(max-width: 825px) 100vw, 825px" /></noscript><img width="825"
                                            height="618"
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20825%20618%22%3E%3C/svg%3E'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/8dfca031a360ac65ce357837da3f5997.jpg"
                                            class="lazyload attachment-large size-large wp-post-image" alt=""
                                            loading="lazy"
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
                                    <div id="second-22" class="single-tab-item flex-tab-item portfolio-slide-review">
                                        <div class="portfolio-slide-works-title" style="width: 100%;">Отзыв
                                            заказчика:</div>
                                        <div class="single-portfolio-review-wrap">
                                            <div class="single-portfolio-review-author"> <noscript><img
                                                        src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/otzyv-21.jpg"
                                                        alt="Михаил Андреевич" title="Михаил Андреевич"></noscript><img
                                                    class="lazyload"
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
                                                class="attachment-large size-large wp-post-image" alt="" loading="lazy"
                                                srcset="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/ff3873297baf4c9e201a694a089ee67a-1024x682.png 1024w, <?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/ff3873297baf4c9e201a694a089ee67a-300x200.png 300w, <?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/ff3873297baf4c9e201a694a089ee67a-768x512.png 768w, <?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/ff3873297baf4c9e201a694a089ee67a.png 1280w"
                                                sizes="(max-width: 1024px) 100vw, 1024px" /></noscript><img width="1024"
                                            height="682"
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%201024%20682%22%3E%3C/svg%3E'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/ff3873297baf4c9e201a694a089ee67a-1024x682.png"
                                            class="lazyload attachment-large size-large wp-post-image" alt=""
                                            loading="lazy"
                                            data-srcset="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/ff3873297baf4c9e201a694a089ee67a-1024x682.png 1024w, <?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/ff3873297baf4c9e201a694a089ee67a-300x200.png 300w, <?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/ff3873297baf4c9e201a694a089ee67a-768x512.png 768w, <?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/ff3873297baf4c9e201a694a089ee67a.png 1280w"
                                            data-sizes="(max-width: 1024px) 100vw, 1024px" /> </a> <a
                                        href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/ff3873297baf4c9e201a694a089ee67a.png"
                                        class="portfolio-slide-secondary-image" data-fancybox="gallery-1271">
                                        <noscript><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/ff3873297baf4c9e201a694a089ee67a-300x200.png"
                                                alt="Дом из теплоблоков 112 кв.м."
                                                title="Дом из теплоблоков 112 кв.м."></noscript><img class="lazyload"
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/ff3873297baf4c9e201a694a089ee67a-300x200.png"
                                            alt="Дом из теплоблоков 112 кв.м." title="Дом из теплоблоков 112 кв.м.">
                                    </a> <a
                                        href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/144c52e442b55fa11e71223f08b467a1.png"
                                        class="portfolio-slide-secondary-image" data-fancybox="gallery-1271">
                                        <noscript><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/144c52e442b55fa11e71223f08b467a1-300x200.png"
                                                alt="Дом из теплоблоков 112 кв.м."
                                                title="Дом из теплоблоков 112 кв.м."></noscript><img class="lazyload"
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/144c52e442b55fa11e71223f08b467a1-300x200.png"
                                            alt="Дом из теплоблоков 112 кв.м." title="Дом из теплоблоков 112 кв.м.">
                                    </a> <a
                                        href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/95aa2e7f0c7f0be17b5837111e751274.png"
                                        class="portfolio-slide-secondary-image" data-fancybox="gallery-1271">
                                        <noscript><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/95aa2e7f0c7f0be17b5837111e751274-300x200.png"
                                                alt="Дом из теплоблоков 112 кв.м."
                                                title="Дом из теплоблоков 112 кв.м."></noscript><img class="lazyload"
                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/95aa2e7f0c7f0be17b5837111e751274-300x200.png"
                                            alt="Дом из теплоблоков 112 кв.м." title="Дом из теплоблоков 112 кв.м.">
                                    </a> <a
                                        href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/2a24b85e04aa7b9036415694b2383285.png"
                                        class="portfolio-slide-secondary-image" data-fancybox="gallery-1271">
                                        <noscript><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/2a24b85e04aa7b9036415694b2383285-300x200.png"
                                                alt="Дом из теплоблоков 112 кв.м."
                                                title="Дом из теплоблоков 112 кв.м."></noscript><img class="lazyload"
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
                                    <div id="second-22" class="single-tab-item flex-tab-item portfolio-slide-review">
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

    
    

    <?php
    include_once 'blocks/excursion.php';
    ?>

    <?php
    include_once 'blocks/reviews-slider.php';
    ?>

    <?php
    include_once 'blocks/directors-word.php';
    ?>

    <?php
    include_once 'blocks/specialists-slider.php';
    ?>

    <?php
    include_once 'blocks/faq-list.php';
    ?>

    <?php
    include_once 'blocks/smeta-form.php';
    ?>

    <?php
    include_once 'blocks/contacts.php';
    ?>

    

</main>

<?php get_footer(); ?>