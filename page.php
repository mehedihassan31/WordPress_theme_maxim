<?php
get_header();



if(!is_front_page())
{
?>

    <section id="breadcrumbs" class="breadcrumbs" style="background-color: #f1acb1; color: white">
        <div class="container" >
            <div class="d-flex justify-content-between align-items-center">
                <h2> <?php the_title()?></h2>
                <ol>
                    <li><a href="<?php echo get_site_url();?>">Home</a></li>
                    <li><?php the_title()?></li>

                </ol>

            </div>

        </div>
    </section>


<?php
}

while ( have_posts() ) :
	the_post();
	the_content();
endwhile;

?>

<?php
get_footer();
