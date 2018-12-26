<?php get_header(); ?>
<div class="page-showcase">
    <div class="page-showcase-overlay">
        <div class="page-showcase-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto text-center">
                    <h2 class="page-showcase-header">Search result for : <span class="clr-custom"><?php echo get_search_query() ?></span></h2>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<?php 
    $layout = 'sidebar';

    
    
?>


<div class="page-layout my-5">
    <div class="container">
        <div class="row">
            <?php if($layout == 'sidebar'): ?>
                <div class="col-md-4 order-md-1 order-sm-2 first">
                    <?php get_sidebar(); ?>
                </div>
            <?php endif; ?>
            <div class="my-5 col-md-<?php 
                if($layout == 'full'){echo '12 mx-auto';}else{echo '8 order-md-2 order-sm-1 second';};
            ?>">
                <div class="row">
                <?php if(have_posts()) : ?>
                <!-- <header class="page-header">
				<h1 class="text-center page-title"><?php //printf( __( 'Search Results for: %s', 'onetime' ), get_search_query() ); ?></h1>
			    </header> -->
                    <?php while(have_posts()) : the_post(); ?>
                        <?php get_template_part('template-parts/content', 'posts'); ?>
                    <?php endwhile; ?>
                    <?php else: ?>
                        <p>Sorry no result found for your search</p>
                <?php endif; ?>
                </div>
                <div class="my-5">
    </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>


