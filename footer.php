<footer id="footer">
	<div class="footer-top">
		<div class="container">
			<div class="row">

				<div class="col-lg-3 col-md-6">
					<div class="footer-info">
						<h3>Maxim</h3>
						<p>

							<?php
							if ( is_active_sidebar( "social-maxim" ) ) {

								dynamic_sidebar( "social-maxim" );
							}
							?>

						</p>
						<div class="social-links mt-3">
							<a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
							<a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
							<a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
							<a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
							<a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-6 footer-links">
				

					<?php
					if ( is_active_sidebar( "link-1" ) ) {

						dynamic_sidebar( "link-1" );
					}
					?>


				</div>

				<div class="col-lg-3 col-md-6 footer-links">
					<h4>Our Services</h4>
                    <?php
                    if ( is_active_sidebar( "link-2" ) ) {

                        dynamic_sidebar( "link-2" );
                    }
                    ?>
<!--					<ul>-->
<!--						<li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>-->
<!--						<li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>-->
<!--						<li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>-->
<!--						<li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>-->
<!--						<li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>-->
<!--					</ul>-->
				</div>

				<div class="col-lg-4 col-md-6 footer-newsletter">
				
					<p>
                        <?php
                        if ( is_active_sidebar( "newsletter" ) ) {

                            dynamic_sidebar( "newsletter" );
                        }
                        ?>

                    </p>


					<form action="" method="post">
						<input type="email" name="email"><input type="submit" value="Subscribe">
					</form>

				</div>

			</div>
		</div>
	</div>

	<div class="container">

            <?php
            if ( is_active_sidebar( "copy-right" ) ) {

                dynamic_sidebar( "copy-right" );
            }
            ?>
        <?php
            if ( is_active_sidebar( "designed" ) ) {

                dynamic_sidebar( "designed" );
            }
            ?>

	</div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>



</body>

</html>

<?php
wp_footer();
