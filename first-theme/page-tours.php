<?php 
get_header(); 
/*Template Name: Tours Page*/
?>
<div id="hero">
    <img src="<?php echo get_template_directory_uri();?>/../../uploads/yellowstone-inner.jpg" alt="banner">

</div><!--end hero-->
<div class="wrapper">
    <main>
    <!--if we have posts.. show them! if not, we do not have posts-->
<?php if(has_post_thumbnail()) : ?>
    <?php the_post_thumbnail();?>
    <?php endif; ?><!--show me thumbnails-->
    <?php while(have_posts()) : the_post() ; ?>

<?php the_content() ;?>
<?php endwhile;?>


</main>

<aside id="secondary" class="widget-area">
<?php dynamic_sidebar( 'sidebar-tours' );?>
</aside><!-- #secondary -->

</div><!--endwrapper-->
<div class="full-width">
<?php 
dynamic_sidebar('sidebar-buy');?>
</div><!--emd full width div-->

<?php 
get_footer(); ?>