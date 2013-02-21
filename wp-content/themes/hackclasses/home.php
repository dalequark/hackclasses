<?php
	/**
	 * The main template file.
	 *
	 * This is the most generic template file in a WordPress theme
	 * and one of the two required files for a theme (the other being style.css).
	 * It is used to display a page when nothing more specific matches a query.
	 * For example, it puts together the home page when no home.php file exists.
	 *
	 * Learn more: http://codex.wordpress.org/Template_Hierarchy
	 *
	 * @package WordPress
	 * @subpackage Twenty_Twelve
	 * @since Twenty Twelve 1.0
	 */

	get_header(); ?>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<div id="content" role="main">
			<table id="threecolumn">
				<tbody>
					<tr>
						<td id="webdev">
							<div class="column">
								<h2><a href="webdev">Web Dev</a></h2>
							<?php
														query_posts('cat=3');
														while (have_posts()) : the_post();
														get_template_part( 'content', get_post_format() );
														endwhile;
													?>
							</div>
						</td>
						<td id="ios">
							<div class="column">
								<h2><a href="introtoios">iOS</a></h2>
							<?php
														query_posts('cat=2');
														while (have_posts()) : the_post();
														get_template_part( 'content', get_post_format() );
														endwhile;
													?>
							</div>
						</td>
						<td id="seminars">
							<div class="column">
								<h2><a href="seminars">Seminars</a></h2>
							<?php
														query_posts('cat=4');
														while (have_posts()) : the_post();
														get_template_part( 'content', get_post_format() );
														endwhile;
													?>
						</td>
					</div>
					</tr>
				</tbody><!--threecolumn-->


			</table>
		</div> <!--content-->
	<?php get_sidebar(); ?>
	<?php get_footer(); ?>