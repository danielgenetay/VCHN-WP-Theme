<div class="whitener">
  <div id="topbar-search" class="topbar-search col-md-offset-9 col-sm-offset-9">
    <form method="get" class="topbar-search-form" action="<?php echo esc_url(home_url('/')); ?>">
      <div>
        <input type="submit" id="search-submit" value=""/>
        <input type="text" value="<?php the_search_query(); ?>" name="s" id="_search-text" placeholder="<?php _e('Search', 'framework'); ?>"/>
      </div>
    </form>
  </div>
</div>
