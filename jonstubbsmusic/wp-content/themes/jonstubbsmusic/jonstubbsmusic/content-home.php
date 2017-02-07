<div id="contentWrap"><!-- need this for the max width and min width on the content, separate from the background images on the whole width of the page. -->
<main class="blog-posts">
    <?php if ( have_posts() ) : ?>
        <?php posts_nav_link() ?>
            <?php wp_link_pages(); ?>
        	<?php /*?><?php if ( is_home() && ! is_front_page() ) : ?>
			<!-- <header> -->
				<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
			<!-- </header> -->
		<?php endif; ?><?php */?>
        	<?php while ( have_posts() ) : the_post(); ?>
            		<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
            		<h2><?php the_title(); ?></h2>
                    	<!-- <div class="entry"> -->
                    		<?php /*?> <?php the_content(); ?> <?php */?>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>" title="Read more <?php the_title(); ?>" class="more-link">Read more...</a>
                    	<!-- </div> -->
                	<p><?php the_tags(); ?></p>
		<?php endwhile; ?>
		<?php else : ?>
        		<h2>Not found</h2>
	<?php endif; ?>
</main>
<?php get_sidebar( 'home' ); ?>
<?php get_template_part( 'illustration' ); ?>
<!--<div class="push"></div>-->
</div><!-- end contentWrap -->
<!--</div>--><!-- End div wrapper - for the sticky footer - Negative Top Margins on Footer - this wrapper started in the header template -->