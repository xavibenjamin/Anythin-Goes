<!DOCTYPE html>
<head>
  <meta charset="utf-8" />
  <title><?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="shortcut icon" href="/favicon.ico">
  
  <!-- My styles -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/global.css"/>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/responsify.css"/>

  <!-- Typekit Code -->
  <script type="text/javascript" src="//use.typekit.net/ajt3pap.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>


  <!--WP Generated Header -->
  <?php wp_head(); ?>
  <!--End WP Generated Header -->
  
</head>

<body>

<div class="wrapper">

<header role="banner">
  <div class="contain">
    <a href="/" title="Homepage" class="logo"><img src="<?php bloginfo( 'template_url');?>/img/AG_logo.svg" alt="Anythin' Goes"></a>
  </div>
</header>