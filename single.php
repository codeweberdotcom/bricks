<?php get_header(); ?>

<!-- main content wrapper -->

<main id="content-wrap">

    <?php while ( have_posts() ) : the_post(); ?>
    
    <div class="container">

        <div class="row py-5">

            <!-- blog post wrapper -->

            <div id="article-wrap" class="col">       

                <?php get_template_part( 'templates/elements/breadcrumbs', '' ); ?>
                
                <article <?php post_class(); ?> >

                    <h1><?php the_title(); ?></h1>

                    <p><?php the_author(); ?> - <?php the_time('j M, Y'); ?></p>

                    <p><?php the_category(', '); ?> - <?php the_tags('', ', ', ''); ?></p>
                    
                    <?php the_post_thumbnail('sb_single', array( 'class' => 'img-fluid', 'alt' => get_the_title() )); ?>

                    <div><?php the_content(); ?></div>

                    <?php wp_link_pages('pagelink=Page %'); ?>

                </article>

                <?php get_template_part( 'templates/elements/socialshare', '' ); ?>

                <nav class="nav">
                    <?php previous_post_link('<span class="nav-link mr-auto">&laquo; %link</span>');
                        next_post_link('<span class="nav-link ml-auto">%link &raquo;</span>'); ?>
                </nav>
                    
                <?php if ( comments_open() || get_comments_number() ) { comments_template(); } ?>
            
            </div>

            <?php get_sidebar(); ?>

        </div>

    </div>
  
    <?php endwhile ?>

</main>

<?php get_footer();