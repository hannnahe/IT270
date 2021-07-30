<?php 
get_header(); 
?>
<div id="search-error">
<img src="<?php echo get_template_directory_uri();?>/../../uploads/searching.jpg" alt="searching">
</div>
<div class="wrapper">
<main>
<h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'site' ); ?></h2>
    <h3><?php _e( 'It looks like nothing was found at this location. Maybe try another search?', 'site1' ); ?></h3>
<?php get_search_form(); ?>
<h4 class="fourohfour">Feel free to browse our other pages!</h4>
<?php wp_list_pages();?>
</main>

<!-- <aside>
    This is 404 page
</aside> -->
</div><!--end wrapper-->
<?php get_footer(); ?>