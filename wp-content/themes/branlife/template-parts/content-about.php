<div class="col-md-8 mx-auto my-4">
    <div class="card card-body">
    <div class="post-inner">
        <div class="post-data">
        <?php if(has_post_thumbnail()): ?>
                <div class="post_image">
                <?php the_post_thumbnail('medium_large', ['class' => 'img-fluid', 'alt' => 'post image']); ?>
                </div>
        <?php endif;?>
            <p><?php the_content();?></p>
        
        </div>
    </div>
    </div>
</div>