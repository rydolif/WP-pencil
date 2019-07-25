<?php get_header(); ?>

	<main class="main">

		<section class="hero error-page" id="hero">
			<div class="container error-page__container hero__container">

				<a href="<?php echo get_home_url(); ?>/#about" class="error-page__logo">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo">
					<div class="hero__logo_text">
						<p>prokarandash</p>
						<span>Онлайн школа рисунка</span>
					</div>
				</a>

				<h1>К сожалению данная страница не найдена!</h1>
					
				<div class="">
					<a href="<?php echo get_home_url(); ?>" class="btn hero__btn">Главная</a>
				</div>

			</div>
		</section>
		
	</main>

<?php get_footer(); ?>