<section id="smeta-form">
    <div class="container">
        <div class="smeta-box lazyload"
            data-bg="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/images/smeta-bg.jpg"
            style="background-image: url(data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20500%20300%22%3E%3C/svg%3E);">
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
                            <div class="form-group file-form-group"> <label class="file-label"> <input type="file"
                                        name="smeta-files[]" multiple class="form-control"> <span
                                        class="file-label-text">Прикрепить файл</span> <span class="files-list"></span>
                                </label></div>
                            <div class="form-group">
                                <div class="text-center"><label class="form-label"><b>Куда выслать наш вариант
                                            сметы?</b></label></div>
                            </div>
                            <div class="form-group form-group-socials-labels"> <input type="radio"
                                    id="whatsapp-smeta-form" name="send_to" value="whatsapp"> <label
                                    class="form-group-social-label" for="whatsapp-smeta-form"> <noscript><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-whatsapp.png"
                                            alt="Whatsapp" title="Whatsapp"></noscript><img class="lazyload"
                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                        data-src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-whatsapp.png"
                                        alt="Whatsapp" title="Whatsapp"> <span
                                        class="form-group-social-label-text">Whatsapp</span> </label> <input
                                    type="radio" id="viber-smeta-form" name="send_to" value="viber"> <label
                                    class="form-group-social-label" for="viber-smeta-form"> <noscript><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-viber.png"
                                            alt="Viber" title="Viber"></noscript><img class="lazyload"
                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                        data-src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-viber.png"
                                        alt="Viber" title="Viber"> <span
                                        class="form-group-social-label-text">Viber</span> </label> <input type="radio"
                                    id="telegram-smeta-form" name="send_to" value="telegram">
                                <label class="form-group-social-label" for="telegram-smeta-form"> <noscript><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-telegram.png"
                                            alt="Telegram" title="Telegram"></noscript><img class="lazyload"
                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                        data-src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-telegram.png"
                                        alt="Telegram" title="Telegram"> <span
                                        class="form-group-social-label-text">Telegram</span> </label> <input
                                    type="radio" id="pphone-smeta-form" name="send_to" value="Телефон" checked>
                                <label class="form-group-social-label" for="pphone-smeta-form"> <noscript><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-phone.png"
                                            alt="Телефон" title="Телефон"></noscript><img class="lazyload"
                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                        data-src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/icons/label-phone.png"
                                        alt="Телефон" title="Телефон"> <span
                                        class="form-group-social-label-text">Телефон</span> </label>
                            </div>
                            <div class="form-group">
                                <div class="text-center"> <label class="form-label" for="phone-smeta-form">Введите
                                        телефон</label></div> <input type="tel" name="phone" id="phone-smeta-form"
                                    class="form-control" placeholder="+7" required>
                            </div>
                            <div class="form-group">
                                <div class="text-center" style="display: none;"> <label class="form-label"
                                        for="your-name-smeta-form">Введите имя</label></div> <input type="text"
                                    name="your-name" id="your-name-smeta-form" class="form-control"
                                    placeholder="Введите имя">
                            </div>
                            <div class="form-group submit-group"> <button type="submit"
                                    class="button orange smeta-form-button">Получить смету</button> <input type="hidden"
                                    name="form_id" value="smeta-form"></div>
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