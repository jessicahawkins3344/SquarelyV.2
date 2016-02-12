<section class="bg-defaults" id="blog">
  <div class="container">
    <div class="row m-t-md m-b-lg">
      <div class="col-md-12">
          <ul class="list-inline m-t-md text-xs-center">
            <li class="m-r" style="vertical-align: sub;"><h1 class="c-gray p-r display-4" style="vertical-align: sub">Our Recent Posts</h1></li>
            <li class="p-l-lg" style="vertical-align: top;"><a href="#" class="btn btn-pad btn-success text-right">VISIT THE BLOG</a></li>
        </ul>
      </div>
    </div>
    <div class="row m-b-lg">
      <div class="col-md-12">
        <div class="filters text-center">
          <ul class="text-xs-center nav nav-pills" id="filters">
            <li class="active nav-item"><a href="#" data-filter="*" class="btn btn-gray-outline">Everything</a></li>
            <li class="nav-item"><a href="#" class="c-white btn btn-primary" data-filter=".smarketing">Smarketing</a></li>
            <li class="nav-item"><a href="#" class="btn btn-primary" data-filter=".sales-tips">Sales Tips</a></li>
        </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="isotope-container container m-b-lg">
          <!-- isotope filters end -->
    <div class="row m-t-lg m-b-lg">
          <div class="m-b-0">
            <?php $args = array(
                'orderby' => 'rand',
                'posts_per_page'   => '6',
              );
              $the_query = new WP_Query( $args );   //Check the WP_Query docs to see how you can limit which posts to display ?>
              <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post();
              $termsArray = get_the_terms( $post->ID, "category" );  //Get the terms for this particular item
              $termsString = ""; //initialize the string that will contain the terms
                foreach ( $termsArray as $term ) { // for each term
                  $termsString .= $term->slug.' '; //create a string that has all the slugs
                }
              ?>
              <div class="<?php echo $termsString; ?> col-md-4 isotope-item">
                <div class="p-t-0 p-b-0 card bg-default" style="border-bottom: 5px solid #eee;">
                  <div class="overlay-container card-img-top">
                    <?php if ( has_post_thumbnail() ) {
                                the_post_thumbnail('img-fluid img-responsive');
                          } ?>
                    <a class="overlay " href="<?php the_permalink(); ?>">
                      <i class="icon-btn-warning fa fa-search-plus fa-3x"></i>
                    </a>
                  </div>
                  <div class="card-block">
                    <div class="card-title m-b-0">
                      <p class="lead strong text-xs-center m-b-0"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></p>
                    </div>
                  </div>
                </div> <!-- end item -->
              </div>
            <?php endwhile;  ?>
            <?php endif; ?>
            </div>
          </div> <!-- end isotope-list -->
        </div>
      </div>
    <!-- section end -->
</section>
