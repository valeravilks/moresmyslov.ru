<?php
/**
 * Template Name: Контакты

 */ ?>
<?php get_header(); ?>
<div class="wrapper contact">
	<div class="contact_zag">КОНТАКТЫ</div>
	<div class="contact_content">
		<div class="contact_block">
			<img src="<?php echo get_template_directory_uri(); ?>/img/contact_my_photo.jpg" alt="" class="contact_my_img">
		</div>
		<div class="contact_cont">
			<div class="contact_soc">
				<img src="<?php echo get_template_directory_uri(); ?>/img/icon_phone.png" alt="">
				<div class="contact_soc_name">+7-911-690-96-16</div>
			</div>
			<div class="contact_soc">
				<img src="<?php echo get_template_directory_uri(); ?>/img/icon_mail.png" alt="">
				<div class="contact_soc_name">valeravilks@gmail.com</div>
			</div>
			<div class="contact_soc">
				<img src="<?php echo get_template_directory_uri(); ?>/img/icon_telegram.png" alt="">
				<div class="contact_soc_name">t.me/valeravilks</div>
			</div>
			<div class="contact_soc">
				<img src="<?php echo get_template_directory_uri(); ?>/img/icon_vk.png" alt="">
				<div class="contact_soc_name">vk.com/valeravilks</div>
			</div>
			<div class="contact_soc">
				<img src="<?php echo get_template_directory_uri(); ?>/img/icon_skype.png" alt="">
				<div class="contact_soc_name">vk.com/valeravilks</div>
			</div>
			<div class="contact_soc">
				<img src="<?php echo get_template_directory_uri(); ?>/img/icon_f.png" alt="">
				<div class="contact_soc_name">vk.com/valeravilks</div>
			</div>
		
		</div>
		<div class="contact_forms">
			<div class="contact_form_text">Остались вопросы? Задайте их мне, заполнив поля ниже и я отвечу Вам прямо сейчас!</div>
			<?php echo do_shortcode( '[contact-form-7 id="37" title="Форма обратной связи (Контакты)"]' ); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>	