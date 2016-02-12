<section class="bg-default">
	<div class="container-fluid">
	<div class="m-t-lg text-right">
		<div class="row m-b-lg text-xs-center">
		<h1 class="display-4">Featured Topics</h1>
        <h2 class="subtitle-script text-muted"> the latest in cool, dev, & freebies.</h2>
        </div>
	  	<div class="row">
        	<div class="col-md-4">
	        	<div class="m-t-0">
	              <h2 class="subtitle-script text-muted text-xs-left m-t-0">resource lists.</h2>
	              <hr />
	            </div>
            	<div class="row">
            		<div class="col-sm-12">
            			<div class="card">
            				<div class="card-title bg-primary m-b-0">
		            			<div class="bg-primary text-xs-center p-b p-t">
									<div class="resources">
										<a class="btn btn-xs btn-white-outline" data-toggle="collapse" href="#collapseExample" aria-expanded="true" aria-controls="collapseExample">Design</a>
										<a class="btn btn-xs btn-white-outline" data-toggle="collapse" href="#collapseExample" aria-expanded="true" aria-controls="collapseExample">Dev</a>
										<a class="btn btn-xs btn-white-outline" data-toggle="collapse" href="#collapseExample" aria-expanded="true" aria-controls="collapseExample">Tools</a>
										<a class="btn btn-xs btn-white-outline" data-toggle="collapse" href="#collapseExample" aria-expanded="true" aria-controls="collapseExample">WordPress</a>
									</div>
								</div>
							</div>
							<div class="collapse in" id="collapseExample">
							  	<div class="bg-transparent list-group">
							    <?php $args = array(
							    	'post_type' => 'resource', 
							    	'posts_per_page' => 5, 
							    	'tag_id' => 10 
							    	);
			              			$terms = get_posts( $args ); // get all categories, but you can use any taxonomy
			              			foreach ( $terms as $post ) : setup_postdata( $post ); ?>
			              				<div class="side list-group-item text-xs-left">
											<h5 class="m-b-0"><a href="<?php the_permalink(); ?>"><i class="fa fa-angle-double-right"></i></i><?php the_title(); ?></a></h5>
											<small class="text-success text-uppercase"><?php the_time('M d y') ?></small>
										</div>
									<?php endforeach; 
									wp_reset_postdata();
								?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<div class="m-t-0">
	              <h2 class="subtitle-script text-warning text-xs-right m-t-0">Snippity Snippets.</h2>
	              <hr />
	            </div>
				<div class="card">
				  <img class="card-img-top img-responsive" src="https://unsplash.it/3300/2200?image=902" alt="Card image cap">
				  <div class="main-card card-img-overlay">
				    <h4 class="card-title">Card title</h4>
				  </div>		
				</div>
					<div class="card-deck-wrapper m-t-md m-b-0">
					  <div class="card-deck">
					    <div class="card">
					      <img class="card-img-top img-responsive" src="https://unsplash.it/3300/2200?image=902" alt="Card image cap">
					      <div class="card-block">
					        <h4 class="card-title m-b-0">Card title</h4>
					      </div>
					    </div>
					    <div class="card">
					      <img class="card-img-top img-responsive" src="https://unsplash.it/3300/2200?image=902" alt="Card image cap">
					      <div class="card-block">
					        <h4 class="card-title m-b-0">Card title</h4>
					      </div>
					    </div>
					  </div>
					</div>

			</div>
			<div class="col-md-3">
				<div class="m-t-0">
	              <h2 class="subtitle-script text-warning text-xs-right m-t-0">freebies!</h2>
	              <hr />
	            </div>
				<div class="something">
					<div class="featured row">
					  		<?php $args = array( 'posts_per_page' => 4, 'category' => 4 );
				      			$terms = get_posts( $args ); // get all categories, but you can use any taxonomy
				      			foreach ( $terms as $post ) : setup_postdata( $post ); ?>
				      			<div class=" featured-item col-md-12 m-b-md bg-white">
						    		<div class="featured-image img-thumbnail p-a-0">
						    				<?php if ( has_post_thumbnail() ) { 
			                             		the_post_thumbnail(' img-responsive');
			                        		} ?>
			                		</div>
			                		<div class="featured-content text-xs-right">
			                			<h5 class="m-b-0"><?php the_title(); ?></h5>
			                			<small class="text-success text-uppercase"><?php the_time('F jS, Y') ?></small>
			                			<a href="<?php the_permalink();?>" class="btn btn-secondary-outline btn-sm m-t">GO THERE!</a>
			                		</div>
			                	</div>
								<?php endforeach;
								wp_reset_postdata(); 
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
