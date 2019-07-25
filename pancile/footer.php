

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
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/email.png" alt="">adress@gmail.com</a>
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/insta.png" alt=""></a>
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/vk.png" alt=""></a>
			</div>

			<div class="footer__up click">
				<a href="#hero"><span></span><p>Наверх</p></a>
			</div>
			
		</div>
	</footer>

	<!-- modal -->
		<div class="modal" id="thanks">
			<button class="close thanks_close" type="button"></button>
			<h3>Спасибо <br>за доверие!</h3>
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
	      el: '.kurs__prev',
	      clickable: true,
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
