<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>


			



			<?php $the_query = new WP_Query( 'nopaging=true','cat=-1' ); ?>

			<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

				<div class="mix <?php foreach(get_the_category() as $category) {echo $category->slug . ' ';} ?>" data-myorder="<?php the_ID(); ?>">
					<div class="name"><?php the_title(); ?></div>
					<div class="detail">
						<?php the_content(); ?>
					</div>
				</div>

			<?php endwhile;?>



<?php get_footer(); ?>