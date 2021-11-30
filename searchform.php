<?php

/**
 * Used when get_search_form() is called
 */

?>

<form role="search" action="<?php echo esc_url(home_url('/')); ?>" method="GET">
    <label for="s"></label>
    <input type="search" name="s" id="s" placeholder="Search & press enter">
    <!-- <input type="submit" value="Search"> -->
</form>