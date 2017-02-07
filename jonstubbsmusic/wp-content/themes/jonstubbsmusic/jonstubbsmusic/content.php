<div id="contentWrap"><!-- need this for the max width and min width on the content, separate from the background images on the whole width of the page. -->
<main>
		<?php if ( have_posts() ) : ?>
            <?php posts_nav_link() ?>
            <?php wp_link_pages(); ?>
                <?php /*?><?php if ( is_home() && ! is_front_page() ) : ?>
                <header>
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>
                <?php endif; ?><?php */?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
                <!--<p><?php /*?><?php the_tags(); ?><?php */?></p>-->
            <?php endwhile; ?>
            <?php else : ?>
                <h2>Not found</h2>
        <?php endif; ?>
</main>
<?php get_sidebar(); ?>
<?php get_template_part( 'illustration' ); ?>
<!--<div class="push"></div>-->
</div><!-- end contentWrap -->
