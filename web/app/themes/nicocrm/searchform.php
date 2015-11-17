<form role="search" method="get" id="searchform" class="search-form" action="<?php echo home_url('/'); ?>">
    <label for="s" class="screen-reader-text"><?php _e('Search for:', 'bonestheme'); ?></label>
    <input type="text" id="s" name="s" value="" class="page-control"/>

    <button type="submit" id="searchsubmit"><span><?php _e('Search', 'bonestheme'); ?></span></button>
</form>