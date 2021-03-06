<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="description" content="Blog de Jordi Romero con artículos de programación e informática en general. Opinión sobre nuevos sistemas, lenguajes de programación y pequeños tutoriales para aportar mis conocimientos y experiencia a la red.">
<meta name="author" content="Jordi Romero">
<meta name="keywords" content="jordi romero, jordi, romero, programación, desarrollo, programador, desarrollador, programa, software, rails, ruby, ruby on rails, aplicaciones web, aplicación web, web, html, css, php, intranet, internet, git, subversion, svn, informática, ingeniería informática">

<title><?php wp_title('-', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?= get_bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<!-- <link rel="alternate" type="application/atom+xml" title="<?= get_bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />  -->
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?> 

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="wrap">
    <div id="header">
      <h1 id="titol"><a href="<?php echo get_option('home'); ?>" title="Jordi Romero">Jordi Romero</a> blog</h1>
      <!-- <div id="descripcio">

      </div> -->
    </div>
    