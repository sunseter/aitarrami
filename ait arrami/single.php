<?php get_header(); ?>
<section class="main_content" id="yesyes">
						<?php if(have_posts()) {
								while(have_posts()) {
										the_post();

										?>

										<div class="post_list">
										<a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
										<p class="post_info">by <a href=""><?php the_author(); ?></a> on <?php the_time(); ?> in <?php the_category(', '); ?></p>
										<?php the_post_thumbnail();
										the_content();
										?>
							<?php	}
						}
						?>
						</div>
						<center><?php posts_nav_link(); ?></center>
				</section>
<?php comments_template(); ?>

				<section class="sidebar">
						<?php get_sidebar(); ?>
				</section>
				<div class="clearfix"></div>
			<?php get_footer(); ?>
