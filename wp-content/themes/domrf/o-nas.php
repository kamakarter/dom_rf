
<?php
/*
Template Name: o-nas
*/
?>

<?php get_header(); ?>


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

		<header class="hidden-print">
			<div class="container">
				<div class="header-top-wrap">
					<div class="header-logo-wrapper"> <a href="/" class="header-logo"> <noscript><img
									src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/04/logo.png" class="header-logo-image" alt="СтройДом"
									title="СтройДом"></noscript><img
								src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
								data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/04/logo.png" class="lazyload header-logo-image"
								alt="СтройДом" title="СтройДом">
							<div class="header-logo-text"> <span class="header-logo-text-main">СтройДом</span> <span
									class="header-logo-text-main header-logo-text-main-mobile">
									<noindex>СтройДом</noindex>
								</span> <span class="header-logo-text-default">Строительство качественных домов в Одессе
									и Одесской области</span></div>
						</a></div>
					<div class="header-google-rating-wrapper">
						<div class="header-google-rating">
							<div class="header-google-rating-value"><span>4.8</span></div>
							<div class="header-google-rating-content">
								<div class="header-google-rating-stars"> <span class="google-rating-star"></span> <span
										class="google-rating-star"></span> <span class="google-rating-star"></span>
									<span class="google-rating-star"></span> <span
										class="google-rating-star google-rating-star-80"></span></div>
								<div class="header-google-rating-text">
									<noindex><b>Рейтинг в Google</b> на основании 50 отзывов</noindex>
								</div>
							</div>
						</div>
					</div>
					<div class="text-center header-button-wrapper"> <a href="#modal" class="button green header-button"
							data-modal="#smeta-phone">Отправить проект на просчет</a></div>
					<div class="header-socials-wrapper">
						<div class="socials-box">
							<div class="socials-text flicker-text"> <span class="green-dot animate-flicker"></span>
								<span class="flicker-text-content">Пишите, мы онлайн</span></div>
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
						<div class="call-phone-box"> <a href="#modal" data-modal="#call-modal">Заказать звонок</a></div>
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
									class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-6 current_page_item menu-item-17">
									<a href="o-nas/" aria-current="page">О компании</a></li>
								<li id="menu-item-465"
									class="mega-menu menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-465">
									<a href="projects">Проекты и цены</a>
									<ul class="sub-menu">
										<li id="menu-item-416"
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-416">
											<a href="#">1</a>
											<ul class="sub-menu">
												<li id="menu-item-460"
													class="mega-item-big menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-460">
													<a href="kamennye-doma/">Каменные дома</a>
													<ul class="sub-menu">
														<li id="menu-item-443"
															class="mega-item-medium menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-443">
															<a href="doma-iz-blokov/">Дома из
																блоков</a>
															<ul class="sub-menu">
																<li id="menu-item-446"
																	class="mega-item-small menu-item menu-item-type-taxonomy menu-item-object-category menu-item-446">
																	<a
																		href="doma-iz-gazobetona/">Газобетон</a>
																</li>
																<li id="menu-item-450"
																	class="mega-item-small menu-item menu-item-type-taxonomy menu-item-object-category menu-item-450">
																	<a
																		href="doma-iz-keramicheskih-blokov/">Теплая
																		керамика</a></li>
																<li id="menu-item-441"
																	class="mega-item-small menu-item menu-item-type-taxonomy menu-item-object-category menu-item-441">
																	<a
																		href="doma-iz-arbolita/">Арболит</a>
																</li>
																<li id="menu-item-447"
																	class="mega-item-small menu-item menu-item-type-taxonomy menu-item-object-category menu-item-447">
																	<a
																		href="doma-iz-gazosilikatnyh-blokov/">Газосиликат</a>
																</li>
																<li id="menu-item-456"
																	class="mega-item-small menu-item menu-item-type-taxonomy menu-item-object-category menu-item-456">
																	<a
																		href="doma-iz-penoblokov/">Пеноблок</a>
																</li>
																<li id="menu-item-449"
																	class="mega-item-small menu-item menu-item-type-taxonomy menu-item-object-category menu-item-449">
																	<a
																		href="doma-iz-keramzitobetonnyh-blokov/">Керамзитобетон</a>
																</li>
																<li id="menu-item-457"
																	class="mega-item-small menu-item menu-item-type-taxonomy menu-item-object-category menu-item-457">
																	<a
																		href="doma-iz-polistirolbetona/">Полистиролбетон</a>
																</li>
																<li id="menu-item-459"
																	class="mega-item-small menu-item menu-item-type-taxonomy menu-item-object-category menu-item-459">
																	<a
																		href="doma-iz-teploblokov/">Теплоблок</a>
																</li>
															</ul>
														</li>
														<li id="menu-item-451"
															class="mega-item-medium menu-item menu-item-type-taxonomy menu-item-object-category menu-item-451">
															<a href="doma-iz-kirpicha/">Дома из
																кирпича</a></li>
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
													<a href="derevyannye-doma/">Деревянные дома</a>
													<ul class="sub-menu">
														<li id="menu-item-445"
															class="mega-item-medium menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-445">
															<a href="doma-iz-brusa/">Дома из
																бруса</a>
															<ul class="sub-menu">
																<li id="menu-item-452"
																	class="mega-item-small menu-item menu-item-type-taxonomy menu-item-object-category menu-item-452">
																	<a
																		href="doma-iz-kleenogo-brusa/">Клееный</a>
																</li>
																<li id="menu-item-458"
																	class="mega-item-small menu-item menu-item-type-taxonomy menu-item-object-category menu-item-458">
																	<a
																		href="doma-iz-profilirovannogo-brusa/">Профилированный</a>
																</li>
																<li id="menu-item-448"
																	class="mega-item-small menu-item menu-item-type-taxonomy menu-item-object-category menu-item-448">
																	<a
																		href="doma-iz-dvojnogo-brusa/">Двойной</a>
																</li>
															</ul>
														</li>
														<li id="menu-item-444"
															class="mega-item-medium menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-444">
															<a href="doma-iz-brevna/">Дома из
																бревна</a>
															<ul class="sub-menu">
																<li id="menu-item-455"
																	class="mega-item-small menu-item menu-item-type-taxonomy menu-item-object-category menu-item-455">
																	<a
																		href="doma-iz-oczilindrovannogo-brevna/">Оцилиндрованное</a>
																</li>
																<li id="menu-item-10310"
																	class="mega-item-small menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10310">
																	<a
																		href="doma-iz-rublennogo-brevna/">Рубленное</a>
																</li>
																<li id="menu-item-453"
																	class="mega-item-small menu-item menu-item-type-taxonomy menu-item-object-category menu-item-453">
																	<a
																		href="doma-iz-lafeta/">Лафет</a>
																</li>
															</ul>
														</li>
														<li id="menu-item-462"
															class="mega-item-medium menu-item menu-item-type-taxonomy menu-item-object-category menu-item-462">
															<a href="kombinirovannye-doma/">Комбинированные
																дома</a></li>
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
													<a href="bystrovozvodimye-doma/">Быстровозводимые
														дома</a>
													<ul class="sub-menu">
														<li id="menu-item-461"
															class="mega-item-medium menu-item menu-item-type-taxonomy menu-item-object-category menu-item-461">
															<a href="karkasnye-doma/">Каркасные</a>
														</li>
														<li id="menu-item-440"
															class="mega-item-medium menu-item menu-item-type-taxonomy menu-item-object-category menu-item-440">
															<a
																href="doma-iz-sip-panelej/">SIP-панели</a>
														</li>
													</ul>
												</li>
												<li id="menu-item-463"
													class="mega-item-big menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-463">
													<a href="monolitnye-doma/">Монолитные дома</a>
													<ul class="sub-menu">
														<li id="menu-item-454"
															class="mega-item-small menu-item menu-item-type-taxonomy menu-item-object-category menu-item-454">
															<a href="doma-iz-nesemnoj-opalubki/">Несъемная
																опалубка</a></li>
														<li id="menu-item-442"
															class="mega-item-small menu-item menu-item-type-taxonomy menu-item-object-category menu-item-442">
															<a href="doma-iz-betona/">Бетон</a></li>
													</ul>
												</li>
												<li id="menu-item-10318"
													class="mega-item-big menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-10318">
													<a href="bani/">Бани под ключ</a>
													<ul class="sub-menu">
														<li id="menu-item-10317"
															class="mega-item-small menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10317">
															<a href="bani-iz-brusa/">Из бруса</a>
														</li>
														<li id="menu-item-10316"
															class="mega-item-small menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10316">
															<a href="bani-iz-brevna/">Из бревна</a>
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
															<a href="/projectskottedj/">Коттедж</a></li>
														<li id="menu-item-469"
															class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-469">
															<a href="/projectsdachnyi/">Дачный</a></li>
														<li id="menu-item-472"
															class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-472">
															<a href="/projectsdupleks/">Дуплекс</a></li>
														<li id="menu-item-470"
															class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-470">
															<a href="/projectsgostevoi/">Гостевой</a></li>
														<li id="menu-item-90800"
															class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-90800">
															<a href="/stroitelstvo-gostinic-pod-klyuch/">Гостиница</a>
														</li>
														<li id="menu-item-471"
															class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-471">
															<a href="/projectstaunhaus/">Таунхаус</a></li>
													</ul>
												</li>
												<li id="menu-item-413"
													class="mega-item-big menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-413">
													<a href="#">Проживание</a>
													<ul class="sub-menu">
														<li id="menu-item-414"
															class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-414">
															<a href="/projectspostoyannoe/">Постоянное</a></li>
														<li id="menu-item-415"
															class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-415">
															<a href="/projectsletnee/">Летнее</a></li>
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
															<a href="/projectss-terrasoi/">терраса</a></li>
														<li id="menu-item-386"
															class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-386">
															<a href="/projectss-garajom/">гараж</a></li>
														<li id="menu-item-388"
															class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-388">
															<a href="/projectss-verandoi/">веранда</a></li>
														<li id="menu-item-389"
															class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-389">
															<a href="/projectss-balkonom/">балкон</a></li>
														<li id="menu-item-390"
															class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-390">
															<a href="/projectss-panoramnymi-oknami/">панорамные окна</a>
														</li>
														<li id="menu-item-391"
															class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-391">
															<a href="/projectsso-vtorym-svetom/">второй свет</a></li>
														<li id="menu-item-392"
															class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-392">
															<a href="/projectss-kotelnoi/">котельная</a></li>
														<li id="menu-item-393"
															class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-393">
															<a href="/projectss-saunoi/">с сауной</a></li>
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
															<a href="/projectssovremennyi/">Современный</a></li>
														<li id="menu-item-10435"
															class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-10435">
															<a href="/projectsfahverk/">Фахверк</a></li>
														<li id="menu-item-10436"
															class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-10436">
															<a href="/projectsshale/">Шале</a></li>
														<li id="menu-item-10437"
															class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-10437">
															<a href="/projectsstil-raita/">Стиль Райта</a></li>
														<li id="menu-item-10438"
															class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-10438">
															<a href="/projectshai-tek/">Хай-тек</a></li>
														<li id="menu-item-10439"
															class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-10439">
															<a href="/projectsbarnhaus/">Барнхаус</a></li>
														<li id="menu-item-10440"
															class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-10440">
															<a href="/projectsevropeiskii/">Европейский</a></li>
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
															<a href="/projectsodnoetajnye/">одноэтажные</a></li>
														<li id="menu-item-396"
															class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-396">
															<a href="/projectss-mansardoi/">с мансардой</a></li>
														<li id="menu-item-397"
															class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-397">
															<a href="/projectsdvuhetajnye/">двухэтажные</a></li>
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
															<a href="/projects50-kv-m/">50 кв.м</a></li>
														<li id="menu-item-409"
															class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-409">
															<a href="/projects100-kv-m/">100 кв.м</a></li>
														<li id="menu-item-410"
															class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-410">
															<a href="/projects150-kv-m/">150 кв.м</a></li>
														<li id="menu-item-411"
															class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-411">
															<a href="/projects200-kv-m/">200 кв.м</a></li>
														<li id="menu-item-412"
															class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-412">
															<a href="/projects300-kv-m/">300 кв.м</a></li>
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
													<a href="fundament/">Фундамент</a>
													<ul class="sub-menu">
														<li id="menu-item-10182"
															class="mega-item-small menu-item menu-item-type-post_type menu-item-object-page menu-item-10182">
															<a
																href="lentochnyj-fundament/">Ленточный</a>
														</li>
														<li id="menu-item-10168"
															class="mega-item-small menu-item menu-item-type-post_type menu-item-object-page menu-item-10168">
															<a
																href="stolbchatyj-fundament/">Столбчатый</a>
														</li>
														<li id="menu-item-10175"
															class="mega-item-small menu-item menu-item-type-post_type menu-item-object-page menu-item-10175">
															<a href="fundament-na-vintovyh-svayah/">На
																винтовых сваях</a></li>
														<li id="menu-item-10174"
															class="mega-item-small menu-item menu-item-type-post_type menu-item-object-page menu-item-10174">
															<a href="fundament-monolitnaya-plita/">Монолитная
																плита</a></li>
														<li id="menu-item-10179"
															class="mega-item-small menu-item menu-item-type-post_type menu-item-object-page menu-item-10179">
															<a
																href="fundament-svajno-rostverkovyj/">Свайно-ростверковый</a>
														</li>
														<li id="menu-item-10178"
															class="mega-item-small menu-item menu-item-type-post_type menu-item-object-page menu-item-10178">
															<a
																href="fundament-s-czokolnym-etazhom/">С
																цокольным этажом</a></li>
														<li id="menu-item-10180"
															class="mega-item-small menu-item menu-item-type-post_type menu-item-object-page menu-item-10180">
															<a
																href="blochnyj-fundament/">Блочный</a>
														</li>
														<li id="menu-item-10181"
															class="mega-item-small menu-item menu-item-type-post_type menu-item-object-page menu-item-10181">
															<a
																href="buronabivnoj-fundament/">Буронабивной</a>
														</li>
														<li id="menu-item-10183"
															class="mega-item-small menu-item menu-item-type-post_type menu-item-object-page menu-item-10183">
															<a href="uteplennaya-shvedskaya-plita/">Утепленная
																шведская плита</a></li>
														<li id="menu-item-10177"
															class="mega-item-small menu-item menu-item-type-post_type menu-item-object-page menu-item-10177">
															<a href="fundament-pod-kirpichnyj-dom/">Под
																кирпичный дом</a></li>
														<li id="menu-item-10172"
															class="mega-item-small menu-item menu-item-type-post_type menu-item-object-page menu-item-10172">
															<a
																href="fundament-dlya-derevyannogo-doma/">Для
																деревянного дома</a></li>
														<li id="menu-item-10176"
															class="mega-item-small menu-item menu-item-type-post_type menu-item-object-page menu-item-10176">
															<a href="fundament-pod-garazh/">Под
																гараж</a></li>
														<li id="menu-item-10171"
															class="mega-item-small menu-item menu-item-type-post_type menu-item-object-page menu-item-10171">
															<a href="fundament-dlya-dachi/">Для
																дачи</a></li>
														<li id="menu-item-10170"
															class="mega-item-small menu-item menu-item-type-post_type menu-item-object-page menu-item-10170">
															<a href="fundament-dlya-bani/">Для
																бани</a></li>
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
													<a href="/create-houses">Проектирование домов</a>
													<ul class="sub-menu">
														<li id="menu-item-10320"
															class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-10320">
															<a
																href="/create-houseskarkasnyh-domov/">Каркасных</a>
														</li>
														<li id="menu-item-10323"
															class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-10323">
															<a href="/create-housesiz-brevna/">Из бревна</a>
														</li>
														<li id="menu-item-10321"
															class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-10321">
															<a href="/create-housesdomov-iz-brusa/">Из бруса</a>
														</li>
														<li id="menu-item-10322"
															class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-10322">
															<a href="/create-housesiz-gazobetona/">Из
																газобетона</a></li>
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
													<a href="engineer-systems">Монтаж
														инженерных систем</a>
													<ul class="sub-menu">
														<li id="menu-item-10187"
															class="mega-item-small menu-item menu-item-type-post_type menu-item-object-page menu-item-10187">
															<a
																href="montazh-otopleniya-chastnyh-domov/">Монтаж
																отопления частных домов</a></li>
														<li id="menu-item-10186"
															class="mega-item-small menu-item menu-item-type-post_type menu-item-object-page menu-item-10186">
															<a href="montazh-kotlov-otopleniya/">Монтаж
																котлов отопления</a></li>
														<li id="menu-item-10456"
															class="mega-item-small menu-item menu-item-type-custom menu-item-object-custom menu-item-10456">
															<a href="/septik-pod-klyuch/">Установка септиков</a></li>
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
										href="portfolio/">Портфолио и отзывы</a></li>
								<li id="menu-item-19"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19"><a
										href="contacts">Контакты</a></li>
								<li class="menu-item menu-item-after menu-item-favorite"><a
										href="favorites/">Избранное</a></li>
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
						<div class="breadcrumbs-real hidden-print"><span><span><a
										href="lugansk/">ОдессаСтрой</a> <span
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
                        <div class="swiper-wrapper gallery-swiper-wrapper">
                            <div class="swiper-slide"> <a
                                    href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3.jpg"
                                    class="slider-image" data-fancybox="excursion"> <noscript><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3.jpg"
                                            alt="О компании СтройДом" title="О компании СтройДом"></noscript><img
                                        class="lazyload"
                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                        data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3.jpg"
                                        alt="О компании СтройДом" title="О компании СтройДом"> </a></div>
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
                    <div thumbsSlider class="swiper-container thumbs-slider hidden-print">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"> <a href="#" class="slider-thumb"> <noscript><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3.jpg"
                                            alt="О компании СтройДом" title="О компании СтройДом"></noscript><img
                                        class="lazyload"
                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                        data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/07/0343df85df4792fd22ec38db0d57bf1d-3.jpg"
                                        alt="О компании СтройДом" title="О компании СтройДом"> </a></div>
                            <div class="swiper-slide"> <a href="#" class="slider-thumb"> <noscript><img
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
                        <li><a href="/kiev/">Киев</a></li>
                        <li><a href="/harkov/">Харьков</a></li>
                        <li><a href="/dnepr/">Днепр</a></li>
                        <li><a href="/zaporozhe/">Запорожье</a></li>
                        <li><a href="/lvov/">Львов</a></li>
                        <li><a href="/krivoj-rog/">Кривой Рог</a></li>
                        <li><a href="/nikolaev/">Николаев</a></li>
                        <li><a href="/mariupol/">Мариуполь</a></li>
                        <li><a href="/lugansk/">Луганск</a></li>
                        <li><a href="/vinnica/">Винница</a></li>
                        <li><a href="/makeevka/">Макеевка</a></li>
                        <li><a href="/herson/">Херсон</a></li>
                        <li><a href="/poltava/">Полтава</a></li>
                        <li><a href="/chernigov/">Чернигов</a></li>
                        <li><a href="/cherkassy/">Черкассы</a></li>
                        <li><a href="/zhitomir/">Житомир</a></li>
                        <li><a href="/sumy/">Сумы</a></li>
                        <li><a href="/hmelnickij/">Хмельницкий</a></li>
                        <li><a href="/chernovcy/">Черновцы</a></li>
                        <li><a href="/gorlovka/">Горловка</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    


    <section id="about-certificates">
        <div class="container">
            <div class="section-title text-center">Имеем все необходимые<br><b>сертификаты на строительство</b>
            </div>
            <div class="certificates-slider-wrapper position-relative">
                <div class="swiper-container certificates-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"> <a href="javascript:void(0)"
                                data-href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/1-81.jpg"> <noscript><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/1-81.jpg"></noscript><img class="lazyload"
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/1-81.jpg"> </a></div>
                        <div class="swiper-slide"> <a href="javascript:void(0)"
                                data-href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/isover1.jpg"> <noscript><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/isover1.jpg"></noscript><img class="lazyload"
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/isover1.jpg"> </a></div>
                        <div class="swiper-slide"> <a href="javascript:void(0)"
                                data-href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/isover2-2.jpg"> <noscript><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/isover2-2.jpg"></noscript><img class="lazyload"
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/isover2-2.jpg"> </a></div>
                        <div class="swiper-slide"> <a href="javascript:void(0)"
                                data-href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/megaizol1.jpg"> <noscript><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/megaizol1.jpg"></noscript><img class="lazyload"
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/megaizol1.jpg"> </a></div>
                        <div class="swiper-slide"> <a href="javascript:void(0)"
                                data-href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/megaizol2.jpg"> <noscript><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/megaizol2.jpg"></noscript><img class="lazyload"
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/megaizol2.jpg"> </a></div>
                        <div class="swiper-slide"> <a href="javascript:void(0)"
                                data-href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/metallprofil1-1.jpg"> <noscript><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/metallprofil1-1.jpg"></noscript><img
                                    class="lazyload"
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/metallprofil1-1.jpg"> </a></div>
                        <div class="swiper-slide"> <a href="javascript:void(0)"
                                data-href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/metallprofil1-10.jpg"> <noscript><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/metallprofil1-10.jpg"></noscript><img
                                    class="lazyload"
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/metallprofil1-10.jpg"> </a></div>
                        <div class="swiper-slide"> <a href="javascript:void(0)"
                                data-href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/okna1.jpg"> <noscript><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/okna1.jpg"></noscript><img class="lazyload"
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/okna1.jpg"> </a></div>
                        <div class="swiper-slide"> <a href="javascript:void(0)"
                                data-href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/okna2.jpg"> <noscript><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/okna2.jpg"></noscript><img class="lazyload"
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/okna2.jpg"> </a></div>
                        <div class="swiper-slide"> <a href="javascript:void(0)"
                                data-href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/ondulin1.jpg"> <noscript><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/ondulin1.jpg"></noscript><img class="lazyload"
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/ondulin1.jpg"> </a></div>
                        <div class="swiper-slide"> <a href="javascript:void(0)"
                                data-href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/osb1.jpg"> <noscript><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/osb1.jpg"></noscript><img class="lazyload"
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/osb1.jpg"> </a></div>
                        <div class="swiper-slide"> <a href="javascript:void(0)"
                                data-href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/osb2-1.jpg"> <noscript><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/osb2-1.jpg"></noscript><img class="lazyload"
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/osb2-1.jpg"> </a></div>
                        <div class="swiper-slide"> <a href="javascript:void(0)"
                                data-href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/paroc1-1.jpg"> <noscript><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/paroc1-1.jpg"></noscript><img class="lazyload"
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/paroc1-1.jpg"> </a></div>
                        <div class="swiper-slide"> <a href="javascript:void(0)"
                                data-href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/paroc1-2.jpg"> <noscript><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/paroc1-2.jpg"></noscript><img class="lazyload"
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/paroc1-2.jpg"> </a></div>
                        <div class="swiper-slide"> <a href="javascript:void(0)"
                                data-href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/paroc1-3.jpg"> <noscript><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/paroc1-3.jpg"></noscript><img class="lazyload"
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/paroc1-3.jpg"> </a></div>
                        <div class="swiper-slide"> <a href="javascript:void(0)"
                                data-href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/paroc2-1.jpg"> <noscript><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/paroc2-1.jpg"></noscript><img class="lazyload"
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/paroc2-1.jpg"> </a></div>
                        <div class="swiper-slide"> <a href="javascript:void(0)"
                                data-href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/razresheniye_1.jpg"> <noscript><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/razresheniye_1.jpg"></noscript><img
                                    class="lazyload"
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/razresheniye_1.jpg"> </a></div>
                        <div class="swiper-slide"> <a href="javascript:void(0)"
                                data-href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/razresheniye_2.jpg"> <noscript><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/razresheniye_2.jpg"></noscript><img
                                    class="lazyload"
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/razresheniye_2.jpg"> </a></div>
                        <div class="swiper-slide"> <a href="javascript:void(0)"
                                data-href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/rockwool1-1.jpg"> <noscript><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/rockwool1-1.jpg"></noscript><img class="lazyload"
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/rockwool1-1.jpg"> </a></div>
                        <div class="swiper-slide"> <a href="javascript:void(0)"
                                data-href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/rockwool2.jpg"> <noscript><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/rockwool2.jpg"></noscript><img class="lazyload"
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/rockwool2.jpg"> </a></div>
                        <div class="swiper-slide"> <a href="javascript:void(0)"
                                data-href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/sro_1.jpg"> <noscript><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/sro_1.jpg"></noscript><img class="lazyload"
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/sro_1.jpg"> </a></div>
                        <div class="swiper-slide"> <a href="javascript:void(0)"
                                data-href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/zaklucheniye_1.jpg"> <noscript><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/zaklucheniye_1.jpg"></noscript><img
                                    class="lazyload"
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/zaklucheniye_1.jpg"> </a></div>
                        <div class="swiper-slide"> <a href="javascript:void(0)"
                                data-href="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/zaklucheniye_2.jpg"> <noscript><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/zaklucheniye_2.jpg"></noscript><img
                                    class="lazyload"
                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                    data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/08/zaklucheniye_2.jpg"> </a></div>
                    </div>
                </div>
                <div class="swiper-button-next swiper-button-cs"></div>
                <div class="swiper-button-prev swiper-button-cs"></div>
            </div>
        </div>
    </section>


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
                    <div class="gflag-item"> <noscript><img src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/ps1.png"
                                alt="Строим дом всего за 3 месяца" title="Строим дом всего за 3 месяца"
                                class="gflag-item-icon"></noscript><img
                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/ps1.png" alt="Строим дом всего за 3 месяца"
                            title="Строим дом всего за 3 месяца" class="lazyload gflag-item-icon">
                        <div class="gflag-item-title">Строим дом всего за 3 месяца</div>
                        <div class="gflag-item-text">Вы получаете дом, который не надо доделывать, подкрашивать
                        </div>
                    </div>
                </div>
                <div class="gflag-item-box gflag-item-box-2 gflag-item-has-icon">
                    <div class="gflag-item-flag">02</div>
                    <div class="gflag-item"> <noscript><img src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/ps2.png"
                                alt="5 этапов оплаты" title="5 этапов оплаты"
                                class="gflag-item-icon"></noscript><img
                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/ps2.png" alt="5 этапов оплаты" title="5 этапов оплаты"
                            class="lazyload gflag-item-icon">
                        <div class="gflag-item-title">5 этапов оплаты</div>
                        <div class="gflag-item-text">Вы платите только после окончания и проверки каждого этапа
                            работы</div>
                    </div>
                </div>
                <div class="gflag-item-box gflag-item-box-3 gflag-item-has-icon">
                    <div class="gflag-item-flag">03</div>
                    <div class="gflag-item"> <noscript><img src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/ps3.png"
                                alt="Проектировщики в штате" title="Проектировщики в штате"
                                class="gflag-item-icon"></noscript><img
                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/ps3.png" alt="Проектировщики в штате"
                            title="Проектировщики в штате" class="lazyload gflag-item-icon">
                        <div class="gflag-item-title">Проектировщики в штате</div>
                        <div class="gflag-item-text">Создадим с нуля или доработаем любой понравившийся проект</div>
                    </div>
                </div>
                <div class="gflag-item-box gflag-item-box-4 gflag-item-has-icon">
                    <div class="gflag-item-flag">04</div>
                    <div class="gflag-item"> <noscript><img src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/ps4.png"
                                alt="Лучшие цены на материалы" title="Лучшие цены на материалы"
                                class="gflag-item-icon"></noscript><img
                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/ps4.png" alt="Лучшие цены на материалы"
                            title="Лучшие цены на материалы" class="lazyload gflag-item-icon">
                        <div class="gflag-item-title">Лучшие цены на материалы</div>
                        <div class="gflag-item-text">Работаем напрямую с поставщиками стройматериалов</div>
                    </div>
                </div>
                <div class="gflag-item-box gflag-item-box-5 gflag-item-has-icon">
                    <div class="gflag-item-flag">05</div>
                    <div class="gflag-item"> <noscript><img src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/ps1.png"
                                alt="Сроки строительства и оплаты прописаны"
                                title="Сроки строительства и оплаты прописаны"
                                class="gflag-item-icon"></noscript><img
                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/ps1.png" alt="Сроки строительства и оплаты прописаны"
                            title="Сроки строительства и оплаты прописаны" class="lazyload gflag-item-icon">
                        <div class="gflag-item-title">Сроки строительства и оплаты прописаны</div>
                        <div class="gflag-item-text">На этапе подписания договора составляется план-график работ и
                            их финансирования</div>
                    </div>
                </div>
                <div class="gflag-item-box gflag-item-box-6 gflag-item-has-icon">
                    <div class="gflag-item-flag">06</div>
                    <div class="gflag-item"> <noscript><img src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/ps2.png"
                                alt="Выполняем весь комплекс работ" title="Выполняем весь комплекс работ"
                                class="gflag-item-icon"></noscript><img
                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/ps2.png" alt="Выполняем весь комплекс работ"
                            title="Выполняем весь комплекс работ" class="lazyload gflag-item-icon">
                        <div class="gflag-item-title">Выполняем весь комплекс работ</div>
                        <div class="gflag-item-text">От юридического согласования постройки и геологии
                            до ландшафтного и интерьерного дизайна</div>
                    </div>
                </div>
                <div class="gflag-item-box gflag-item-box-7 gflag-item-has-icon">
                    <div class="gflag-item-flag">07</div>
                    <div class="gflag-item"> <noscript><img src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/ps3.png"
                                alt="Команда, которую подбирали 6 лет" title="Команда, которую подбирали 6 лет"
                                class="gflag-item-icon"></noscript><img
                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/ps3.png" alt="Команда, которую подбирали 6 лет"
                            title="Команда, которую подбирали 6 лет" class="lazyload gflag-item-icon">
                        <div class="gflag-item-title">Команда, которую подбирали 6 лет</div>
                        <div class="gflag-item-text">Штат своих специалистов, которые являются профессионалами
                            своего дела и знают все нюансы в строительстве</div>
                    </div>
                </div>
                <div class="gflag-item-box gflag-item-box-8 gflag-item-has-icon">
                    <div class="gflag-item-flag">08</div>
                    <div class="gflag-item"> <noscript><img src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/ps4.png"
                                alt="Контроль качества строительства" title="Контроль качества строительства"
                                class="gflag-item-icon"></noscript><img
                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                            data-src="<?php echo get_template_directory_uri(); ?>/assets/superuploads/2021/05/ps4.png" alt="Контроль качества строительства"
                            title="Контроль качества строительства" class="lazyload gflag-item-icon">
                        <div class="gflag-item-title">Контроль качества строительства</div>
                        <div class="gflag-item-text">За вашим объектом будет закреплен прораб, который контролирует
                            все этапы строительства</div>
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
                    <div class="foorter-contacts-map" id="foorter-contacts-map" style="width: 100%;height: 200px;">
                    </div>
                    <script type="text/javascript">var coords = JSON.parse('["46.481861","30.747392"]');
                        var address = 'Одесса, Греческая улица, 1А<br>(Перед приездом - позвоните!)';
                        var coords_2 = undefined;
                        var address_2 = undefined;</script>
                </div>
                <div class="contacts-col contacts-col-data">
                    <div class="section-title-small text-center"><b>Наши контакты</b></div>
                    <div class="socials-text flicker-text"> <span class="green-dot animate-flicker"></span> <span
                            class="flicker-text-content">Без выходных: 9:00-18:00</span></div>
                    <div class="phone-box"> <a href="tel:+7 (967) 555-75-92"><span itemprop="telephone">+7 (967)
                                555-75-92</span></a></div> <a href="#modal" class="button orange contacts-button"
                        data-modal="#call-modal">Позвоните мне</a>
                    <div class="contacts-title text-center">Пишите в мессенджер,<br>отвечаем мгновенно</div>
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
                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                            data-src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/images/meeting1.png"> <span
                            class="meeting-label">В офисе</span></div>
                    <div class="meeting-box"> <noscript><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/images/meeting2.png"></noscript><img
                            class="lazyload"
                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                            data-src="<?php echo get_template_directory_uri(); ?>/assets/wp-content/themes/super_dom/images/meeting2.png"> <span
                            class="meeting-label">На участке</span></div>
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
</main>




<?php get_footer(); ?>