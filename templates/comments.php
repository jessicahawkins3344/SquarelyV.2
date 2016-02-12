<?php
if ( is_single() || is_page() ) :
  echo '<div class="clearfix"></div>';
  if ( have_comments() && comments_open() ) : ?>
    <h4 id="comments"><?php comments_number( __( 'Leave a Comment', 'squarely' ), __( 'One Comment', 'squarely' ), '%' . __( ' Comments', 'bootstrap-four' ) );?></h4>
    <ul class="commentlist">
<?php wp_list_comments( 'squarely_comment' ); ?>
</ul>
<div class="m-t-lg">
<?php
    comment_form();
  else :
    if ( comments_open() ) :
      comment_form();
    endif;
  endif;
endif;
?>
</div>