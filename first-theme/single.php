<?php 
get_header(); 
?>
<div id="hero">
    <img src="<?php echo get_template_directory_uri();?>/../../uploads/yellowstone-inner.jpg" alt="banner">

</div><!--end hero-->
<div class="wrapper">
<main>
    <!--if we have posts.. show them! if not, we do not have posts-->
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post() ; ?>
<article class="posts">
<h1><?php the_title() ;?></h1>
<div class="meta">
<span><b>Posted by:</b> <?php the_author() ;?></span>
<span><b>Posted on:</b> <?php the_time('F j, Y g:i a') ;?></span>
</div><!--end meta div-->
<?php the_content() ;?>
</article>
<?php endwhile;?>

<?php else : ?>
   
<?php echo wpautop('Sorry, no posts were found!'); ?>
<?php endif; ?>
<span class="next-previous">
<?php (previous_post_link()) ? '%link' : '';?> &nbsp; &nbsp; <?php (next_post_link()) ? '%link' : '';?>
</span>

<?php comments_template(); ?>
</main>


<?php get_sidebar();?>


</div><!--endwrapper-->



<?php get_footer(); ?>