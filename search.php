
<?php get_header(); ?>
    <div class="search-container">
        <section id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
            
            <h1>Search Results</h1>
            <div class="search-page-form" id="ss-search-page-form"><?php get_search_form(); ?></div>
    
            <?php if ( have_posts() ) : ?>
                <header class="page-header">
                    <span class="search-page-title"><b><?php printf( esc_html__( 'Search results for: %s', 'ion' ), '<span>' . get_search_query() . '</span>' ); ?></b></span>
                </header><!-- .page-header -->
    
                <?php /* Start the Loop */ ?>

                <?php while ( have_posts() ) : the_post(); ?>
                    <div style="margin-top:20px;">
                        <span class="search-post-title"><?php the_title(); ?></span>
                        <span class="search-post-excerpt"><?php the_excerpt(); ?></span>
                        <span class="search-post-link"><a href="<?php the_permalink(); ?>">
                            <?php the_permalink(); ?></a>
                        </span>
                    </div>
                <?php endwhile; ?>
    
                <?php //the_posts_navigation(); ?>
 
            <?php endif; ?>
    
            </main><!-- #main -->
        </section><!-- #primary -->
    </div>
<?php get_footer(); ?>