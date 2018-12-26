<?php if(have_comments()): ?>
<div class="post-comments">
    <div class="col-md-12 my-5">
        <div class="comments-display">
            <div id="comments">
                <ul>
                    <?php 
                        wp_list_comments(array(
                            'avatar_size' => 100
                        ));
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<div class="post-comment-form">
    <div class="col-md-12">
    <h3 id="reply-title" class="comment-reply-title">Write a Comment <small><a rel="nofollow" id="cancel-comment-reply-link" href="/onetime/post-4/#respond" style="display:none;">Cancel reply</a></small></h3>
    <form action="http://localhost/onetime/wp-comments-post.php" method="post" id="commentform" class="w-100 comment-form" novalidate>
            
            
            
            
            
                <div class="form-row">
                    <div class="col-md-6">
                        <p class="comment-form-author">
                            <!-- <label for="author">Name <span class="required">*</span></label>  -->
                            <input id="author" name="author" type="text" value="" class="form-control form-control-lg bg-light" placeholder="Your Name" maxlength="245" required='required' />
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="comment-form-email">
                            <!-- <label for="email">Email <span class="required">*</span></label>  -->
                            <input id="email" name="email" type="email" value="" class="form-control form-control-lg bg-light" maxlength="100" placeholder="Your Email" aria-describedby="email-notes" required='required' />
                        </p>
                    </div>
                </div>
            

            <div class="form-group">
                <div class="comment-form-comment">
                    <!-- <label for="comment">Comment</label> -->
                    <textarea id="comment" name="comment" class="form-control form-control-lg bg-light"  rows="8" maxlength="65525" placeholder="Your Comment" required="required"></textarea>
                </div>
            </div>
            
            
            <!-- <p class="comment-form-url"><label for="url">Website</label> <input id="url" name="url" type="url" value="" size="30" maxlength="200" /></p> -->
            
            <div class="form-group">
                <p class="form-submit">
                    <input name="submit" type="submit" class="btn btn-dark btn-lg" id="submit" class="submit" value="Submit" /> <input type='hidden' name='comment_post_ID' value='128' id='comment_post_ID' />
                    <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                </p>
            </div>			
        </form>
    </div>
</div>

<!-- You can start editing here. -->


