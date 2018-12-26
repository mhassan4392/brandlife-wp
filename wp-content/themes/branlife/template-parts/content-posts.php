<?php
     $col_layout = esc_html(get_theme_mod('col_layout', '1'));
     
?>


<div class="col-md-<?php if($col_layout == '1'){echo '12';}elseif($col_layout == '2'){echo '6';}else{echo '4';} ?>">
    <div class="post-inner">
        <div class="post-date">
            <h4><?php the_time( 'j'); ?></h4>
            <h6><?php the_time( 'M'); ?></h6>
        </div>
        <div class="post-data">
        <?php if(has_post_thumbnail()): ?>
                <div class="post_image">
                <?php the_post_thumbnail('front-page-thumbnail', ['class' => 'img-fluid', 'alt' => 'post image']); ?>
                </div>
        <?php endif;?>
                <h2 class="my-4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div>
                <small>
                    <?php if(has_category()): ?>
                    <span class="post-date-small"><i class="fa fa-calendar"></i>  <?php the_date(); ?> &nbsp;&nbsp;&nbsp;</span>
                        <i class="fa fa-tag"></i>   <?php the_category(' | '); ?> &nbsp;&nbsp;&nbsp;
                    <?php endif; ?> 
                    <i class="fa fa-user"></i> Post by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"> <span class="text-success"><?php the_author(); ?></span></a>
                    &nbsp;&nbsp;&nbsp; <i class="fa fa-comments"></i> <?php 
                        printf( _n( 'comment', 'comments', $count, 'onetime' ), number_format_i18n( get_comments_number() ) );
                    ?> - <a href="<?php the_permalink(); ?>" class="clr-custom"><?php echo get_comments_number(); ?></a>
                </small>
                </div>
                <p class="indent-text"><?php the_excerpt();?></p>
                <a class="text-white btn btn-secondary btn-sm" href="<?php the_permalink(); ?>">Read More <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
    <hr class="my-5">
</div>
