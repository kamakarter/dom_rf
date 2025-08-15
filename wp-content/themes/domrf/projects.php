<?php
/*
Template Name: projects
*/
?>

<?php get_header(); ?>

<?php
    include_once 'modal-windows/modal-form-with-contacts.php';
?>

<div class="lazyload category-header category-catalog-header"
    data-bg="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/06/category-bg.png"
    style="background-image: url(data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20500%20300%22%3E%3C/svg%3E);">
    
    <?php
        include_once 'blocks/header.php';
    ?>

    <div class="top-preroll">
        <div class="container">
            <div class="flex-row">
                <div class="top-preroll-wrap">
                    <div class="breadcrumbs-real hidden-print"><span><span><a href="lugansk/">ОдессаСтрой</a> <span
                                    class="separator">|</span> <span class="breadcrumb_last"
                                    aria-current="page">Проекты</span></span></span></div>
                    <h1 class="breadcrumbs catalog">Проекты домов <br>в Одессе</h1>
                    <div class="imitation-h1 categoryH1"><b>Проекты частных домов</b> для строительства в Одессе
                    </div>
                    <div class="after-title">По индивидуальному или готовому проекту</div>
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
    <section id="category-wrapper">
        <div class="container">
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
            <div class="flex-row">
                <div class="catalog-sidebar">
                    <div class="sidebar-filter-overlay"></div>
                    <div class="sidebar-filter-wrapper"> <a href="#" class="mobile-filter-close">&times;</a>
                        <form id="sidebar-filter" class="sidebar-filter" method="GET" action="/"> <input type="hidden"
                                name="s" value="filter">
                            <div class="sidebar-title-box">
                                <h2>Поиск проектов <br>по ценам и характеристикам</h2>
                            </div>
                            <div class="form-group filter-group select-group">
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
                            <div class="form-group filter-group slider-group"> <input type="hidden"
                                    name="filter-price[min]" id="filter-price-min" value="0.34"> <input type="hidden"
                                    name="filter-price[max]" id="filter-price-max" value="12.95">
                                <div class="filter-title">Стоимость строительства, млн.руб</div>
                                <div id="price-slider" class="slider-item" data-target="#filter-price" data-min="0.34"
                                    data-max="12.95" data-value-min="0.34" data-value-max="12.95" data-step="0.01">
                                </div>
                                <div class="slider-comment"> <span>0.34</span> <span>12.95</span></div>
                            </div>
                            <div class="form-group filter-group slider-group"> <input type="hidden"
                                    name="filter-area[min]" id="filter-area-min" value="9"> <input type="hidden"
                                    name="filter-area[max]" id="filter-area-max" value="689">
                                <div class="filter-title">Площадь, кв.м</div>
                                <div id="area-slider" class="slider-item" data-target="#filter-area" data-min="9"
                                    data-max="689" data-value-min="9" data-value-max="689" data-step="1"></div>
                                <div class="slider-comment"> <span>9</span> <span>689</span></div>
                            </div>
                            <div class="form-group filter-group gabarity-group filter-group-default-hide"
                                style="display: none;">
                                <div class="filter-title">Габариты:</div>
                                <div class="inputs-columns"> <label class="input-column"> <span>Длина:</span> <input
                                            type="number" name="length" class="form-control" value=""> </label>
                                    <label class="input-column"> <span>Ширина:</span> <input type="number" name="width"
                                            class="form-control" value=""> </label>
                                </div>
                            </div>
                            <div class="form-group filter-group checkbox-group ">
                                <div class="filter-title">Этажность</div>
                                <div class="inputs-columns"> <label class="input-column"> <input type="checkbox"
                                            name="tags[]" value="odnoetajnye"> <span>Одноэтажные</span> </label>
                                    <label class="input-column"> <input type="checkbox" name="tags[]"
                                            value="dvuhetajnye"> <span>Двухэтажные</span> </label> <label
                                        class="input-column"> <input type="checkbox" name="tags[]" value="trehetajnye">
                                        <span>Трехэтажные</span> </label> <label class="input-column"> <input
                                            type="checkbox" name="tags[]" value="s-mansardoi"> <span>С мансардой</span>
                                    </label> <label class="input-column"> <input type="checkbox" name="tags[]"
                                            value="s-cokolnym-etajom"> <span>С цокольным этажом</span> </label>
                                </div>
                            </div>
                            <div class="form-group filter-group checkbox-line-group">
                                <div class="filter-title">Спален:</div>
                                <div class="checkbox-list"> <label> <input type="checkbox" name="bedrooms[]" value="1">
                                        <span>1</span> </label> <label> <input type="checkbox" name="bedrooms[]"
                                            value="2"> <span>2</span> </label> <label> <input type="checkbox"
                                            name="bedrooms[]" value="3"> <span>3</span> </label>
                                    <label> <input type="checkbox" name="bedrooms[]" value="4"> <span>4</span>
                                    </label> <label> <input type="checkbox" name="bedrooms[]" value="5">
                                        <span>5</span> </label> <label> <input type="checkbox" name="bedrooms[]"
                                            value="6"> <span>6</span> </label> <label> <input type="checkbox"
                                            name="bedrooms[]" value="7"> <span>7</span> </label>
                                </div>
                            </div>
                            <div class="form-group filter-group checkbox-group ">
                                <div class="filter-title">Особенности</div>
                                <div class="inputs-columns"> <label class="input-column"> <input type="checkbox"
                                            name="tags[]" value="so-vtorym-svetom"> <span>Со вторым светом</span>
                                    </label> <label class="input-column"> <input type="checkbox" name="tags[]"
                                            value="s-erkerom"> <span>С эркером</span> </label> <label
                                        class="input-column"> <input type="checkbox" name="tags[]" value="s-terrasoi">
                                        <span>С террасой</span> </label> <label class="input-column"> <input
                                            type="checkbox" name="tags[]" value="s-saunoi">
                                        <span>С сауной</span> </label> <label class="input-column"> <input
                                            type="checkbox" name="tags[]" value="s-podvalom"> <span>С
                                            подвалом</span> </label> <label class="input-column"> <input type="checkbox"
                                            name="tags[]" value="s-panoramnymi-oknami"> <span>С
                                            панорамными окнами</span> </label> <label class="input-column"> <input
                                            type="checkbox" name="tags[]" value="s-kotelnoi"> <span>С
                                            котельной</span> </label> <label class="input-column"> <input
                                            type="checkbox" name="tags[]" value="s-garajom"> <span>С гаражом</span>
                                    </label> <label class="input-column"> <input type="checkbox" name="tags[]"
                                            value="s-verandoi"> <span>С верандой</span> </label> <label
                                        class="input-column"> <input type="checkbox" name="tags[]" value="s-basseinom">
                                        <span>С бассейном</span> </label> <label class="input-column"> <input
                                            type="checkbox" name="tags[]" value="s-balkonom"> <span>С балконом</span>
                                    </label></div>
                            </div>
                            <div class="form-group filter-group checkbox-group filter-group-default-hide"
                                style="display: none;">
                                <div class="filter-title">Стили</div>
                                <div class="inputs-columns"> <label class="input-column"> <input type="checkbox"
                                            name="tags[]" value="finskii"> <span>Финский</span> </label> <label
                                        class="input-column"> <input type="checkbox" name="tags[]" value="fahverk">
                                        <span>Фахверк</span> </label> <label class="input-column"> <input
                                            type="checkbox" name="tags[]" value="shale"> <span>Шале</span> </label>
                                    <label class="input-column"> <input type="checkbox" name="tags[]"
                                            value="sovremennyi"> <span>Современный</span> </label> <label
                                        class="input-column"> <input type="checkbox" name="tags[]" value="hai-tek">
                                        <span>Хай-тек</span> </label> <label class="input-column"> <input
                                            type="checkbox" name="tags[]" value="kanadskii"> <span>Канадский</span>
                                    </label> <label class="input-column"> <input type="checkbox" name="tags[]"
                                            value="amerikanskii"> <span>Американский</span> </label> <label
                                        class="input-column"> <input type="checkbox" name="tags[]"
                                            value="skandinavskii"> <span>Скандинавский</span> </label> <label
                                        class="input-column"> <input type="checkbox" name="tags[]" value="barnhaus">
                                        <span>Барнхаус</span> </label> <label class="input-column"> <input
                                            type="checkbox" name="tags[]" value="nemeckii"> <span>Немецкий</span>
                                    </label> <label class="input-column"> <input type="checkbox" name="tags[]"
                                            value="angliiskii"> <span>Английский</span> </label> <label
                                        class="input-column"> <input type="checkbox" name="tags[]" value="loft">
                                        <span>Лофт</span> </label> <label class="input-column"> <input type="checkbox"
                                            name="tags[]" value="russkii"> <span>Русский</span>
                                    </label> <label class="input-column"> <input type="checkbox" name="tags[]"
                                            value="evropeiskii"> <span>Европейский</span> </label> <label
                                        class="input-column"> <input type="checkbox" name="tags[]" value="minimalizm">
                                        <span>Минимализм</span> </label> <label class="input-column"> <input
                                            type="checkbox" name="tags[]" value="alpiiskii"> <span>Альпийский</span>
                                    </label> <label class="input-column"> <input type="checkbox" name="tags[]"
                                            value="klassicheskii"> <span>Классический</span> </label> <label
                                        class="input-column"> <input type="checkbox" name="tags[]" value="provans">
                                        <span>Прованс</span> </label> <label class="input-column"> <input
                                            type="checkbox" name="tags[]" value="norvejskii">
                                        <span>Норвежский</span> </label> <label class="input-column"> <input
                                            type="checkbox" name="tags[]" value="stil-raita"> <span>Стиль
                                            Райта</span> </label> <label class="input-column"> <input type="checkbox"
                                            name="tags[]" value="avstriiskii">
                                        <span>Австрийский</span> </label> <label class="input-column"> <input
                                            type="checkbox" name="tags[]" value="shalash-a-frame"> <span>Шалаш
                                            (A-Frame)</span> </label>
                                </div>
                            </div>
                            <div class="form-group filter-group checkbox-group filter-group-default-hide"
                                style="display: none;">
                                <div class="filter-title">Вид постройки</div>
                                <div class="inputs-columns"> <label class="input-column"> <input type="checkbox"
                                            name="tags[]" value="kottedj"> <span>Коттедж</span> </label> <label
                                        class="input-column"> <input type="checkbox" name="tags[]" value="taunhaus">
                                        <span>Таунхаус</span> </label> <label class="input-column"> <input
                                            type="checkbox" name="tags[]" value="dom-banya"> <span>Дом-баня</span>
                                    </label> <label class="input-column"> <input type="checkbox" name="tags[]"
                                            value="dachnyi"> <span>Дачный</span> </label> <label class="input-column">
                                        <input type="checkbox" name="tags[]" value="gostevoi">
                                        <span>Гостевой</span> </label> <label class="input-column"> <input
                                            type="checkbox" name="tags[]" value="osobnyak"> <span>Особняк</span>
                                    </label></div>
                            </div>
                            <div class="form-group filter-group checkbox-group filter-group-default-hide"
                                style="display: none;">
                                <div class="filter-title">Тип крыши</div>
                                <div class="inputs-columns"> <label class="input-column"> <input type="checkbox"
                                            name="tags[]" value="ekspluatiruemaya"> <span>Эксплуатируемая</span>
                                    </label> <label class="input-column"> <input type="checkbox" name="tags[]"
                                            value="chetyrehskatnaya"> <span>Четырехскатная</span> </label> <label
                                        class="input-column"> <input type="checkbox" name="tags[]" value="ploskaya">
                                        <span>Плоская</span> </label> <label class="input-column"> <input
                                            type="checkbox" name="tags[]" value="odnoskatnaya">
                                        <span>Односкатная</span> </label> <label class="input-column"> <input
                                            type="checkbox" name="tags[]" value="lomanaya"> <span>Ломаная</span>
                                    </label> <label class="input-column"> <input type="checkbox" name="tags[]"
                                            value="dvuskatnaya"> <span>Двускатная</span> </label></div>
                            </div>
                            <div class="form-group filter-group checkbox-group filter-group-default-hide"
                                style="display: none;">
                                <div class="filter-title">Вид участка</div>
                                <div class="inputs-columns"> <label class="input-column"> <input type="checkbox"
                                            name="tags[]" value="uzkii"> <span>Узкий</span> </label> <label
                                        class="input-column"> <input type="checkbox" name="tags[]" value="s-uklonom">
                                        <span>С уклоном</span> </label> <label class="input-column"> <input
                                            type="checkbox" name="tags[]" value="3-sotki">
                                        <span>3 сотки</span> </label> <label class="input-column"> <input
                                            type="checkbox" name="tags[]" value="6-sotok"> <span>6 соток</span>
                                    </label> <label class="input-column"> <input type="checkbox" name="tags[]"
                                            value="10-sotok"> <span>10 соток</span> </label></div>
                            </div>
                            <div class="form-group filter-group checkbox-group filter-group-default-hide"
                                style="display: none;">
                                <div class="filter-title">Стоимость и оплата</div>
                                <div class="inputs-columns"> <label class="input-column"> <input type="checkbox"
                                            name="tags[]" value="nedorogie"> <span>Недорогие</span> </label> <label
                                        class="input-column"> <input type="checkbox" name="tags[]" value="komfort">
                                        <span>Комфорт</span> </label> <label class="input-column"> <input
                                            type="checkbox" name="tags[]" value="elitnye"> <span>Элитные</span>
                                    </label></div>
                            </div>
                            <div class="form-group filter-group checkbox-group filter-group-default-hide"
                                style="display: none;">
                                <div class="filter-title">Комплектация</div>
                                <div class="inputs-columns"> <label class="input-column"> <input type="checkbox"
                                            name="tags[]" value="energoeffektivnyi"> <span>Энергоэффективный</span>
                                    </label> <label class="input-column"> <input type="checkbox" name="tags[]"
                                            value="s-fundamentomm"> <span>С фундаментом</span> </label> <label
                                        class="input-column"> <input type="checkbox" name="tags[]"
                                            value="s-kommunikaciyami-i-otdelkoi"> <span>С коммуникациями и
                                            отделкой</span> </label> <label class="input-column"> <input type="checkbox"
                                            name="tags[]" value="gotovyi"> <span>Готовый</span>
                                    </label> <label class="input-column"> <input type="checkbox" name="tags[]"
                                            value="pod-usadku"> <span>Под усадку</span> </label> <label
                                        class="input-column"> <input type="checkbox" name="tags[]" value="na-svayah">
                                        <span>На сваях</span> </label> <label class="input-column"> <input
                                            type="checkbox" name="tags[]" value="korobka">
                                        <span>Коробка</span> </label></div>
                            </div>
                            <div class="form-group filter-group checkbox-group filter-group-default-hide"
                                style="display: none;">
                                <div class="filter-title">Время проживания</div>
                                <div class="inputs-columns"> <label class="input-column"> <input type="checkbox"
                                            name="tags[]" value="letnee"> <span>Летнее</span> </label> <label
                                        class="input-column"> <input type="checkbox" name="tags[]" value="postoyannoe">
                                        <span>Постоянное</span> </label></div>
                            </div>
                            <div class="form-group filter-group checkbox-group filter-group-default-hide"
                                style="display: none;">
                                <div class="filter-title">Размеры</div>
                                <div class="inputs-columns"> <label class="input-column"> <input type="checkbox"
                                            name="tags[]" value="nebolshoi"> <span>Небольшой</span> </label> <label
                                        class="input-column"> <input type="checkbox" name="tags[]" value="srednie">
                                        <span>Средние</span> </label> <label class="input-column"> <input
                                            type="checkbox" name="tags[]" value="bolshoi"> <span>Большой</span>
                                    </label></div>
                            </div>
                            <div class="form-group filter-group checkbox-group filter-group-default-hide"
                                style="display: none;">
                                <div class="filter-title">Площадь</div>
                                <div class="inputs-columns"> <label class="input-column"> <input type="checkbox"
                                            name="tags[]" value="do-50-kv"> <span>до 50 кв</span> </label> <label
                                        class="input-column"> <input type="checkbox" name="tags[]" value="50-100-kv-m">
                                        <span>50-100 кв м</span> </label> <label class="input-column"> <input
                                            type="checkbox" name="tags[]" value="100-150-kv-m"> <span>100-150 кв
                                            м</span> </label> <label class="input-column"> <input type="checkbox"
                                            name="tags[]" value="150-200">
                                        <span>150-200</span> </label> <label class="input-column"> <input
                                            type="checkbox" name="tags[]" value="200-bolee"> <span>200 +</span>
                                    </label></div>
                            </div>
                            <div class="form-group submit-group"> <a href="#"
                                    class="open-all-filters"><span>Дополнительные фильтры</span><i
                                        class="fa fa-chevron-down" aria-hidden="true"></i></a> <a href="#"
                                    class="open-all-filters" style="display: none;"><span>Скрыть фильтры</span><i
                                        class="fa fa-chevron-up" aria-hidden="true"></i></a> <button type="submit"
                                    class="button orange filter-submit">Найти проекты</button> <a href="/projects"
                                    class="button filter-reset">Сбросить</a></div>
                        </form>
                    </div>
                    <div class="sidebar-banner-item sidebar-banner-top">
                        <div class="sidebar-banner-label">ТОП 50</div>
                        <div class="sidebar-banner-title">Лидеры<br>продаж</div>
                        <div class="sidebar-banner-link"><a href="#modal" class="orange-link"
                                data-modal="#catalog-top-modal">Смотреть
                                ТОП</a></div>
                    </div>
                    <div class="sidebar-banner-item sidebar-banner-sale">
                        <div class="sidebar-banner-label">Акции</div>
                        <div class="sidebar-banner-title">Дома со<br>скидкой<br>до 15%</div>
                    </div>
                    <div class="sidebar-banner-item sidebar-banner-project">
                        <div class="sidebar-banner-title">Уже есть<br>проект</div>
                        <div class="sidebar-banner-text">Рассчитываем<br>стоимость строительства</div>
                        <div class="sidebar-banner-link"><a href="#modal" class="orange-link"
                                data-modal="#smeta-messenger">Рассчитать
                                стоимость</a></div>
                    </div>
                </div>
                <div class="catalog-sidebar-open"><a href="#" class="button orange sidebar-open-mobile">Открыть
                        фильтр</a></div>
                <div class="catalog-list flex-row">
                    <div class="project-item-wrapper">
                        <div class="project-item">
                            <div class="project-item-image">
                                <div class="project-labels"> <span class="project-label project-label-hit">Хит</span>
                                </div> <a href=""><noscript><img width="416" height="250"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/09/62caf0a1905507495e685dd19d6511c5-416x250.jpg"
                                            class="attachment-catalog-thumbnail size-catalog-thumbnail wp-post-image"
                                            alt="Проект Ульяна" itemprop="image" title="Ульяна" /></noscript><img
                                        width="416" height="250"
                                        src='<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/09/62caf0a1905507495e685dd19d6511c5-416x250.jpg'
                                        data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/09/62caf0a1905507495e685dd19d6511c5-416x250.jpg"
                                        class="lazyload attachment-catalog-thumbnail size-catalog-thumbnail wp-post-image"
                                        alt="Проект Ульяна" itemprop="image" title="Ульяна" /></a>
                                <div class="project-item-like" data-id="25256"> <span class="number">141</span>
                                    <span class="heart"></span>
                                </div>
                                <div class="rating"> <span></span> <span></span> <span></span> <span></span> <span
                                        class="star-half"></span></div>
                            </div>
                            <div class="project-item-content">
                                <div class="project-item-title"><a href="projectsulyana/"><span>"Ульяна"</span></a>
                                </div>
                                <div class="project-item-attrs">
                                    <div class="project-item-attr project-item-attr-size">
                                        <div class="project-item-attr-text"> <span>Размеры:</span> <b>13х9</b></div>
                                    </div>
                                    <div class="project-item-attr project-item-attr-rooms">
                                        <div class="project-item-attr-text"> <span>Комнат:</span> <b>4</b></div>
                                    </div>
                                    <div class="project-item-attr project-item-attr-area">
                                        <div class="project-item-attr-text"> <span>Площадь:</span> <b>157
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
                                                </svg>Тип дома:</span><b>Бревно</b></li>
                                        <li class="project-item-feature"><span><svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="7px" height="7px">
                                                    <path fill-rule="evenodd" fill="rgb(116, 187, 22)"
                                                        d="M3.500,0.000 C5.433,0.000 7.000,1.567 7.000,3.500 C7.000,5.433 5.433,7.000 3.500,7.000 C1.567,7.000 0.000,5.433 0.000,3.500 C0.000,1.567 1.567,0.000 3.500,0.000 Z" />
                                                </svg>Срок строительства:</span><b>3 месяца</b></li>
                                    </ul>
                                </div>
                                <div class="project-item-price single-price-box">
                                    <div class="single-price-value">
                                        Стоимость&nbsp;от<br><span>3&nbsp;673&nbsp;800</span>&nbsp;руб</div>
                                </div>
                            </div> <a href="projectsulyana/" class="project-item-btn"><span
                                    class="orange-link">Посмотреть проект</span></a>
                        </div>
                    </div>


                    <div id="after-projects"></div>
                    <script type="text/javascript">
                    const query =
                        '{"category_name":"proekty","error":"","m":"","p":0,"post_parent":"","subpost":"","subpost_id":"","attachment":"","attachment_id":0,"name":"","pagename":"","page_id":0,"second":"","minute":"","hour":"","day":0,"monthnum":0,"year":0,"w":0,"tag":"","cat":1,"tag_id":"","author":"","author_name":"","feed":"","tb":"","paged":0,"meta_key":"hit","meta_value":"","preview":"","s":"","sentence":"","title":"","fields":"","menu_order":"","embed":"","category__in":[],"category__not_in":[],"category__and":[],"post__in":[],"post__not_in":[],"post_name__in":[],"tag__in":[],"tag__not_in":[],"tag__and":[],"tag_slug__in":[],"tag_slug__and":[],"post_parent__in":[],"post_parent__not_in":[],"author__in":[],"author__not_in":[],"orderby":"meta_value_num","order":"DESC","ignore_sticky_posts":false,"suppress_filters":false,"cache_results":true,"update_post_term_cache":true,"lazy_load_term_meta":true,"update_post_meta_cache":true,"post_type":"","posts_per_page":60,"nopaging":false,"comments_per_page":"50","no_found_rows":false}';
                    const max_pages = 15;
                    var page = 1;
                    var template = 'project';
                    </script>
                    <div class="load-more-link-wrapper text-center"> <a href="#" class="load-more-link"><span>Показать
                                ещё</span></a>
                        <nav class="navigation pagination" role="navigation">
                            <div class="nav-links"><span aria-current="page" class="page-numbers current">1</span>
                                <a class="page-numbers" href="projectspage/2/">2</a> <span
                                    class="page-numbers dots">&hellip;</span> <a class="page-numbers"
                                    href="projectspage/15/">15</a> <a class="next page-numbers"
                                    href="projectspage/2/">Далее</a>
                            </div>
                        </nav>
                    </div>

                    <div class="seo-links-wrap">
                        <div class="seo-box-item">
                            <div class="seo-box-item-title">Популярные подборки проектов</div>
                            <div class="seo-box-item-links"> <a href="/projectsekskluzivnye/"
                                    class="btn btn-info btn-seo">Эксклюзивные дома</a> <a href="/projects6-na-7/"
                                    class="btn btn-info btn-seo">6х7</a> <a href="/projects6-na-10/"
                                    class="btn btn-info btn-seo">6х10</a> <a href="/projects7-na-10/"
                                    class="btn btn-info btn-seo">7х10</a> <a href="/projects20-na-20/"
                                    class="btn btn-info btn-seo">20х20</a> <a href="/projects6-na-12/"
                                    class="btn btn-info btn-seo">6х12</a> <a href="/projects14-na-14/"
                                    class="btn btn-info btn-seo">14х14</a> <a href="/projects5-na-9/"
                                    class="btn btn-info btn-seo">5х9</a> <a href="/projects5-na-10/"
                                    class="btn btn-info btn-seo">5х10</a> <a href="/projects9-na-11/"
                                    class="btn btn-info btn-seo">9х11</a> <a href="/projects9-na-12/"
                                    class="btn btn-info btn-seo">9х12</a> <a href="/projects12-na-14/"
                                    class="btn btn-info btn-seo">12х14</a> <a href="/projects12-na-15/"
                                    class="btn btn-info btn-seo">12х15</a> <a href="/projectsbudjetnye/"
                                    class="btn btn-info btn-seo">Бюджетные</a> <a href="/projectspolutoraetajnye/"
                                    class="btn btn-info btn-seo">Полутораэтажные</a></div>
                        </div>
                        <div class="seo-box-item">
                            <div class="seo-box-item-title">У нас заказывают дома</div>
                            <div class="seo-box-item-links"> <a href="/projects2-spalen/" class="btn btn-info btn-seo">С
                                    двумя спальнями</a> <a href="/projects3-spalen/" class="btn btn-info btn-seo">С 3
                                    спальнями</a> <a href="/projects4-spalen/" class="btn btn-info btn-seo">С 4
                                    спальнями</a> <a href="/projects5-spalen/" class="btn btn-info btn-seo">С 5
                                    спальнями</a> <a href="/projectss-bolshimi-oknami/" class="btn btn-info btn-seo">С
                                    большими
                                    окнами</a> <a href="/projectss-podvalom/" class="btn btn-info btn-seo">С
                                    подвалом</a> <a href="/projectss-erkerom/" class="btn btn-info btn-seo">С
                                    эркером</a> <a href="/projectsamerikanskii/" class="btn btn-info btn-seo">В
                                    американском стиле</a> <a href="/projectsnemeckii/"
                                    class="btn btn-info btn-seo">Немецкие</a> <a href="/projectsangliiskii/"
                                    class="btn btn-info btn-seo">Английские</a> <a href="/projectsloft/"
                                    class="btn btn-info btn-seo">Дома в стиле лофт</a></div>
                        </div>
                        <div class="seo-box-item">
                            <div class="seo-box-item-title">Смотрите так же</div>
                            <div class="seo-box-item-links"> <a href="/projectsdom-banya/"
                                    class="btn btn-info btn-seo">Дом-баня</a> <a href="/projectssadovyi/"
                                    class="btn btn-info btn-seo">Садовые дома</a> <a href="/projectsdupleks/"
                                    class="btn btn-info btn-seo">Дуплексы</a></div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>


</main>



<?php get_footer(); ?>