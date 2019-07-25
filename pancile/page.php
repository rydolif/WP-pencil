
<?php get_header(); ?>

	<main class="main">

		<section class="hero" id="hero">
			<div class="container hero__container">

				<div class="hero__left">

					<div class="hero__logo click">
						<a href="#about" class="click">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo">
							<div class="hero__logo_text">
								<p>prokarandash</p>
								<span>Онлайн школа рисунка</span>
							</div>
						</a>
						
					</div>

					<h1>Техника рисунка<br> цветными карандашами</h1>

					<ul>
						<li><span>+</span>Старт занятий 01.08.2019</li>
						<li><span>+</span>Доступ к урокам с любой точки мира</li>
					</ul>
						
					<div class="click">
						<a href="#tabs" class="btn hero__btn">Программа курса</a>
					</div>

				</div>

			</div>
		</section>

		<section class="about" id="about">
			<div class="container about__container">

				<div class="about__title">
					<p>Знакомьтесь с <span>онлайн-курсом Дмитрия Казимирова</span><br> посвященному рисунку цветными карандашами.</p>
					<p>Изучайте основы графики, свойства материалов и инструментов. </p>
					<p>Применяйте продвинутые техники передачи объёма и цвета.</p>
				</div>

				<div class="about__oli">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/3.png" alt="img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/strujka.png" alt="">
				</div>

				<div class="about__list">

					<div class="about__item">
						<span>25 уроков</span>
						<p>Продолжительность уроков 1,5 - 3 часа. Вас ждет большое количество теори и практики.</p>
					</div>

					<div class="about__item">
						<span>56 часов видео</span>
						<p>Много наглядной информации и удобный формат для обучения рисованию.</p>
					</div>

					<div class="about__item">
						<span>20 картин</span>
						<p>Именно столько работ вы нарисуете на курсе. Вы будете применять все полученные знания на практике.</p>
					</div>

					<div class="about__item">
						<span>100% разбор работ</span>
						<p>Обратная связь от преподавателя и разбор ваших картин в видеоформате.</p>
					</div>

				</div>

				<div class="about__adp"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/photo.png" alt="photo"></div>

				<div class="about__text">
					<div class="about__photo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/photo.png" alt="photo"></div>
					<div>
						<p>
							Вы когда-либо рисовали цветными карандашами? Такой, казалось бы, простой инструмент открывает широкие возможности для творчества и обучению рисунку.
						</p>
					</div>
					
					<div>
						<p>
							Но, к сожалению, далеко не у всех есть возможность посещать обычные художественные курсы в связи с напряжённым графиком работы или высокой стоимостью занятий. <br>Поэтому мы и создали нашу онлайн-школу «Prokarandash», чтобы вы могли заниматься с любой точки мира, в любое удобное для вас время.

						</p>
					</div>
					<div>
						<p>
							Мы научим вас виртуозно пользоваться этим инструментом художника - создавать объём в работе, передавать фактуру и материал поверхностей различных предметов. По нашим подробным видеоурокам вы научитесь создавать рисунки с хорошей детализацией, максимально приближенные к реализму.
						</p>
					</div>
				</div>
	
			</div>
		</section>

		<section class="program" id="program">
			<div class="container program__container">

				<h2>Кому подходит программа?</h2>

				<div class="program__photo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/prog_img.png" alt=""></div>

				<div class="program__list">

					<div class="program__item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/program1.png" alt="">
						<span>Новички</span>
						<p>
							Этот курс подойдёт тем, кто только начинает свой творческий путь.
						</p>
						<p>
							Мы поможем реализовать ваш потенциал в полном объёме. Сложность уроков возрастает постепенно.</p>
						<p>На каждом занятии вы будете осваивать новые техники и секреты, которые упростят весь процесс обучения.</p>

					</div>

					<div class="program__item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/program2.png" alt="">
						<span>Опытные художники</span>
						<p>
							Курс будет интересен тем, кто хочет совершенствовать технику и освоить новые приёмы рисования цветными карандашами. Вы сможете рисовать животных и птиц, добиваясь в работе максимальной выразительности и яркости цвета. Эти знания могут стать отличным источником дополнительного дохода. Вы сможете рисовать на заказ портреты домашних любимцев, а также разрабатывать индивидуальные эскизы для тату.
						</p>
					</div>

				</div>

			</div>
		</section>

		<section class="works">
			<div class="container">

				<h2>работы учеников</h2>
				
				<div class="swiper-container works__slider">
					<div class="swiper-wrapper">

						<div class="swiper-slide">
							<a href="<?php echo get_template_directory_uri(); ?>/assets/img/reviews1.png" data-fancybox="gallery"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/reviews1.png" alt=""></a>
						</div>

						<div class="swiper-slide">
							<a href="<?php echo get_template_directory_uri(); ?>/assets/img/reviews2.png" data-fancybox="gallery"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/reviews2.png" alt=""></a>
						</div>

						<div class="swiper-slide">
							<a href="<?php echo get_template_directory_uri(); ?>/assets/img/reviews3.png" data-fancybox="gallery"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/reviews3.png" alt=""></a>
						</div>

						<div class="swiper-slide">
							<a href="<?php echo get_template_directory_uri(); ?>/assets/img/reviews4.png" data-fancybox="gallery"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/reviews4.png" alt=""></a>
						</div>

						<div class="swiper-slide">
							<a href="<?php echo get_template_directory_uri(); ?>/assets/img/reviews5.png" data-fancybox="gallery"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/reviews5.png" alt=""></a>
						</div>

						<div class="swiper-slide">
							<a href="<?php echo get_template_directory_uri(); ?>/assets/img/reviews1.png" data-fancybox="gallery"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/reviews1.png" alt=""></a>
						</div>

						<div class="swiper-slide">
							<a href="<?php echo get_template_directory_uri(); ?>/assets/img/reviews2.png" data-fancybox="gallery"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/reviews2.png" alt=""></a>
						</div>

						<div class="swiper-slide">
							<a href="<?php echo get_template_directory_uri(); ?>/assets/img/reviews3.png" data-fancybox="gallery"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/reviews3.png" alt=""></a>
						</div>

						<div class="swiper-slide">
							<a href="<?php echo get_template_directory_uri(); ?>/assets/img/reviews4.png" data-fancybox="gallery"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/reviews4.png" alt=""></a>
						</div>

						<div class="swiper-slide">
							<a href="<?php echo get_template_directory_uri(); ?>/assets/img/reviews5.png" data-fancybox="gallery"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/reviews5.png" alt=""></a>
						</div>

					</div>

					<div class="swiper-pagination works__prev"></div>
				</div>
			</div>
		</section>

		<section class="reviews">

			<div class="container reviews__container">
				
				<div class="reviews__title"><h2>Отзывы наших учеников</h2></div>
			
				<div class="swiper-container reviews__slider">
					<div class="swiper-wrapper">

						<div class="swiper-slide reviews__slide">
							<div class="reviews__slide_wrap">
								<p>Большое спасибо за столь подробные уроки! Цветными карандашами рисую около 2-х лет, но тем не менее узнала много нового, а практические задания помогли лучше понять материал</p>
								<div class="reviews__slide_info">
									<p>Алиса <time datetime="2018-07-24">24/07/2018</time></p>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/alisa.png" alt="">
								</div>
							</div>
						</div>

						<div class="swiper-slide reviews__slide">
							<div class="reviews__slide_wrap">
								<p>Большое спасибо за столь подробные уроки! Цветными карандашами рисую около 2-х лет, но тем не менее узнала много нового, а практические задания помогли лучше понять материал</p>
								<div class="reviews__slide_info">
									<p>Алиса <time datetime="2018-07-24">24/07/2018</time></p>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/alisa.png" alt="">
								</div>
							</div>
						</div>

						<div class="swiper-slide reviews__slide">
							<div class="reviews__slide_wrap">
								<p>Большое спасибо за столь подробные уроки! Цветными карандашами рисую около 2-х лет, но тем не менее узнала много нового, а практические задания помогли лучше понять материал</p>
								<div class="reviews__slide_info">
									<p>Алиса <time datetime="2018-07-24">24/07/2018</time></p>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/alisa.png" alt="">
								</div>
							</div>
						</div>

					</div>

					<div class="swiper-pagination"></div>

					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>

				</div>
			</div>
		</section>

		<section class="learn">
			<div class="container">

				<div class="learn__what">
					<h2>Что ждёт вас на курсе</h2>
					<p>
						Мы разработали для вас подробные и по-настоящему интересные уроки, которые содержат большое количество теории и практики.
					</p>
					<p>
						Вы будете рисовать не только фрукты и овощи, но и научитесь передавать поверхность металла, камня и стекла, текстуру кожи и шерсти.
					</p>
					<p>
						Отдельный блок уроков будет посвящен рисованию животных, насекомых и птиц.
					</p>
					<p>
						Курс содержит 25 уроков продолжительностью от 1,5 до 3 часов каждый. В конце каждого занятия вы получаете домашнее задание, которое нужно выполнить и отправить на проверку преподавателю. 
					</p>
					<p>
						По итогу обучения у вас на руках останется 20 законченных, непохожих друг на друга работ, которые затрагивают различные темы изобразительного искусства.
					</p>

				</div>
				
				<div class="learn__tems">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/tems1.png" alt="" class="learn__tems_bg">
					
					<div class="learn__list">
						<h2>Темы, которые мы разберём</h2>
						<ul>
							
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mark.png" alt="mark">
								<p>Материалы и инструменты необходимые в работе;</p>
							</li>
							
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mark.png" alt="mark">
								<p>Выбор цветных карандашей, разбор марок и фирм;</p>
							</li>
							
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mark.png" alt="mark">
								<p>Техника штриха и плотный закрас;</p>
							</li>
							
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mark.png" alt="mark">
								<p>Бумага для графики. Kак ее цвет и фактура влияет на результат;</p>
							</li>
							
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mark.png" alt="mark">
								<p>Цветоведение – свет и цвет в рисунке;</p>
							</li>
							
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mark.png" alt="mark">
								<p>Цветовой круг Итенна;</p>
							</li>
							
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mark.png" alt="mark">
								<p>Теплые. холодные цвета и цветовые комбинации;</p>
							</li>
							
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mark.png" alt="mark">
								<p>Воздушная и линейная перспектива;</p>
							</li>
							
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mark.png" alt="mark">
								<p>Глубина в работе и тональный контарст;</p>
							</li>
							
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mark.png" alt="mark">
								<p>Создание текстур. Особенности и техники;</p>
							</li>
							
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mark.png" alt="mark">
								<p>Передача материала и поверхностей предметов;</p>
							</li>
							
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mark.png" alt="mark">
								<p>Изображение и портреты животных и птиц;</p>
							</li>
							
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mark.png" alt="mark">
								<p>Рисование различных видов шерсти;</p>
							</li>
							
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mark.png" alt="mark">
								<p>Секрет рисования выразительного взгляда;</p>
							</li>
							
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mark.png" alt="mark">
								<p>Правильная расстановка акцентов.</p>
							</li>

						</ul>
					</div>
				</div>


			</div>
		</section>

		<section class="tabs" id="tabs">
			<div class="container tabs__container">

				<h2>Программа курса</h2>
				
				<ul class="tabs__cover">
					<li><a href="#" class="active"><span>Часть 1.</span>Основы графики</a></li>
				</ul>
				<div class="tabs__wrap_list">
					<ul>
						<li><span>+</span>14 уроков</li>
						<li><span>+</span>50 часов практики</li>
						<li><span>+</span>26 часов видеоматериалов</li>
						<li><span>+</span>9 итоговых работ + техзадания обратная связь преподавателя</li>
					</ul>
				</div>

			</div>
		</section>

		<section class="kurs">
			<div class="kurs__container container">
				<h2>Содержание уроков 1 часть</h2>

				<div class="swiper-container kurs__slider">
					<div class="swiper-wrapper">

						<div class="kurs__slider_slide swiper-slide">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kurs1.png" alt="">
							<div class="kurs__slider_text">
								<h3>Урок 1</h3>
								<p>Свойства света и цвета. Рассмотрим цветовой круг Йоханнеса Итенна. Узнаем, что такое теплые и холодные цвета и сделаем цветовую карту вашего набора цветных карандашей.</p>
							</div>
						</div>

						<div class="kurs__slider_slide swiper-slide">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kurs2.png" alt="">
							<div class="kurs__slider_text">
								<h3>Урок 2</h3>
								<p>Техника штрихования. Попробуем создать тональные переходы, используя различный виды штриховки – нарисуем синий шар, освещенный с одной стороны.</p>
							</div>
						</div>

						<div class="kurs__slider_slide swiper-slide">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kurs3.png" alt="">
							<div class="kurs__slider_text">
								<h3>Урок 3</h3>
								<p>Основы светотени. Отработаем принципы светотеневого рисунка на примере рисования зелёного яблока.</p>
							</div>
						</div>
						<div class="kurs__slider_slide swiper-slide">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kurs4.png" alt="">
							<div class="kurs__slider_text">
								<h3>Урок 4</h3>
								<p>Изображение банана. Нарисуем спелый банан и объясним, как показать фактуру внутренней стороны кожуры с помощью электрического ластика.</p>
							</div>
						</div>

						<div class="kurs__slider_slide swiper-slide">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kurs5.png" alt="">
							<div class="kurs__slider_text">
								<h3>Урок 5</h3>
								<p>Рисование тыквы. Рассмотрим, как меняется светотеневой рисунок по мере изменения формы предмета. </p>
							</div>
						</div>
						<div class="kurs__slider_slide swiper-slide">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kurs1.png" alt="">
							<div class="kurs__slider_text">
								<h3>Урок 6</h3>
								<p>Изображение фактурных камней.  Покажем, как наиболее реалистично передать шероховатую каменную поверхность.</p>
							</div>
						</div>

						<div class="kurs__slider_slide swiper-slide">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kurs2.png" alt="">
							<div class="kurs__slider_text">
								<h3>Урок 7</h3>
								<p>Прорисовка стеклянного сосуда.  Изучим технику рисования прозрачного стекла красного цвета.</p>
							</div>
						</div>
						<div class="kurs__slider_slide swiper-slide">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kurs3.png" alt="">
							<div class="kurs__slider_text">
								<h3>Урок 8</h3>
								<p>Зарисовка медного чайника. Научим передавать фактуру металла и реалистично показывать поверхность медного чайника.</p>
							</div>
						</div>
						<div class="kurs__slider_slide swiper-slide">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kurs4.png" alt="">
							<div class="kurs__slider_text">
								<h3>Урок 9</h3>
								<p>Изображение полудрагоценного камня. Расскажем, как передавать форму граней кристалла и показать его глубину.</p>
							</div>
						</div>
						<div class="kurs__slider_slide swiper-slide">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kurs5.png" alt="">
							<div class="kurs__slider_text">
								<h3>Урок 10</h3>
								<p>Рисование морской волны. Научимся передавать динамику в рисунке, а также показывать форму волны и её поверхность.</p>
							</div>
						</div>
						<div class="kurs__slider_slide swiper-slide">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kurs1.png" alt="">
							<div class="kurs__slider_text">
								<h3>Урок 11</h3>
								<p>Научимся рисовать глаз тигра и передавать выразительность взгляда животного. Прорисуем детали рисунка. Отработаем технику рисования шерсти животного.</p>
							</div>
						</div>
						<div class="kurs__slider_slide swiper-slide">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kurs2.png" alt="">
							<div class="kurs__slider_text">
								<h3>Урок 12</h3>
								<p>Нарисуем глаз человека и расскажем, как карандашами передать выразительность взгляда и показать фактуру кожи. Подберем цвета для передачи оттенков человеческой кожи.</p>
							</div>
						</div>

						<div class="kurs__slider_slide swiper-slide">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kurs3.png" alt="">
							<div class="kurs__slider_text">
								<h3>Урок 13</h3>
								<p>Рисуем глаз рептилии – часть 1. Изучим альтернативные методы переноса изображения на поверхность бумаги. Проложим основные тональные пятна.</p>
							</div>
						</div>

						<div class="kurs__slider_slide swiper-slide">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kurs4.png" alt="">
							<div class="kurs__slider_text">
								<h3>Урок 14</h3>
								<p>Рисуем глаз рептилии – часть 2. Проработаем детали и прорисуем чешую. Попробуем передать выразительность взгляда рептилии.</p>
							</div>
						</div>

					</div>

					<div class="swiper-pagination kurs__prev"></div>

				</div>
			</div>
		</section>

		<section class="record">
			<div class="container record__container">

				<div class="record__left">
					
					<div class="record__left_first">
						
						<h3>Обучаюсь самостоятельно:</h3>
						<ul>
							<li><span>+</span> 14 уроков по 1,5 - 3 часа</li>
							<li><span>+</span> 11 законченных работ + технические задания;</li>
							<li><span>+</span> 30 часов подробных видео-материалов;</li>
							<li><span>+</span> Техподдержка куратора курса;</li>
							<li><span>+</span> Доступа к программе 12 месяцев;</li>
							<li><span>+</span> Общий чат.</li>
						</ul>

					</div>
					
					<div class="record__left_second">
						
						<h3>С проверкой и сопровождением:</h3>
						<ul>
							<li><span>+</span> 14 уроков по 1,5 - 3 часа</li>
							<li><span>+</span> 11 законченных работ + технические задания;</li>
							<li><span>+</span> 30 часов подробных видео-материалов;</li>
							<li><span>+</span> Техподдержка куратора курса;</li>
							<li><span>+</span> Доступа к программе 12 месяцев;</li>
							<li><span>+</span> Общий чат;</li>
							<li><span>+</span> Обратная cвязь с преподавателем - 12 месяцев;</li>
							<li><span>+</span> Рекомендации педагога по каждой работе;</li>
							<li><span>+</span> Сертификат о прохождении курса.</li>
						</ul>

					</div>

				</div>
				<div class="record__block">
					<div class="record__right">

						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/form_bg.png" alt="">
						
						<form action="sendmail.php" class="form record__form" method="post">

							<h3>Запишитесь на 1 часть «Основы графики»</h3>

							<div class="checkbox">
								<input type="radio" id="price2" name="price" required>
								<label for="price2"><span>Участие без проверки </span><s>4 500</s>3 000 рублей</label>
							</div>

							<div class="checkbox">
								<input type="radio" id="small2" name="price" required>
								<label for="small2"><span>Участие с проверкой </span><s>9 000 </s>6 000 рублей</label>
							</div>

							<input type="hidden" name="subject" value="Узнать подробнее!">
							<div class="record__form_in">
								<input type="text" name="name" placeholder="Введите Ваше имя" required>
							</div>
							<div class="">
								<input type="tel" name="phone" required placeholder="Введите Ваш телефон">
							</div>
							<div class="">
								<input type="email" name="mail" required placeholder="Введите Ваш Email">
							</div>
							<div class="record__btn">
								<button type="submit" class="btn" name="submit">Записаться</button>
							</div>

						</form>

					</div>
				</div>

			</div>
		</section>

		<section class="tabs tabs--two">
			<div class="container tabs__container">
				
				<ul class="tabs__cover">
					<li><a href="#" class="active"><span>Часть 2.</span>Живая природа</a></li>
				</ul>

				<div class="tabs__wrap_list">
					<ul>
						<li><span>+</span>11 уроков</li>
						<li><span>+</span>50 часов практики</li>
						<li><span>+</span>26 часов видеоматериалов</li>
						<li><span>+</span>9 итоговых работ + техзадания обратная связь преподавателя</li>
					</ul>
				</div>

			</div>
		</section>

		<section class="kurs">
			<div class="kurs__container container">
				<h2>Содержание уроков 2 часть</h2>
				
				<div class="swiper-container kurs__slider">
					<div class="swiper-wrapper">

						<div class="kurs__slider_slide swiper-slide">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kurs1.png" alt="">
							<div class="kurs__slider_text">
								<h3>Урок 1</h3>
								<p>Свойства света и цвета. Рассмотрим цветовой круг Йоханнеса Итенна. Узнаем, что такое теплые и холодные цвета и сделаем цветовую карту вашего набора цветных карандашей.</p>
							</div>
						</div>

						<div class="kurs__slider_slide swiper-slide">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kurs2.png" alt="">
							<div class="kurs__slider_text">
								<h3>Урок 2</h3>
								<p>Техника штрихования. Попробуем создать тональные переходы, используя различный виды штриховки – нарисуем синий шар, освещенный с одной стороны.</p>
							</div>
						</div>

						<div class="kurs__slider_slide swiper-slide">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kurs3.png" alt="">
							<div class="kurs__slider_text">
								<h3>Урок 3</h3>
								<p>Основы светотени. Отработаем принципы светотеневого рисунка на примере рисования зелёного яблока.</p>
							</div>
						</div>
						<div class="kurs__slider_slide swiper-slide">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kurs4.png" alt="">
							<div class="kurs__slider_text">
								<h3>Урок 4</h3>
								<p>Изображение банана. Нарисуем спелый банан и объясним, как показать фактуру внутренней стороны кожуры с помощью электрического ластика.</p>
							</div>
						</div>

						<div class="kurs__slider_slide swiper-slide">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kurs5.png" alt="">
							<div class="kurs__slider_text">
								<h3>Урок 5</h3>
								<p>Рисование тыквы. Рассмотрим, как меняется светотеневой рисунок по мере изменения формы предмета. </p>
							</div>
						</div>
						<div class="kurs__slider_slide swiper-slide">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kurs1.png" alt="">
							<div class="kurs__slider_text">
								<h3>Урок 6</h3>
								<p>Изображение фактурных камней.  Покажем, как наиболее реалистично передать шероховатую каменную поверхность.</p>
							</div>
						</div>

						<div class="kurs__slider_slide swiper-slide">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kurs2.png" alt="">
							<div class="kurs__slider_text">
								<h3>Урок 7</h3>
								<p>Прорисовка стеклянного сосуда.  Изучим технику рисования прозрачного стекла красного цвета.</p>
							</div>
						</div>
						<div class="kurs__slider_slide swiper-slide">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kurs3.png" alt="">
							<div class="kurs__slider_text">
								<h3>Урок 8</h3>
								<p>Зарисовка медного чайника. Научим передавать фактуру металла и реалистично показывать поверхность медного чайника.</p>
							</div>
						</div>
						<div class="kurs__slider_slide swiper-slide">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kurs4.png" alt="">
							<div class="kurs__slider_text">
								<h3>Урок 9</h3>
								<p>Изображение полудрагоценного камня. Расскажем, как передавать форму граней кристалла и показать его глубину.</p>
							</div>
						</div>
						<div class="kurs__slider_slide swiper-slide">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kurs5.png" alt="">
							<div class="kurs__slider_text">
								<h3>Урок 10</h3>
								<p>Рисование морской волны. Научимся передавать динамику в рисунке, а также показывать форму волны и её поверхность.</p>
							</div>
						</div>
						<div class="kurs__slider_slide swiper-slide">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kurs1.png" alt="">
							<div class="kurs__slider_text">
								<h3>Урок 11</h3>
								<p>Научимся рисовать глаз тигра и передавать выразительность взгляда животного. Прорисуем детали рисунка. Отработаем технику рисования шерсти животного.</p>
							</div>
						</div>
						<div class="kurs__slider_slide swiper-slide">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kurs2.png" alt="">
							<div class="kurs__slider_text">
								<h3>Урок 12</h3>
								<p>Нарисуем глаз человека и расскажем, как карандашами передать выразительность взгляда и показать фактуру кожи. Подберем цвета для передачи оттенков человеческой кожи.</p>
							</div>
						</div>

						<div class="kurs__slider_slide swiper-slide">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kurs3.png" alt="">
							<div class="kurs__slider_text">
								<h3>Урок 13</h3>
								<p>Рисуем глаз рептилии – часть 1. Изучим альтернативные методы переноса изображения на поверхность бумаги. Проложим основные тональные пятна.</p>
							</div>
						</div>

						<div class="kurs__slider_slide swiper-slide">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kurs4.png" alt="">
							<div class="kurs__slider_text">
								<h3>Урок 14</h3>
								<p>Рисуем глаз рептилии – часть 2. Проработаем детали и прорисуем чешую. Попробуем передать выразительность взгляда рептилии.</p>
							</div>
						</div>

					</div>

					<div class="swiper-pagination kurs__prev"></div>

				</div>
			</div>
		</section>

		<section class="record">
			<div class="container record__container">

				<div class="record__left">
					
					<div class="record__left_first">
						
						<h3>Обучаюсь самостоятельно:</h3>
						<ul>
							<li><span>+</span> 11 уроков по 1,5 - 3 часа</li>
							<li><span>+</span> 9 законченных работ + технические задания;</li>
							<li><span>+</span> 26 часов подробных видео-материалов;</li>
							<li><span>+</span> Техподдержка куратора курса;</li>
							<li><span>+</span> Доступа к программе 12 месяцев;</li>
							<li><span>+</span> Общий чат.</li>
						</ul>

					</div>
					
					<div class="record__left_second">
						
						<h3>С проверкой и сопровождением:</h3>
						<ul>
							<li><span>+</span> 11 уроков по 1,5 - 3 часа</li>
							<li><span>+</span> 9 законченных работ + технические задания;</li>
							<li><span>+</span> 26 часов подробных видео-материалов;</li>
							<li><span>+</span> Техподдержка куратора курса;</li>
							<li><span>+</span> Доступа к программе 12 месяцев;</li>
							<li><span>+</span> Общий чат.</li>
							<li><span>+</span> Обратная cвязь с преподавателем - 12 месяцев;</li>
							<li><span>+</span> Рекомендации педагога по каждой работе;</li>
							<li><span>+</span> Сертификат о прохождении курса.</li>
						</ul>

					</div>
				</div>

				<div class="record__block">
					<div class="record__right">

						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/form_bg.png" alt="">
						
						<form action="sendmail.php" class="form record__form" method="post">

							<h3>Запишитесь на 2 часть «Живая природа»</h3>

							<div class="checkbox">
								<input type="radio" id="price1" name="price" required>
								<label for="price1"><span>Участие без проверки <br></span><s>4 500</s>3 000 рублей</label>
							</div>

							<div class="checkbox">
								<input type="radio" id="small" name="price" required>
								<label for="small"><span>Участие с проверкой <br></span><s>9 000 </s>6 000 рублей</label>
							</div>

							<input type="hidden" name="subject" value="Узнать подробнее!">
							<div class="record__form_in">
								<input type="text" name="name" placeholder="Введите Ваше имя" required>
							</div>
							<div class="">
								<input type="tel" name="phone" required placeholder="Введите Ваш телефон">
							</div>
							<div class="">
								<input type="email" name="mail" required placeholder="Введите Ваш Email">
							</div>
							<div class="record__btn">
								<button type="submit" class="btn" name="submit">Записаться</button>
							</div>

						</form>
					</div>
				</div>

			</div>
		</section>

		<section class="how">

			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/how_left.png" alt="" class="how__left">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/how_right.png" alt="" class="how__right">

			<div class="container how__container">

				

				<h3>Как проходит обучение?</h3>

				<ul>

					<li>
						<p><span>+</span>Мы предлагаем удобный формат, где нет жестких сроков и ограничений по времени.</p>
					</li>

					<li>
						<p><span>+</span>Сразу после оплаты мы регистрируем вас на нашей образовательной платформе.</p>
					</li>

					<li>
						<p><span>+</span>На вашу почту приходит письмо с кодом доступа к программе, и в назначенный срок вы приступаете к обучению.</p>
					</li>

					<li>
						<p><span>+</span>Занятия проходят в формате видеоуроков с подробным описанием всех процессов.</p>
					</li>

					<li>
						<p><span>+</span>Кроме самих уроков мы предоставляем сопроводительные материалы: карту цветов карандашей, используемых в работе, образец фото для распечатки референса.</p>
					</li>

					<li>
						<p><span>+</span>Обучение проходит в небольшой группе, с ограниченным количеством участников.</p>
					</li>

					<li>
						<p><span>+</span>Педагог проверяет ваши работы по фотографиям, отправленным на проверку.</p>
					</li>

					<li>
						<p><span>+</span>Далее вы получаете развёрнутый видео отзыв, в котором он даёт рекомендации по каждой вашей картине.</p>
					</li>

					<li>
						<p><span>+</span>Уроки и подробный разбор домашнего задания можно смотреть в любое время на любых устройствах.</p>
					</li>

					<li>
						<p><span>+</span>Вы сами планируете расписание и скорость обучения.</p>
					</li>

					<li>
						<p><span>+</span>Доступ к курсу даётся сроком от 12 месяцев (есть расширенный тариф с доступом на 2 года).</p>
					</li>

					<li>
						<p><span>+</span>Пока есть доступ можно пересматривать уроки бесчисленное количество раз.</p>
					</li>

				</ul>

			</div>
		</section>

		<section class="resultat">
			<div class="container">

				<h2>Результаты курса</h2>

				<div class="resultat__list">
				
					<div class="resultat__item">

						<div class="resultat__header">
							<p>Сертификат</p>
							<div class="resultat__header_change"></div>
						</div>

						<div class="resultat__dropdown">
							<p>
								По окончанию курса, при условии выполнения всех домашних работ, вы получите сертификат о прохождении курса "Техника рисунка цветными карандашами".
							</p>
						</div>

					</div>

					<div class="resultat__item">

						<div class="resultat__header">
							<p>Знания</p>
							<div class="resultat__header_change"></div>
						</div>

						<div class="resultat__dropdown">
							<p>
								Вы получите не только теоретические, но и практические знания основных принципов рисования, без которых не обойтись настоящему художнику.
							</p>
						</div>

					</div>

					<div class="resultat__item">

						<div class="resultat__header">
							<p>Портфолио</p>
							<div class="resultat__header_change"></div>
						</div>

						<div class="resultat__dropdown">
							<p>
								По итогу курса у вас будет богатое портфолио - 20 ярких работ, которые затрагивают различные темы изобразительного искусства.
							</p>
						</div>

					</div>

					<div class="resultat__item">

						<div class="resultat__header">
							<p>Любимое дело</p>
							<div class="resultat__header_change"></div>
						</div>

						<div class="resultat__dropdown">
							<p>
								Вы сможете самостоятельно продолжать развивать свои навыки рисунка и получать удовольствие от любимого дела.
							</p>
						</div>

					</div>

					<div class="resultat__item">

						<div class="resultat__header">
							<p>Мастерство</p>
							<div class="resultat__header_change"></div>
						</div>

						<div class="resultat__dropdown">
							<p>
								Вы сможете рисовать объекты с отличной детализацией даже мелких элементов, приближенно к реализму 
							</p>
						</div>

					</div>

					<div class="resultat__item">

						<div class="resultat__header">
							<p>Дополнительный доход</p>
							<div class="resultat__header_change"></div>
						</div>

						<div class="resultat__dropdown">
							<p>
								Рассматриваете рисование как средство заработка? После курса вы сможете рисовать портреты домашних любимцев на заказ, создавать иллюстрации для книг, разрабатывать индивидуальные эскизы для тату.
							</p>
						</div>

					</div>

				</div>
			</div>
		</section>

		<section class="complekt">
			<div class="container complekt__container">
				<h2>Комплект курсов по выгодной цене</h2>
				<p>Приобритайте 2 курса и получите дополнительную скидку в 20%</p>
				<div class="complekt__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/complect.png" alt=""></div>
			</div>
		</section>

		<section class="elements">
			<div class="container">
				
				<div class="elements__title">
					<h2><span>Часть 1.</span> Основы графики <span><br>+</span><br></h2>
					<h2> <span>Часть 2.</span> Живая природа</h2>
				</div>

				<div class="elements__list">
					<ul>
						<li><span>+</span>25 уроков</li>
						<li><span>+</span>100 часов практики</li>
						<li><span>+</span>56 часов видеоматериалов</li>
						<li><span>+</span>20 итоговых робот + техзадание</li>
						<li><span>+</span>Обратная связь от преподавателя</li>
					</ul>
				</div>

				<div class="record__block elements__block">
					<div class="record__right elements__left">

						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/form_bg.png" alt="">
						
						<form action="sendmail.php" class="form record__form" method="post">

							<h3>Запишись на полный курс <br> <span>«Основы графики» + «Живая природа»</span></h3>

							<div class="checkbox">
								<input type="radio" id="sec_price" name="second">
								<label for="sec_price"><span>Участие без проверки</span><s>7 500</s>5 000 рублей</label>
							</div>

							<div class="checkbox">
								<input type="radio" id="sec_small" name="second">
								<label for="sec_small"><span>Участие с проверкой</span><s>9 000</s>10 000 рублей</label>
							</div>

							<input type="hidden" name="subject" value="Узнать подробнее!">
							<div class="record__form_in">
								<input type="text" name="name" placeholder="Введите Ваше имя" required>
							</div>
							<div class="">
								<input type="tel" name="phone" required placeholder="Введите Ваш телефон">
							</div>
							<div class="">
								<input type="email" name="mail" required placeholder="Введите Ваш Email">
							</div>
							<div class="record__btn">
								<button type="submit" class="btn" name="submit">Записаться</button>
							</div>

						</form>

					</div>
				</div>

				<div class="elements__right">

					<div class="elements__right_first">
						
						<h3>Обучаюсь самостоятельно:</h3>

						<ul>
							<li><span>+</span> 25 уроков по 1,5 - 3 часа;</li>
							<li><span>+</span> 20 законченных работ + технические задания;</li>
							<li><span>+</span> 56 часов подробных видеоматериалов;</li>
							<li><span>+</span> Техподдержка куратора курса;</li>
							<li><span>+</span> Доступа к программе 24 месяцев;</li>
							<li><span>+</span> Общий чат.</li>
						</ul>

					</div>
					
					<div class="elements__right_second">
						
						<h3>С проверкой и сопровождением:</h3>

						<ul>
							<li><span>+</span> 25 уроков по 1,5 - 3 часа;</li>
							<li><span>+</span> 20 законченных работ + технические задания;</li>
							<li><span>+</span> 56 часов подробных видеоматериалов;</li>
							<li><span>+</span> Техподдержка куратора курса;</li>
							<li><span>+</span> Доступа к программе 24 месяцев ;</li>
							<li><span>+</span> Общий чат;</li>
							<li><span>+</span> Обратная cвязь с преподавателем - 24 месяцев;</li>
							<li><span>+</span> Рекомендации педагога по каждой работе;</li>
							<li><span>+</span> Сертификат о прохождении курса.</li>
						</ul>

					</div>

				</div>

			</div>
		</section>

		<section class="seven">
			<div class="container seven__container">

				<h1>7 причин учиться у нас </h1>

				<div>
					<span>Много практики</span>
					<p>
						Вас ждут не только теоретические знания, но и большое количество практических заданий, выполняя которые вы затронете разные темы изобразительного искусства.
					</p>
				</div>

				<div>
					<span>Программа</span>
					<p>
						Курс создавался и дорабатывался более 2 лет. Это концентрат 15-летнего опыта нашего ведущего художника. Дмитрий делится накопленными знаниями, показывает собственные техники и приемы, которые помогут вашим работам выйти на новый уровень мастерства.
					</p>
				</div>

				<div>
					<span>Качество видео-уроков</span>
					<p>
						Уроки записаны детально, с подробным описанием самого процесса. Мы не только рассказываем, что делаем во время урока, но и объясняем почему именно так, а не иначе. Это не короткие занятия, записанные на мобильный телефон с плохим звуком, а видео с хорошим монтажом, снятое на профессиональную камеру.

					</p>
				</div>

				<div>
					<span>Обратная связь</span>
					<p>
						Преподаватель подробно проверяет картины, чтобы вы, в случае необходимости, могли произвести работу над ошибками и выполнить задание на высоте своих возможностей.  Мы хотим, чтобы наши ученики добивались максимума в работе, так как это положительно влияет на репутацию самой школы.
					</p>
				</div>

				<div>
					<span>Удобство</span>
					<p>
						Обучение по онлайн-программе дает вам возможность рисовать у себя дома в удобное время. Вы будете общаться с единомышленниками, сможете видеть их работы и обмениваться опытом в общем чате.
					</p>
				</div>

				<div>
					<span>Доступ к занятиям</span>
					<p>
						Вы получаете доступ к урокам на продолжительный промежуток времени и можете проходить обучение не торопясь, выполняя каждое задание с усердием и внимательностью.
					</p>
				</div>

				<div>
					<span>Цены</span>
					<p>
						Хороший курс для широкой аудитории обязан быть доступным. Если разделить стоимость обучения на количество часов, вы увидите, что час обучения у нас стоит около 80 рублей, что намного дешевле чем в других школах. Мы предусмотрели разные варианты участия, чтобы ученик мог выбрать оптимальный пакет.
					</p>
				</div>

				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/author1.png" alt="" class="seven__str">

			</div>
		</section>

		<section class="author">
			<div class="container author__container">

				<div class="author__cover">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/author.png" alt="">
				</div>

				<div class="author__text">

					<h2>Автор курса – Дмитрий Казимиров</h2>
					
					<p>
						<span>+</span>Ведущий художник и основатель проекта «ProKarandash»
					</p>
					<p>
						<span>+</span>Основатель первого центра аэрографии в Санкт-Петербурге
					</p>
					<p>
						<span>+</span>С 2007 по 2013 – ведущий художник в первом центре аэрографии в Санкт-Петербурге
					</p>
					<p>
						<span>+</span>Призёр Международного фестиваля по аэрографии «Аэрограф» в 2009 и 2010
					</p>
					<p>
						<span>+</span>Основатель школы Аэрографии в СПб
					</p>
					<p>
						<span>+</span>Работы Дмитрия постоянно публикуют в сообществах с миллионной аудиторией в Vk и Instagram.
					</p>
					<p>
						<span>+</span>Более 10 лет Дмитрий преподаёт в области изобразительного искусства
					</p>
					<p>
						<span>+</span>Автор нескольких программ обучения по аэрографии
					</p>
					<p>
						<span>+</span>С 2017 по 2018 разработал курс по графике «Техника рисунка цветными карандашами»
					</p>
					<p>
						<span>+</span>9 лет – опыт преподавания в своей школе аэрографии
					</p>
					<p>
						<span>+</span>2 года – опыт ведения онлайн уроков по рисунку цветными карандашами
					</p>

					<b>Работы Дмитрия и его учеников говорят сами за себя!</b>

				</div>

			</div>
		</section>
		
		<section class="teacher">
			<div class="container">

				<h2>работы преподавателя</h2>
				
				<div class="swiper-container teacher__slider">
					<div class="swiper-wrapper">

						<div class="swiper-slide">
							<a href="<?php echo get_template_directory_uri(); ?>/assets/img/teacher1.png" data-fancybox="gallery2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/teacher1.png" alt=""></a>
						</div>

						<div class="swiper-slide">
							<a href="<?php echo get_template_directory_uri(); ?>/assets/img/teacher2.png" data-fancybox="gallery2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/teacher2.png" alt=""></a>
						</div>

						<div class="swiper-slide">
							<a href="<?php echo get_template_directory_uri(); ?>/assets/img/teacher3.png" data-fancybox="gallery2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/teacher3.png" alt=""></a>
						</div>

						<div class="swiper-slide">
							<a href="<?php echo get_template_directory_uri(); ?>/assets/img/teacher4.png" data-fancybox="gallery2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/teacher4.png" alt=""></a>
						</div>

						<div class="swiper-slide">
							<a href="<?php echo get_template_directory_uri(); ?>/assets/img/teacher5.png" data-fancybox="gallery2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/teacher5.png" alt=""></a>
						</div>

						<div class="swiper-slide">
							<a href="<?php echo get_template_directory_uri(); ?>/assets/img/teacher1.png" data-fancybox="gallery2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/teacher1.png" alt=""></a>
						</div>

						<div class="swiper-slide">
							<a href="<?php echo get_template_directory_uri(); ?>/assets/img/teacher2.png" data-fancybox="gallery2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/teacher2.png" alt=""></a>
						</div>

						<div class="swiper-slide">
							<a href="<?php echo get_template_directory_uri(); ?>/assets/img/teacher3.png" data-fancybox="gallery2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/teacher3.png" alt=""></a>
						</div>

						<div class="swiper-slide">
							<a href="<?php echo get_template_directory_uri(); ?>/assets/img/teacher4.png" data-fancybox="gallery2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/teacher4.png" alt=""></a>
						</div>

						<div class="swiper-slide">
							<a href="<?php echo get_template_directory_uri(); ?>/assets/img/teacher5.png" data-fancybox="gallery2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/teacher5.png" alt=""></a>
						</div>

					</div>

					<div class="swiper-pagination teacher__prev"></div>
				</div>
			</div>
		</section>

		<section class="inst">
			<div class="container inst__container">

				<div class="inst__top">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ins_top.png" alt="">
				</div>

				<div class="inst__title">
					<h2>Вопросы-Ответы</h2>
				</div>

				<div class="inst__list">

					<div class="inst__item">

						<div class="inst__header">
							<p>Какие инструменты потребуются для обучения?</p>
							<div class="inst__header_change"></div>
						</div>

						<div class="inst__dropdown">
							<p>
								1 Для работы понадобиться набор цветных карандашей на масляной или восковой основе (не менее 48 штук в наборе).
							</p>
							<p>
								Марки карандашей, которые точно подойдут:
							</p>
							<ul>
								<li>KOH-I-NOOR "Polycolor" – 72 цвета. </li>
								<li>DERWENT "Procolour", "Colorsoft" – 72 цвета.</li>
								<li>FABER-CASTELL "Polychromos" – 60 цветов. </li>
								<li>LYRA Rembrandt "Polycolor" – 36 цветов.</li>
								<li>Prismacolor Premier – 72-150 цветов.</li>
							</ul>
							<p>Самый бюджетный вариант – карандаши Brutfuner - 160 цветов</p>
							<p>
								2 Любая гладкая бумага для графики. Формат А4, цвет белый, плотность не ниже 180 грамм.
								Можно поштучно приобрести бумагу Canson Iris Vivaldi (240 г) в магазине для художников. На крайний случай используйте обычную бумагу для черчения.
							</p>
							<p>3 Простой карандаш (2Н, например).</p>
							<p>4 Белая и чёрная краска на водной основе. (акрил или гуашь).</p>
							<p>5 Кисть с острым кончиком (синтетика №4, например).</p>
							<p>6 Обычный и электрический ластик для цветных карандашей.</p>
						</div>

					</div>

					<div class="inst__item">

						<div class="inst__header">
							<p>Какая общая стоимость всех инструментов, необходимых для обучения?</p>
							<div class="inst__header_change"></div>
						</div>

						<div class="inst__dropdown">
							<p>
								От 2500 в зависимости от вашего бюджета.
							</p>
						</div>

					</div>

					<div class="inst__item">

						<div class="inst__header">
							<p>Подойдут ли акварельные или пастельные карандаши?</p>
							<div class="inst__header_change"></div>
						</div>

						<div class="inst__dropdown">
							<p>
								Акварельные подойдут для нашей программы, но надо учитывать, что они более твердые чем карандаши на восковой или масляной основе, поэтому рисунки такими карандашами могут получиться менее яркими.
							</p>
							<p>Пастельные, к сожалению, не подойдут.</p>
						</div>

					</div>

					<div class="inst__item">

						<div class="inst__header">
							<p>Нужен ли мольберт для рисования карандашами?</p>
							<div class="inst__header_change"></div>
						</div>

						<div class="inst__dropdown">
							<p>
								Мольберт не нужен. Для нормальной, комфортной работы нужен удобный стул, стол и хорошо освещённое рабочее место. 
							</p>
						</div>

					</div>

					<div class="inst__item">

						<div class="inst__header">
							<p>Можно ли выбрать другую дату начала обучения?</p>
							<div class="inst__header_change"></div>
						</div>

						<div class="inst__dropdown">
							<p>
								Да, конечно, мы набираем учебные группы каждые две недели. Свяжитесь с нашим менеджером, чтобы запланировать дату.
							</p>
						</div>

					</div>

					<div class="inst__item">

						<div class="inst__header">
							<p>Могу ли я приобрести ваш курс в подарок?</p>
							<div class="inst__header_change"></div>
						</div>

						<div class="inst__dropdown">
							<p>
								Если вы хотите подарить наш курс другу или близкому человеку, мы сделаем для вас красивый подарочный сертификат. 
							</p>
							<p>
								Приобретите курс на свое имя и напишите нам через форму обратной связи имя и фамилию получателя сертификата. Наш менеджер вскоре ответит вам и вышлет на почту красивый сертификат, готовый к печати.
							</p>
						</div>

					</div>
					
				</div>

			</div>
		</section>

		<section class="question">
			<div class="container question__container">

				<div class="question__img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/question.png" alt="">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/question_b.png" alt="">
				</div>

				<div class="question__bot">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ins_bottom.png" alt="">
				</div>

				<div>

					<h2>Остались вопросы? <span>Напишите нам!</span></h2>

					<form action="sendmail.php" class="form question__form" method="post">

							<input type="hidden" name="subject" value="Узнать подробнее!">
							<div class="">
								<input type="text" name="name" placeholder="Ваше имя" required>
							</div>
							<div class="">
								<input type="tel" name="phone" required placeholder="Ваш номер телефона">
							</div>

							<textarea name="content" rows="5" placeholder="Ваше сообщение" data-required="true" required="" class="question__form_textarea"></textarea>

							<div class="question__button">

								<button type="submit" class="btn question__btn" name="submit">Отправить</button>
							</div>

					</form>

				</div>
			</div>
		</section>

	</main>

<?php get_footer(); ?>