<!DOCTYPE html>
<?php get_header(); ?>
				<section class="full_width">
					<div class="full_width_inner">
						<h1><?php bloginfo('name'); ?></h1>
						<p><?php bloginfo('description'); ?></p>
						<a href="#yesyes"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
					</div>
				</section>
				<section class="main_content" id="yesyes">
						<?php if(have_posts()) {
								while(have_posts()) {
										the_post();

										?>

										<div class="post_list">
										<a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
										<p class="post_info">by <a href=""><?php the_author(); ?></a> on <?php the_time(); ?> in <?php the_category(', '); ?></p>
										<?php the_post_thumbnail();
										the_excerpt();
										?> <a href="<?php the_permalink(); ?>"><button class="read_more">Read More</button></a>
							<?php	}
						}
						?>
						</div>
						<center><?php posts_nav_link(); ?></center>
				</section>


				<section class="sidebar">
						<?php get_sidebar(); ?>
				</section>
				<div class="clearfix"></div>
			<?php get_footer(); ?>
