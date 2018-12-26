// show search bar when search btn clicked
$('.search-btn i').click(function(){
  $('.custom-search-form').toggleClass('d-block animated fadeInUp');
});

// show small navbar when navbar-btn clicked
$('.navbar-btn i').click(function(){
  $('.small-navbar').toggleClass('d-block animated fadeInUp');
});

$('.small-navbar .menu-item-has-children a i').addClass('float-right mr-2')

// show small navbar submenu when services i clicked
$('.small-navbar .menu-item-has-children').click(function(){
  $('.small-navbar .menu-item-has-children .sub-menu').toggleClass('d-block');
});

$('.comment-reply-title').html('<h3 id="reply-title" class="comment-reply-title">Write a comment <small><a rel="nofollow" id="cancel-comment-reply-link" href="/onetime/post-4/#respond" style="display:none;">Cancel reply</a></small></h3>');

$(".comment-form-comment").insertAfter(".comment-form-email");

$('.comment-form-comment textarea').attr('placeholder', 'Enter Comment');
$('.comment-form-author input').attr('placeholder', 'Enter Name');
$('.comment-form-email input').attr('placeholder', 'Enter Email');
$('.form-submit .submit').attr('value', 'Submit');

$('#comments').html('<h2>Comments</h2>');



  AOS.init();
