<?php
/*
 Template Name: Custom Page Example
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

			<div id="content" class="wrapper">

				<div id="inner-content" class="container">
        
            <?php get_sidebar('resource'); ?>

						<div class="main"  role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

 <div id="SelectContainer">
                  <?php
 
// check if the repeater field has rows of data
if( have_rows('section') ):
 
 	// loop through the rows of data
    while ( have_rows('section') ) : the_row(); ?>

        <a class="box <?php the_sub_field ('class_w');?>  <?php the_sub_field ('class_p');?> h2" onclick="selectThis('<?php the_sub_field ('id');?>')" href="javascript:void(0)"><?php the_sub_field('heading');?></a>

    <?php endwhile;
 
else :
 
    // no rows found
 
endif;
 
// check if the repeater field has rows of data
?>         <div class="TextBodyContainer">
<?php if( have_rows('section') ):
 
 	// loop through the rows of data
    while ( have_rows('section') ) : the_row(); ?>

<div class="TextContainer" id="Body_<?php the_sub_field ('id');?>">
<?php the_sub_field ('content');?>
</div>

    <?php endwhile;
 
else :
 
    // no rows found
 
endif;
 
?>
</div>
      </div>

							</article>

							<?php endwhile; else : ?>

                <?php get_template_part ('partials/no-post-found');?>

							<?php endif; ?>

						</div>

				</div>

			</div>


<?php get_footer(); ?>
