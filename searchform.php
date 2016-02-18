<div class="row">
  <div class="col-lg-12">
  <form role="search" method="get" class="form-inline" action="<?= esc_url(home_url('/')); ?>">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="search..." value="<?= get_search_query(); ?>" name="s">
      <span class="input-group-btn">
        <button class="btn btn-primary" type="button" style="border: 0px!important; border-top-left-radius: 0px!important; border-bottom-left-radius: 0px!important;"><?php _e('Search', 'squarely'); ?></button>
      </span>
    </div>
    </form>
  </div>
</div>