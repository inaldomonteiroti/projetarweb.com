<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fancy Lab
 */

get_header();
?>
		<div class="content-area">
			<main>
				<div class="container">
					<div class="row">
						<?php 
							if( have_posts() ):
								while( have_posts() ): the_post();
								?>
									<article class="col">
										<h1><?php the_title(); ?></h1>
										<div><?php the_content(); ?></div>
									</article>
								<?php
								endwhile;
							else: 
								?>
								<p>Nothing to display.</p>
								<?php
							endif;
						?>
					</div>
				</div>
			</main>
		</div>
<?php get_footer(); ?>