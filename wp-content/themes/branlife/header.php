<?php 

    $list_id = '9a91a04841';
    $api_key = 'f1ce98886a3aded58e85e6a1e5b05fb5-us19';
    
    include get_parent_theme_file_path('inc/MailChimp.php');

    use \DrewM\MailChimp\MailChimp;

    $MailChimp = new MailChimp($api_key);

    
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans|Open+Sans+Condensed:300|Text+Me+One" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>

<!-- Whole page container -->
<div class="page-container">
        <!-- Top Navbar -->
        <?php get_template_part('template-parts/content', 'navbar') ?>


        <?php 
            if(isset($_POST['subscribe'])){
                //global $list_id, $api_key;
                $subscribe_email = $_POST['subscribe_email'];
        
                $result = $MailChimp->post("lists/$list_id/members", [
                    'email_address' => $subscribe_email,
                    'status'        => 'subscribed',
                ]);
        
                if ($MailChimp->success()) {
                    echo '
                        <div class="alert alert-success">
                            You are subscribed
                        </div>
                    ';
                } else {
                    echo '
                    <div class="alert alert-danger">
                        '.$MailChimp->getLastError().'
                    </div>
                ';
                }
            }
        
        ?>