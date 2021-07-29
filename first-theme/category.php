<?php 
get_header(); 
?>
<div id="hero">
<img src="<?php echo get_template_directory_uri();?>/../../uploads/yellowstone-inner.jpg" alt="banner">
</div><!--end hero-->
<div class="wrapper">
<main>
    <!--if we have categories.. show them! if not, we do not have categories-->
    <h1 class="page-title">
<?php _e( 'Category results for: ', 'site1' ); 
$categories = get_the_category(); 
if ( ! empty( $categories)){
    echo esc_html( $categories[0]->name);
    //show category name
}
?>
</h1>



<?php while(have_posts()) : the_post() ; ?>
<article class="posts">
<h1><a href="<?php the_permalink();?>"><?php the_title() ;?></a></h1>
<div class="meta">
<span><b>Posted by:</b> <?php the_author() ;?></span>
<span><b>Posted on:</b> <?php the_time('F j, Y g:i a') ;?></span>
</div><!--end meta div-->
<div class="thumbnail">
<?php if(has_post_thumbnail()) : ?>
<a href="<?php the_permalink();?>">
<?php the_post_thumbnail(); ?>
</a>
<?php endif; ?>
    
    
</div><!--end thumbnail div-->
<?php the_excerpt() ;?>
<span class="block">
<a href="<?php  the_permalink() ;?>">Read More about <?php the_title();?></a>
</span>
</article>
<?php endwhile;?>
</main>


<?php get_sidebar();?>



</div><!--endwrapper-->



<?php get_footer(); ?>