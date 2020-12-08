<?php

get_header();
?>
    <!--	<!-- ======= Hero Section ======= -->-->




    <section id="breadcrumbs" class="breadcrumbs" style="background-color: #f1acb1; color: white">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2> Blog Page</h2>
                <ol>
                    <li><a href="<?php echo get_site_url(); ?>">Home</a></li>
                    <li>Blog Page</li>
                </ol>

            </div>

        </div>
    </section>

    <br>
<?php


while (have_posts())
{
    the_post();

	?>



    <div class="row">
        <div class="col-md-4 text-center">

            <a href=" <?php the_permalink(); ?>">
                <h3>
					<?php

					the_title();
					?>
                </h3>
            </a>

            <br>
			<?php
			the_date();

			?>
        </div>


        <div class=" col-md-6">

			<?php


			if ( has_post_thumbnail() ) {
				the_post_thumbnail( 'medium' );
			}


			the_excerpt();


			?>

        </div>

    </div>


	<?php
}
	get_footer();