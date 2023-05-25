<?php get_header(); ?>

<div class=" view view-single mt-md-5 mt-mobile">
	<?php if (has_post_thumbnail()) the_post_thumbnail('', array('class' => 'img-fluid w-100')); ?>
	<div class="mask  flex-center rgba-black-light">
		<div class="container-fluid">
			<div class="row align-items-end">
				<div class="single-blog ">
					<div class="list-categories">
						<?php the_category(); ?>
					</div>
				</div>
			</div>
			<h1 class=" h1-responsive font-weight-bold white-text text-left py-3 "><?php the_title(); ?></h1>
		</div>
	</div>

</div>
</div>
<div class="container-fluid pl-lg-5 pr-lg-5 py-5 ">
	<section id="single-blog" class="text-center mobile">
		<div class="row">
			<div class="col-md-12 col-lg-8">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="blog-post  text-justify ">
							<p class="text-muted">Por: <?php echo get_avatar(get_the_author_meta('ID'), 35); ?> <i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?><i class="far fa-clock ml-2"></i> <?php echo reading_time($post->ID); ?></p>

							<div class="content-single"><?php the_content(); ?></div>
							<div class="like-desllike">
								<div class="py-4 ">
									<h5>Compartilhe em suas redes:</h5>
									<?php echo do_shortcode('[sharethis-inline-buttons]' ); ?>

								</div>
								<h5 class="h5-responsive "><?php echo traducaoTexto(array('Estes conteúdo foi útil pra você?', 'Was this content helpful to you?', '¿Le ha resultado útil este contenido?')); ?></h5>
								<?php echo do_shortcode('[posts_like_dislike ]'); ?>

							</div>
						</div>

					<?php endwhile; ?>
				<?php else : get_404_template();
				endif; ?>
			</div>

			<?php get_sidebar(); ?>
		</div>
	</section>
</div>


<?php get_footer(); ?>