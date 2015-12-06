<!DOCTYPE html>
<html lang="de">

<head <?php echo apply_filters("head_attributes", "" ); ?>>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="<?php bloginfo("description") ?>">
    <meta name="keywords" content="two aboard tuuli,tuuli,sailing,segeln,sailboat,segelboot,liveaboard,circumnavigate,cruising,bluewater,blauwasser">
    <meta name="author" content="Thomas Brüggemann" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />

    <?php wp_head(); ?>

    <link rel="stylesheet" href="<?php bloginfo("stylesheet_directory"); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo("stylesheet_directory"); ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open Sans:300,300italic,600,600italic|Pacifico:400|Pacifico:400&subset=latin" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">

    <link rel="alternate" type="application/rdf+xml" href="<?php bloginfo("rdf_url"); ?>" />
    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" href="<?php bloginfo('atom_url'); ?>" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>