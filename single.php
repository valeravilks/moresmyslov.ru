<?php
/**
 * Template Name: PageOfPosts

 */ ?>
<?php get_header(); ?>
<div class="wrapper single_page">
	<div class="left_panel">
		<div class="my_inf">
			<div class="my_photo"></div>
			<div class="my_name">Валерий Вилькс</div>
			<div class="my_prof">веб-разработчик</div>
			<div class="cherta"></div>
			<div class="esli_voprosi">Если у Вас возникли вопросы, можете задать их мне, заполнив поля ниже</div>
			<?php echo do_shortcode( '[contact-form-7 id="28" title="Форма обратной связи (боковая панель)"]' ); ?>
			<div class="sidebar_social">
				<a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/icon_telegram.png" alt=""></a>
				<a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/icon_vk.png" alt=""></a>
				<a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/icon_inst.png" alt=""></a>
				<a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/icon_yt.png" alt=""></a>
				<a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/icon_f.png" alt=""></a>
			</div>
		</div>
	</div>
	<div class="single_content">
		<div class="hleb_croch">
			<?php
				the_breadcrumb();
			?>
		</div>
		<div class="cont">
			<div class="zagolovok-single">
				<div class="prim">
					<img src="<?php the_post_thumbnail_url(); ?>" alt="">
					
					<div class="zag">
						<div class="flex_obert"><?php the_title(); ?>
						</div>
					</div>
				</div>
			</div>
	
		
		
		</div>
		<div class="text_cont">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
			the_content();
			endwhile; endif; ?>
		</div>
	</div>
	
</div>
<?php get_footer(); ?>	