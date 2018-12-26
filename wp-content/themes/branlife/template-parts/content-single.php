
<div class="col-md-12">
    <div class="post-inner">
        <div class="post-data">
        <?php if(has_post_thumbnail()): ?>
                <div class="post_image">
                <?php the_post_thumbnail('medium_large', ['class' => 'img-fluid', 'alt' => 'post image']); ?>
                </div>
        <?php endif;?>
                <h2 class="my-4"><?php the_title(); ?></h2>
                <div>
                <small>
                     <i class="fa fa-calendar"></i>  <?php the_date(); ?> &nbsp;&nbsp;&nbsp;
                    
                    <?php if(has_category()): ?>
                    <i class="fa fa-tag"></i>   <?php the_category(' | '); ?> &nbsp;&nbsp;&nbsp;
                    <?php endif; ?> 
                    <i class="fa fa-user"></i>  Post by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"> <span class="text-success"><?php the_author(); ?></span></a> &nbsp;&nbsp;&nbsp; <i class="fa fa-comments"></i> <?php 
                        printf( _n( 'comment', 'comments', $count, 'onetime' ), number_format_i18n( get_comments_number() ) );
                    ?> - <i class="clr-custom"><?php echo get_comments_number(); ?></i></small>
                  </div>
                <p><?php the_content();?></p>

                <?php 
                    if(has_tag()){
                        the_tags('<ul class="tags-ul mt-5">', ' ', '</ul>');
                    }
                ?>
        
        </div>
    </div>
</div>

<?php 
    $author_id = get_the_author_meta('ID');
    $author_posts = get_the_author_posts();
    $author_display = get_the_author();
    $author_posts_url = get_author_posts_url($author_id);
    $author_description = get_the_author_description('user_description');
    $author_website = get_the_author_meta('user_url');
?>

<div class="col-md-12 my-5 ">
    <div class="author-info px-3 py-5">
        <div class="author-pic"><?php echo get_avatar($author_id, 100) ?></div>
        <div class="author-bio">
            <h5 class="author-name"><a href="<?php echo esc_url($author_posts_url); ?>"><?php echo esc_html($author_display) ?></a></h5>
            <div class="author-description"><?php echo esc_html($author_description); ?></div>
        </div>
    </div>
</div>

<?php 
    $pre = get_previous_post();
    $next = get_next_post();
?>

<div class="post-navigation col-md-12 my-2">
<?php if($pre || $next): ?>
    <div class="col-md-12 my-5 py-2">
        <div class="pre-next-post">
            <div class="pre-post text-left">
                 <?php if($pre): ?>
                    <a href="<?php the_permalink($pre->ID) ?>"><i class="fa fa-angle-left"></i>&nbsp;&nbsp;&nbsp; <?php echo wp_trim_words(get_the_title($pre->ID),3,'...'); ?></a>
                 <?php endif; ?> 
            </div>
            <div class="pre-next-img text-center">
                <i class="fa fa-windows"></i>
            </div>
            <div class="next-post text-right">
                 <?php if($next): ?>
                    <a href="<?php the_permalink($next->ID); ?>"><?php echo wp_trim_words(get_the_title($next->ID),3,'...'); ?> &nbsp;&nbsp;&nbsp;<i class="fa fa-angle-right"></i></a>
                 <?php endif; ?> 
            </div>
        </div>
    </div>
<?php endif; ?>

</div>

<ol class="comment-list col-md-12 my-5">
    <?php

        comments_template();
    ?>
</ol><!-- .comment-list -->

<div class="col-md-12">
    
</div>
        
