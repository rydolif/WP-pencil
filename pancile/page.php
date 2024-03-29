<?php get_header(); ?>

	<main class="main">

		<section class="hero" id="hero">
			<div class="container hero__container">

				<div class="hero__left">

					<div class="hero__logo click">
						<a href="#about" class="click">
							<img
                                    src="data:image/gif;base64,R0lGODlhCgAUAIAAAP///wAAACH5BAEAAAEALAAAAAAKABQAAAIMjI+py+0Po5y02usKADs="
                                    alt="logo"
                                    class="lazy"
                                    data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png 1x"
                            >
							<div class="hero__logo_text">
								<p>prokarandash</p>
								<span>Онлайн школа рисунка</span>
							</div>
						</a>
						
					</div>

					<h1><?php the_field('title'); ?></h1>

					<?php if( have_rows('title--list') ): ?>
						<ul>
						<?php while( have_rows('title--list') ): the_row(); 
							$text = get_sub_field('text');
							?>

							<li><span>+</span><?php echo $text; ?></li>

						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
						
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
					<img
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/3.png"
                            alt="photo"
                            class="lazy"
                    >
					<img
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/strujka.png"
                            alt="photo"
                            class="lazy"
                    >
				</div>

				<div class="about__list">

					<div class="about__item">
						<span>25 уроков</span>
						<p>Продолжительность уроков 1,5 - 3 часа. Вас ждет большое количество теории и практики.</p>
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

				<div class="about__adp">
                    <img
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/photo.png"
                            alt="photo"
                            class="lazy"
                    >
                </div>

				<div class="about__text">
					<div class="about__photo">
                        <img
                                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="
                                data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/photo.png"
                                alt="photo"
                                class="lazy"
                        >
                    </div>
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

				<div class="program__photo">
                    <img
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/prog_img.png"
                            alt="photo"
                            class="lazy"
                    >
                </div>

				<div class="program__list">

					<div class="program__item">
						<img
                                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="
                                data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/program1.png"
                                alt="photo"
                                class="lazy"
                        >
						<span>Новички</span>
						<p>
							Этот курс подойдёт тем, кто только начинает свой творческий путь.
						</p>
						<p>
							Мы поможем реализовать ваш потенциал в полном объёме. Сложность уроков возрастает постепенно.</p>
						<p>На каждом занятии вы будете осваивать новые техники и секреты, которые упростят весь процесс обучения.</p>

					</div>

					<div class="program__item">
						<img
                                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="
                                data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/program2.png"
                                alt="photo"
                                class="lazy"
                        >
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

				<?php if( have_rows('works') ): ?>
					<div class="swiper-container works__slider">
						<div class="swiper-wrapper">
							<?php while( have_rows('works') ): the_row(); 
								$url = get_sub_field('url');
							?>

								<div class="swiper-slide">
									<a href="<?php echo $url; ?>" data-fancybox="gallery">
										<img
                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="
                                                data-srcset="<?php echo $url; ?>"
                                                alt="photo"
                                                class="lazy"
                                        >
									</a>
								</div>

							<?php endwhile; ?>
						</div>
						<div class="works__pagination swiper-pagination"></div>
						<div class="works__next swiper-button-next"></div>
						<div class="works__prev swiper-button-prev"></div>
					</div>
				<?php endif; ?>

			</div>
		</section>

		<section class="reviews">

			<div class="container reviews__container">
				
				<div class="reviews__title"><h2>Отзывы наших учеников</h2></div>
			
				<?php if( have_rows('reviews') ): ?>
					<div class="swiper-container reviews__slider">
						<div class="swiper-wrapper">
							<?php while( have_rows('reviews') ): the_row(); 
								$text = get_sub_field('text');
								$name = get_sub_field('name');
								$date = get_sub_field('date');
								$img = get_sub_field('img');
							?>

								<div class="swiper-slide reviews__slide">
									<div class="reviews__slide_wrap">
										<p>
											<?php echo $text; ?>
										</p>
										<div class="reviews__slide_info">
											<p><?php echo $name; ?> <time datetime="2018-07-24"><?php echo $date; ?></time></p>
											<img
                                                    src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="
                                                    data-srcset="<?php echo $img; ?>"
                                                    alt="photo"
                                                    class="lazy"
                                            >
										</div>
									</div>
								</div>

							<?php endwhile; ?>
						</div>
						<div class="swiper-pagination"></div>
						<div class="reviews__next swiper-button-next"></div>
						<div class="reviews__prev swiper-button-prev"></div>
					</div>
				<?php endif; ?>

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
					<img
                            src="data:image/gif;base64,R0lGODlhZAXHBIAAAP///wAAACH5BAEAAAEALAAAAABkBccEAAL+jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vP09fb3+Pn6+/z9/v/w8woMCBBAsaPIgwocKFDBs6fAgxosSJFCtavIgxo8b+jRw7evwIMqTIkSRLmjyJMqXKlSxbunwJM6bMmTRr2ryJM6fOnTx7+vwJNKjQoUSLGj2KNKnSpUybOn0KNarUqVSrWr2KNavWrVy7ev0KNqzYsWTLmj2LNq3atWzbun0LN67cuXTr2r2LN6/evXz7+v0LOLDgwYQLGz6MOLHixYwbO34MObLkyZQrW76MObPmzZw7e/4MOrTo0aRLmz6NOrXq1axbu34NO7bs2bRr276NO7fu3bx7+/4NPLjw4cSLGz+OPLny5cybO38OPbr06dSrW7+OPbv27dy7e/8OPrz48eTLmz+PPr369ezbu38PP778+fTr27+PP7/+/fz++/v/D2CAAg5IYIEGHohgggouyGCDDj4IYYQSTkhhhRZeiGGGGm7IYYcefghiiCKOSGKJJp6IYooqrshiiy6+CGOMMs5IY4023ohjjjruyGOPPv4IZJBCDklkkUYeiWSSSi7JZJNOPglllFJOSWWVVl6JZZZabslll15+CWaYYo5JZplmnolmmmquyWabbr4JZ5xyzklnnXbeiWeeeu7JZ59+/glooIIOSmihhh6KaKKKLspoo44+Cmmkkk5KaaWWXopppppuymmnnn4Kaqiijkpqqaaeimqqqq7KaquuvgprrLLOSmuttt6Ka6667sprr77+Cmywwg5LbLHGHov+bLLKLstss84+C2200k5LbbXWXottttpuy2233n4Lbrjijktuueaei2666q7LbrvuvgtvvPLOS2+99t6Lb7767stvv/7+C3DAAg9McMEGH4xwwgovzHDDDj8MccQST0xxxRZfjHHGGm/McccefwxyyCKPTHLJJp+Mcsoqr8xyyy6/DHPMMs9Mc80234xzzjrvzHPPPv8MdNBCD0100UYfjXTSSi/NdNNOPw111FJPTXXVVl+NddZab811115/DXbYYo9Ndtlmn4122mqvzXbbbr8Nd9xyz0133XbfjXfeeu/Nd99+/w144IIPTnjhhh+OeOKKL854444/Dnnkkk/+Tnnlll+Oeeaab855555/Dnrooo9Oeummn4566qqvznrrrr8Oe+yyz0577bbfjnvuuu/Oe+++/w588MIPT3zxxh+PfPLKL898884/D3300k9PffXWX4999tpvz3333n8Pfvjij09++eafj3766q/Pfvvuvw9//PLPT3/99t+Pf/76789///7/D8AACnCABCygAQ+IwAQqcIEMbKADHwjBCEpwghSsoAUviMEManCDHOygBz8IwhCKcIQkLKEJT4jCFKpwhSxsoQtfCMMYynCGNKyhDW+IwxzqcIc87KEPfwjEIApxiEQsohGPiMQkKnGJTGyiE58IxShKcYpUrKL+Fa+IxSxqcYtc7KIXvwjGMIpxjGQsoxnPiMY0qnGNbGyjG98IxzjKcY50rKMd74jHPOpxj3zsox//CMhACnKQhCykIQ+JyEQqcpGMbKQjHwnJSEpykpSspCUviclManKTnOykJz8JylCKcpSkLKUpT4nKVKpylaxspStfCctYynKWtKylLW+Jy1zqcpe87KUvfwnMYApzmMQspjGPicxkKnOZzGymM58JzWhKc5rUrKY1r4nNbGpzm9zspje/Cc5winOc5CynOc+JznSqc53sbKc73wnPeMpznvSspz3vic986nOf/OynP/8J0IAKdKAELahBD4rQhCp0oQxtqEP+HwrRiEp0ohStqEUvitGManSjHO2oRz8K0pCKdKQkLalJT4rSlKp0pSxtqUtfCtOYynSmNK2pTW+K05zqdKc87alPfwrUoAp1qEQtqlGPitSkKnWpTG2qU58K1ahKdapUrapVr4rVrGp1q1ztqle/CtawinWsZC2rWc+K1rSqda1sbatb3wrXuMp1rnStq13vite86nWvfO2rX/8K2MAKdrCELaxhD4vYxCp2sYxtrGMfC9nISnaylK2sZS+L2cxqdrOc7axnPwva0Ip2tKQtrWlPi9rUqna1rG2ta18L29jKdra0ra1tb4vb3Op2t7ztrW9/C9zgCne4xC2ucY/+i9zkKne5zG2uc58L3ehKd7rUra51r4vd7Gp3u9ztrne/C97wine85C2vec+L3vSqd73sba973wvf+Mp3vvStr33vi9/86ne//O2vf/8L4AALeMAELrCBD4zgBCt4wQxusIMfDOEIS3jCFK6whS+M4QxreMMc7rCHPwziEIt4xCQusYlPjOIUq3jFLG6xi18M4xjLeMY0rrGNb4zjHOt4xzzusY9/DOQgC3nIRC6ykY+M5CQreclMbrKTnwzlKEt5ylSuspWvjOUsa3nLXO6yl78M5jCLecxkLrOZz4zmNKt5zWxus5vfDOc4y3nOdK6zne+M5zzrec987rOf/wz26EALetCELrShD43oRCt60YxutKMfDelIS3rSlK60pS+N6UxretOc7rSnPw3qUIt61KQutalPjepUq3rVrG61q18N61jLeta0rrWtb43rXOt617zuta9/DexgC3vYxC62sY+N7GQre9nMbraznw3taEt72tSutrWvje1sa3vb3O62t78N7nCLe9zkLre5z43udKt73exut7vfDe94y3ve9K63ve+N73zre9/87re//w3wgAt84AQvuMEPjvCEK3zhDG+4wx8O8YhLfOIUr7jFL47xjGt84xzvuMc/DvKQi3zkJC+5yU+O8pSrfOUsb7nLXw5zsRYAADs="
                            data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/tems1.png"
                            alt="photo"
                            class="lazy learn__tems_bg"
                    >
					
					<div class="learn__list">
						<h2>Темы, которые мы разберём</h2>
						<ul>
							
							<li>
								<img
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/mark.png"
                                        alt="photo"
                                        class="lazy"
                                >
								<p>Материалы и инструменты необходимые в работе;</p>
							</li>
							
							<li>
                                <img
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/mark.png"
                                        alt="photo"
                                        class="lazy"
                                >
								<p>Выбор цветных карандашей, разбор марок и фирм;</p>
							</li>
							
							<li>
                                <img
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/mark.png"
                                        alt="photo"
                                        class="lazy"
                                >
								<p>Техника штриха и плотный закрас;</p>
							</li>
							
							<li>
                                <img
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/mark.png"
                                        alt="photo"
                                        class="lazy"
                                >
								<p>Бумага для графики. Kак ее цвет и фактура влияет на результат;</p>
							</li>
							
							<li>
                                <img
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/mark.png"
                                        alt="photo"
                                        class="lazy"
                                >
								<p>Цветоведение – свет и цвет в рисунке;</p>
							</li>
							
							<li>
                                <img
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/mark.png"
                                        alt="photo"
                                        class="lazy"
                                >
								<p>Цветовой круг Итенна;</p>
							</li>
							
							<li>
                                <img
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/mark.png"
                                        alt="photo"
                                        class="lazy"
                                >
								<p>Теплые. холодные цвета и цветовые комбинации;</p>
							</li>
							
							<li>
                                <img
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/mark.png"
                                        alt="photo"
                                        class="lazy"
                                >
								<p>Воздушная и линейная перспектива;</p>
							</li>
							
							<li>
                                <img
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/mark.png"
                                        alt="photo"
                                        class="lazy"
                                >
								<p>Глубина в работе и тональный контраст;</p>
							</li>
							
							<li>
                                <img
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/mark.png"
                                        alt="photo"
                                        class="lazy"
                                >
								<p>Создание текстур. Особенности и техники;</p>
							</li>
							
							<li>
                                <img
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/mark.png"
                                        alt="photo"
                                        class="lazy"
                                >
								<p>Передача материала и поверхностей предметов;</p>
							</li>
							
							<li>
                                <img
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/mark.png"
                                        alt="photo"
                                        class="lazy"
                                >
								<p>Изображение и портреты животных и птиц;</p>
							</li>
							
							<li>
                                <img
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/mark.png"
                                        alt="photo"
                                        class="lazy"
                                >
								<p>Рисование различных видов шерсти;</p>
							</li>
							
							<li>
                                <img
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/mark.png"
                                        alt="photo"
                                        class="lazy"
                                >
								<p>Секрет рисования выразительного взгляда;</p>
							</li>
							
							<li>
                                <img
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/mark.png"
                                        alt="photo"
                                        class="lazy"
                                >
								<p>Правильная расстановка акцентов.</p>
							</li>

						</ul>
					</div>
				</div>


			</div>
		</section>

		<section class="tabs">
			<div class="container tabs__container">

				<h2 id="tabs">Программа курса</h2>
				
				<ul class="tabs__cover">
					<li><a href="#" class="active"><span>Часть 1.</span>Основы графики</a></li>
				</ul>
				<div class="tabs__wrap_list">
					<ul>
						<li><span>+</span>14 уроков</li>
						<li><span>+</span>50 часов практики</li>
						<li><span>+</span>30 часов видеоматериалов</li>
						<li><span>+</span>11 итоговых работ + техзадания обратная связь преподавателя</li>
					</ul>
				</div>

			</div>
		</section>

		<section class="kurs">
			<div class="kurs__container container">
				<h2>Содержание уроков 1 части</h2>

				<?php if( have_rows('lesson1') ): ?>
					<div class="swiper-container kurs__slider">
						<div class="swiper-wrapper">
							<?php while( have_rows('lesson1') ): the_row(); 
								$img = get_sub_field('img');
								$title = get_sub_field('title');
								$text = get_sub_field('text');
							?>
							
							<div class="kurs__slider_slide swiper-slide">
								<img
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-srcset="<?php echo $img; ?>"
                                        alt="photo"
                                        class="lazy"
                                >
								<div class="kurs__slider_text">
									<h3><?php echo $title; ?></h3>
									<p>
										<?php echo $text; ?>
									</p>
								</div>
							</div>

							<?php endwhile; ?>
						</div>
						<div class="kurs__pagination swiper-pagination"></div>
						<div class="kurs__next swiper-button-next"></div>
						<div class="kurs__prev swiper-button-prev"></div>
					</div>
				<?php endif; ?>

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
							<li><span>+</span> Доступ к программе 12 месяцев;</li>
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
							<li><span>+</span> Доступ к программе 12 месяцев;</li>
							<li><span>+</span> Общий чат;</li>
							<li><span>+</span> Обратная cвязь с преподавателем - 12 месяцев;</li>
							<li><span>+</span> Рекомендации педагога по каждой работе;</li>
							<li><span>+</span> Сертификат о прохождении курса.</li>
						</ul>

					</div>

				</div>
				<div class="record__block">
					<div class="record__right">

						<img
                                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="
                                data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/form_bg.png"
                                alt="photo"
                                class="lazy"
                        >
						
						<div class="form record__form">
							<input type="hidden" name="subject" value="Запишитесь на 1 часть «Основы графики»">

							<h3>Запишитесь на 1 часть<br>«Основы графики»</h3>

							<div class="checkbox">
								<input type="radio" id="price2" name="price" value="Участие без проверки">
								<label for="price2"><span>Участие без проверки </span><s><?php the_field('price2--false'); ?></s><?php the_field('price2--true'); ?></label>
							</div>

							<div class="checkbox">
								<input type="radio" id="small2" name="price" value="Участие с проверкой">
								<label for="small2"><span>Участие с проверкой </span><s><?php the_field('small2--false'); ?> </s><?php the_field('small2--true'); ?></label>
							</div>

							<div class="record__btn">
								<button type="submit" id="btn1" class="btn disabled" name="submit">Записаться</button>
							</div>

						</div>

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
				<h2>Содержание уроков 2 части</h2>
				
				
				<?php if( have_rows('lesson2') ): ?>
					<div class="swiper-container kurs__slider">
						<div class="swiper-wrapper">
							<?php while( have_rows('lesson2') ): the_row(); 
								$img = get_sub_field('img');
								$title = get_sub_field('title');
								$text = get_sub_field('text');
							?>
							
							<div class="kurs__slider_slide swiper-slide">
								<img
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-srcset="<?php echo $img; ?>"
                                        alt="photo"
                                        class="lazy"
                                >
								<div class="kurs__slider_text">
									<h3><?php echo $title; ?></h3>
									<p>
										<?php echo $text; ?>
									</p>
								</div>
							</div>

							<?php endwhile; ?>
						</div>
						<div class="kurs__pagination swiper-pagination"></div>
						<div class="kurs__next swiper-button-next"></div>
						<div class="kurs__prev swiper-button-prev"></div>
					</div>
				<?php endif; ?>

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
							<li><span>+</span> Доступ к программе 12 месяцев;</li>
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
							<li><span>+</span> Доступ к программе 12 месяцев;</li>
							<li><span>+</span> Общий чат.</li>
							<li><span>+</span> Обратная cвязь с преподавателем - 12 месяцев;</li>
							<li><span>+</span> Рекомендации педагога по каждой работе;</li>
							<li><span>+</span> Сертификат о прохождении курса.</li>
						</ul>

					</div>
				</div>

				<div class="record__block">
					<div class="record__right">

						<img
                                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="
                                data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/form_bg.png"
                                alt="photo"
                                class="lazy"
                        >
						
						<form action="sendmail.php" class="form record__form" method="post">
							<input type="hidden" name="subject" value="Запишитесь на 2 часть «Живая природа»">

							<h3>Запишитесь на 2 часть <br>«Живая природа»</h3>

							<div class="checkbox">
								<input type="radio" id="price1" name="price1" value="Участие без проверки">
								<label for="price1"><span>Участие без проверки <br></span><s><?php the_field('price1--false'); ?></s><?php the_field('price1--true'); ?></label>
							</div>

							<div class="checkbox">
								<input type="radio" id="small" name="price1" value="Участие с проверкой">
								<label for="small"><span>Участие с проверкой <br></span><s><?php the_field('small--false'); ?> </s><?php the_field('small--true'); ?></label>
							</div>

							<div class="record__btn">
								<button type="submit" class="btn disabled" id="btn2" name="submit">Записаться</button>
							</div>

						</form>
					</div>
				</div>

			</div>
		</section>

		<section class="how">

			<img
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="
                    data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/how_left.png"
                    alt="img"
                    class="lazy how__left"
            >
			<img
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="
                    data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/how_right.png"
                    alt="img"
                    class="lazy how__right"
            >

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
				<p>Приобретайте 2 курса и получите дополнительную скидку в 20%</p>
				<div class="complekt__img">
                    <img
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/complect.png"
                            alt="img"
                            class="lazy"
                    >
                </div>
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

				<div class="elements__wrap">
					<div class="record__block elements__block">
						<div class="record__right elements__left">

							<img
                                    src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/form_bg.png"
                                    alt="img"
                                    class="lazy"
                            >
							
							<form action="sendmail.php" class="form record__form" method="post">
								<input type="hidden" name="subject" value="Запишись на полный курс «Основы графики» + «Живая природа»">

								<h3>Запишись на полный курс <br> <span>«Основы графики» + «Живая природа»</span></h3>

								<div class="checkbox">
									<input type="radio" id="sec_price" name="second" value="Участие без проверки">
									<label for="sec_price"><span>Участие без проверки</span><s><?php the_field('sec_price--false'); ?></s><?php the_field('sec_price--true'); ?></label>
								</div>

								<div class="checkbox">
									<input type="radio" id="sec_small" name="second" value="Участие с проверкой">
									<label for="sec_small"><span>Участие с проверкой</span><s><?php the_field('sec_small--false'); ?></s><?php the_field('sec_small--true'); ?></label>
								</div>

								<div class="record__btn">
									<button type="submit" class="btn disabled" id="btn3" name="submit">Записаться</button>
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
								<li><span>+</span> Доступ к программе 24 месяцев;</li>
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
								<li><span>+</span> Доступ к программе 24 месяцев ;</li>
								<li><span>+</span> Общий чат;</li>
								<li><span>+</span> Обратная cвязь с преподавателем - 24 месяцев;</li>
								<li><span>+</span> Рекомендации педагога по каждой работе;</li>
								<li><span>+</span> Сертификат о прохождении курса.</li>
							</ul>

						</div>

					</div>
				</div>

			</div>
		</section>

		<section class="seven">
			<div class="container seven__container">

				<h2>7 причин учиться у нас </h2>

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

				<img
                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="
                        data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/author1.png"
                        alt="img"
                        class="lazy seven__str"
                >

			</div>
		</section>

		<section class="author">
			<div class="container author__container">

				<div class="author__cover">
					<img
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/author.png"
                            alt="img"
                            class="lazy"
                    >
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

				<?php if( have_rows('teacher') ): ?>
					<div class="swiper-container teacher__slider">
						<div class="swiper-wrapper">
							<?php while( have_rows('teacher') ): the_row(); 
								$img = get_sub_field('img');
							?>
							
							<div class="swiper-slide">
								<a href="<?php echo $img; ?>" data-fancybox="gallery2">
									<img
                                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="
                                            data-srcset="<?php echo $img; ?>"
                                            alt="img"
                                            class="lazy"
                                    >
								</a>
							</div>

							<?php endwhile; ?>
						</div>
						<div class="swiper-pagination teacher__pagination"></div>
						<div class="teacher__next swiper-button-next"></div>
						<div class="teacher__prev swiper-button-prev"></div>
					</div>
				<?php endif; ?>


				<a href="#" class="btn btn--demo hero__btn demo_open">Получить демо-доступ к курсу</a>

			</div>
		</section>

		<section class="inst">
			<div class="container inst__container">

				<div class="inst__top">
					<img
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/ins_top.png"
                            alt="img"
                            class="lazy"
                    >
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
            <div class="absolute"></div>
			<div class="container question__container">

				<div class="question__img">
					<img
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/question.png"
                            alt="img"
                            class="lazy"
                    >
					<img
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/question_b.png"
                            alt="img"
                            class="lazy"
                    >
				</div>

				<div class="question__bot">
					<img
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/ins_bottom.png"
                            alt="img"
                            class="lazy"
                    >
				</div>

				<div>

					<h2>Остались вопросы? <span>Напишите нам!</span></h2>

					<form action="sendmail.php" class="form question__form" method="post">
						<input type="hidden" name="subject" value="Остались вопросы? Напишите нам!">

						<input type="hidden" name="subject" value="Узнать подробнее!">
						<div class="">
							<input type="text" name="name" placeholder="Ваше имя" required>
						</div>
						<div class="">
							<input type="tel" name="phone" placeholder="Ваш номер телефона" required>
						</div>

						<div class="">
							<textarea name="content" rows="5" placeholder="Ваше сообщение" data-required="true" required="" class="question__form_textarea" required></textarea>
						</div>

						<div class="question__button">

							<button type="submit" class="btn question__btn" name="submit">Отправить</button>
						</div>

					</form>

				</div>
			</div>
		</section>

	</main>

<?php get_footer(); ?>
