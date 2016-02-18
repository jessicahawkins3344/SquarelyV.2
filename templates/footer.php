<section class="bg-gray" style="padding: 4em!important;" id="footer">
	<footer id="footer" class="social">
	    <div class="container">
	    	<div class="row">
				<div class="col-md-12 text-center">
					<ul class="list-inline social-icon-btns">
						<li style="margin-left: 40px;">
							<a href="<?php echo esc_url( get_theme_mod( 'f-twitter' ) ) ;?>">
								<i class="icon-social-twitter-outline"></i>
							</a>
						</li>
					
						<li>
							<a href="<?php echo esc_url( get_theme_mod( 'f-facebook' ) ) ;?>">
								<i class="icon-social-facebook-outline"></i>
							</a>
						</li>
					
						<li>
							<a href="<?php echo esc_url( get_theme_mod( 'f-google' ) ) ;?>">
								<i class="icon-social-google-outline"></i>
							</a>
						</li>
					
						<li>
							<a href="<?php echo esc_url( get_theme_mod( 'f-linkedin' ) ) ;?>">
								<i class="icon-social-linkedin-outline"></i>
							</a>
						</li>
					
						<li>
							<a href="<?php echo esc_url( get_theme_mod( 'f-youtube' ) ) ;?>">
								<i class="icon-social-youtube-outline"></i>
							</a>
						</li>
					
						<li>
							<a href="<?php echo esc_url( get_theme_mod( 'f-rss' ) ) ;?>">
								<i class="icon-social-rss-outline"></i>
							</a>
						</li>
					</ul><br>
					<span class="sub">
					<?php if ( get_theme_mod( 'f-copyright', false ) ) {
	            echo get_theme_mod("f-copyright");
	          } else { 
	            echo '© Copright 2016 JsquaredCreative - All Rights Reserved';
	          } ?>
					</span>
				</div>
			</div>
	    </div>
	</footer>
</section>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>