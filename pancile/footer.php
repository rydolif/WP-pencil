

	<footer class="footer">
		<div class="container footer__container">

			<div class="hero__logo footer__logo click">
				<a href="#hero">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo">

					<div class="hero__logo_text">
						<p>prokarandash</p>
						<span>Он
						лайн школа рисунка</span>
					</div>
				</a>
			</div>

			<div class="footer__click click">
				<ul>
					<li class="click"><a href="#hero">Главная</a></li>
					<li class="click"><a href="#about">О нас</a></li>
					<li class="click"><a href="#program">Пограммы</a></li>
				</ul>
			</div>

			<div class="footer__soc">
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/email.png" alt="" class="footer__soc_adp"></a>
				<a href="mailto:<?php the_field('mail'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/email.png" alt=""><?php the_field('mail'); ?></a>
				<a href="<?php the_field('in'); ?>" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/insta.png" alt="">
				</a>
				<a href="<?php the_field('vk'); ?>" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/vk.png" alt="">
				</a>
			</div>

			<div class="footer__up click">
				<a href="#hero"><span></span><p>Наверх</p></a>
			</div>
			
		</div>
	</footer>

	<!-- modal -->
		<div class="modal" id="first-part--check">
			<button class="close first-part--check_close" type="button"></button>
			<script id="eee80d0d8656180edb08511a7c58c9032f140204" src="https://online.prokarandash.ru/pl/lite/widget/script?id=110680"></script>
		</div>
		<div class="modal" id="first-part">
			<button class="close first-part_close" type="button"></button>
			<script id="c61e6e0eebe888a53616d910c9f2e898fb92629e" src="https://online.prokarandash.ru/pl/lite/widget/script?id=110888"></script>
		</div>

		<div class="modal" id="two-part--check">
			<button class="close two-part--check_close" type="button"></button>
			<script id="27a77da3e858c441d1ecfb5be40fb142a6005a50" src="https://online.prokarandash.ru/pl/lite/widget/script?id=110894"></script>
		</div>
		<div class="modal" id="two-part">
			<button class="close two-part_close" type="button"></button>
			<script id="a5ca9a90bc139d4623e530ca56fa080789389382" src="https://online.prokarandash.ru/pl/lite/widget/script?id=110895"></script>
		</div>
		
		<div class="modal" id="three-part--check">
			<button class="close three-part--check_close" type="button"></button>
			<script id="5f748415b3d469ce43ef766850091a22114a5527" src="https://online.prokarandash.ru/pl/lite/widget/script?id=110896"></script>
		</div>
		<div class="modal" id="three-part">
			<button class="close three-part_close" type="button"></button>
			<script id="47c900140c51a88d60bf098977f6f2764aa13070" src="https://online.prokarandash.ru/pl/lite/widget/script?id=110897"></script>
		</div>

		<div class="modal modal--thanks" id="thanks">
			<button class="close thanks_close" type="button"></button>
			<h3>Спасибо за доверие!</h3>
			<p>Мы обязательно с вами свяжемся!</p>
		</div>
	<!-- modal-end -->

	<?php wp_footer();?>

	<script>
	  var swiper = new Swiper('.kurs__slider', {
	    loop: true,
	    slidesPerView: 3,
	    spaceBetween: 50,
	    // init: false,
	    pagination: {
	      el: '.kurs__pagination',
	      clickable: true,
	    },
	    navigation: {
	      nextEl: '.kurs__next',
	      prevEl: '.kurs__prev',
	    },
	    breakpoints: {
	      992: {
	        slidesPerView: 3,
	        spaceBetween: 20,
	      },
	      767: {
	        slidesPerView: 2,
	        spaceBetween: 20,
	      },
	      480: {
	        slidesPerView: 1,
	        spaceBetween: 10,
	      }
	    }
	  });
	</script>

</body>
</html>
