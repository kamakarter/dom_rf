<section id="excursion">
    <div class="container">
        <div class="excursion-wrapper lazyload"
            data-bg="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/images/excursion_bg.jpg"
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/images/excursion_bg.jpg);">

            <style>
            .excursion-wrapper {
                background-image: url(<?php echo get_template_directory_uri();
                ?>'/assets/wp-content/themes/super_dom/images/excursion_bg.jpg');
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
                    <div class="form-group"> <label for="excursion-date">Укажите дату</label> <input type="date"
                            name="excursion-date" id="excursion-date" class="form-control" min="2025-07-08"
                            value="2025-07-12" required></div>
                    <div class="form-group"> <label for="excursion-tel">Введите телефон</label> <input type="tel"
                            name="excursion-tel" id="excursion-tel" class="form-control" placeholder="+7" required>
                    </div>
                    <div class="form-group"> <label for="excursion-name">Введите имя</label> <input type="text"
                            name="your-name" id="excursion-name" class="form-control" placeholder="Введите имя">
                    </div>
                    <div class="form-group submit-group text-center"> <button type="submit"
                            class="button orange">Записаться на<br>экскурсию по объектам</button> <input type="hidden"
                            name="form_id" value="excursion-form">
                        <div class="privacy-group">Нажимая на кнопку вы соглашаетесь с условиями <span
                                onclick="window.open('/privacy-policy/')">Политики
                                конфиденциальности</span></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>