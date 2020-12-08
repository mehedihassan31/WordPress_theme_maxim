<?php

get_header();
?>
    <!--	<!-- ======= Hero Section ======= -->-->

    <section id="breadcrumbs" class="breadcrumbs" style="background-color: #f1acb1; color: white">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2> Single Blog Page</h2>
                <ol>
                    <li><a href="<?php echo get_site_url(); ?>">Home</a></li>
                    <li>Single Blog Page</li>
                </ol>

            </div>

        </div>
    </section>

    <br>


    <div class="row">

		<?php
		while ( have_posts() ) {
		the_post();


		?>
        <div class="col-md-12 text-center">


                <h3>
					<?php the_title(); ?>
                </h3>


            <br>
			<?php
			the_date();
			?>

        </div>

        <div class="col-md-12 text-center">

			<?php

			if ( has_post_thumbnail() ) {
				the_post_thumbnail( 'large' );
			}
			}
			the_content();

			?>

        </div>

    </div>


<?php
get_footer();