<?php 
get_header(); 
/*Template Name: Front Page*/
?>
<div id="hero">
    <img src="<?php echo get_template_directory_uri();?>/../../uploads/yellowstone-header-home.jpg" alt="banner">
</div><!--end hero-->
<div class="wrapper">
    <!--if we have posts.. show them! if not, we do not have posts-->
<?php if(has_post_thumbnail()) : ?>
    <?php the_post_thumbnail();?>
    <?php endif; ?><!--show me thumbnails-->
    <?php while(have_posts()) : the_post() ; ?>

<?php the_content() ;?>
<?php endwhile;?>







</div><!--endwrapper-->
<?php get_footer(); ?>