<span class="m-r m-b btn btn-sm btn-success"><span class="fa fa-clock-o"></span> <time class="updated" datetime="<?= get_the_time('c'); ?>"><?= get_the_date(); ?></time></span>
<?php if( has_category() ) : ?>
<span class="m-r m-b btn btn-sm btn-primary-outline"><span class="fa fa-chevron-circle-right"></span> <?php _e( 'Posted In', 'squarely' ); ?>: <?php the_category( __( ', ', 'squarely' ) ); ?></span>
<?php endif; ?>