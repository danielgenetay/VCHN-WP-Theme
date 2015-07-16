<li>
  <div id="menu-search" class="">
    <form method="get" class="menu-search-form" action="<?php echo esc_url(home_url('/')); ?>">
            <input type="text" value="<?php the_search_query(); ?>" name="s" id="_search-text" placeholder="<?php _e('Search', 'framework'); ?>"/>
          <!--input type="submit" id="search-submit" value=""/ -->
    </form>
</li>
