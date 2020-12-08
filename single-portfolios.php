<?php
get_header();

?>

	<section id="breadcrumbs" class="breadcrumbs" style="background-color: #f1acb1; color: white">
		<div class="container">
			<div class="d-flex justify-content-between align-items-center">
				<h2>Custom Blog Page</h2>
				<ol>
					<li><a href="<?php echo get_site_url(); ?>">Home</a></li>

					<li><a href="//192.168.0.110/wordpresstest/wordpress/portfolio/">Portfolio</a></li>

					<li>Custom Blog Page</li>
				</ol>

			</div>

		</div>
	</section>

	<br>
<?php


while( have_posts())
{

	the_post();


	the_title();
	the_content();
}


?>

	<section class="portfolio-details">
		<div class="container">

			<div class="portfolio-details-container">

				<div class="owl-carousel portfolio-details-carousel">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid" alt="">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid" alt="">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid" alt="">
				</div>

				<div class="portfolio-info">
					<h3>Project information</h3>
					<ul>
						<li><strong>Category</strong>: <?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></li>
						<li><strong>Client</strong>: ASU Company</li>
						<li><strong>Project date</strong>: 01 March, 2020</li>
						<li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
					</ul>
				</div>

			</div>

			<div class="portfolio-description">
				<h2>This is an example of portfolio detail</h2>
				<p>
					Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
				</p>
			</div>
		</div>
	</section><!-- End Portfolio Details Section -->










<?php

get_footer();
