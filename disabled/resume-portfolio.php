<section class="portfolio bg-white" id="portfolio">
  <div class="container">
    <h1 class="text-center title wow slideInLeft" id="portfolio">Portfolio</h1>
    <div class="separator"></div>
      <p class="lead text-center wow slideInLeft">Highlighting favorite projects from my areas of expertise. Want to see more examples of a specific service? <br> No problem, just contact me.</p>
      <br>      
      <div class="object-non-visible wow fadeInUp" data-animation-effect="fadeIn">
        <!-- isotope filters start -->
          <div class="row">
            <div class="col-md-12">
              <div class="filters text-center">
                <ul class="text-xs-center nav nav-pills" id="filters">
                  <li class="active nav-item"><a href="#" data-filter="*" class="btn btn-primary nav-link">Everything</a></li>
                  <li class="nav-item"><a href="#" class="btn btn-success nav-link" data-filter=".resources">Resources</a></li>
                  <li class="nav-item"><a href="#" class="btn btn-warning nav-link" data-filter=".snippets">Snippets</a></li>
              </ul>
              </div>
            </div>
          </div>

          <!-- isotope filters end -->
          <div class="row">
        <!-- portfolio items start -->
        <?php $args = array(
            'orderby' => 'rand',
            'posts_per_page'   => '20',
          );
          $the_query = new WP_Query( $args );   //Check the WP_Query docs to see how you can limit which posts to display ?>
          <?php if ( $the_query->have_posts() ) : ?>
          <div class="isotope-container m-t-lg" style="position: relative; overflow: hidden; height: 480px;" id="portfolio_wrapper">
              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
            $termsArray = get_the_terms( $post->ID, "category" );  //Get the terms for this particular item
            $termsString = ""; //initialize the string that will contain the terms
              foreach ( $termsArray as $term ) { // for each term 
                $termsString .= $term->slug.' '; //create a string that has all the slugs 
              }
            ?>
            <div class="no-gutter"> 
              <div class="<?php echo $termsString; ?> col-sm-6 col-md-3 isotope-item"> 
                <div class="card">
                  <div class="overlay-container card-img-top">
                  <?php // 'item' is used as an identifier (see Setp 5, line 6) ?>
                      <?php if ( has_post_thumbnail() ) { 
                                  the_post_thumbnail(' img-responsive');
                            } ?>
                    <a class="overlay " href="<?php the_permalink(); ?>">
                      <i class="icon-btn-warning fa fa-search-plus fa-3x"></i>
                    </a>
                  </div>
                </div> <!-- end item -->
              </div>
            </div>
              <?php endwhile;  ?>
          </div> <!-- end isotope-list -->
          <?php endif; ?>
      </div>
    <!-- section end -->
</section>
