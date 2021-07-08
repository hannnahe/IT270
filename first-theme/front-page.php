<?php 
get_header(); 
/*Template Name: Front Page*/
?>

<div id="wrapper">
    <!--if we have posts.. show them! if not, we do not have posts-->
<?php if(has_post_thumbnail()) : ?>
    <?php the_post_thumbnail();?>
    <?php endif; ?><!--show me thumbnails-->
    <?php while(have_posts()) : the_post() ; ?>
<h2><?php the_title() ;?></h2>
<?php the_content() ;?>
<?php endwhile;?>







</div><!--endwrapper-->
<?php get_footer(); ?>