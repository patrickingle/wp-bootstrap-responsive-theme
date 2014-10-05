<?php
$post = get_post(); 
$userdata =  get_userdata($post->post_author);
?>
<!DOCTYPE html>
<html>
  <head>
    <title><?php echo wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="<?php echo $userdata->display_name; ?>">
    <!-- Bootstrap -->
    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" media="screen">
    <link href="<?php bloginfo('template_directory'); ?>/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
    
    <?php wp_head(); ?>
  </head>
  <body>
