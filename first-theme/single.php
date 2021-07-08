<?php 
get_header(); 
?>

<div id="wrapper">
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
<?php comments_template(); ?>
</main>

<aside>
</aside>

</div><!--endwrapper-->



<?php get_footer(); ?>