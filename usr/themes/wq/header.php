<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html lang="zh-CN">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="<?php $this->options->charset(); ?>" />
    <meta name="viewport" content="width=device-width,user-scalable=no">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
		<!--[if lt IE 9]>
    <script type="text/javascript" src="http://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="http://cdn.staticfile.org/normalize/3.0.1/normalize.min.css">
     <link rel="stylesheet" href="<?php $this->options->themeUrl('Css/screen.css'); ?>">
	<link rel="stylesheet" href="<?php $this->options->themeUrl('Css/font.css'); ?>">
    <script type="text/javascript" src="http://cdn.staticfile.org/jquery/1.11.0/jquery.min.js"></script>
	<script src="https://use.fontawesome.com/4d8488d445.js"></script>
	<link rel="shortcut icon" href="<?php $this->options->themeUrl('favicon.ico'); ?>">
    <?php $this->header('keywords=&generator=&template=&pingback=&xmlrpc=&wlw=&commentReply=&rss1=&rss2=&atom='); ?>
   </head>

<body class="home-template nav-closed">

    <div class="nav">
    <h3 class="nav-title">Menu</h3>
    <a href="#" class="nav-close">
        <span class="hidden">Close</span>
    </a>
	
	<ul>
	<li class="nav-home nav-current" role="presentation">
                    <a class="<?php if($this->is('index')): ?>current<?php endif; ?> <?php if($this->is('post')): ?>current<?php endif; ?>" href="<?php $this->options->siteUrl(); ?>"><?php _e('Home'); ?></a>
                    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                    <?php while($pages->next()): ?>
                    <a <?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                    <?php endwhile; ?></li>
                </ul>
				<a class="subscribe-button" href="<?php $this->options->siteUrl(); ?>"><i class="fa fa-rss"></i>Subscribe</a>
  </div>
<span class="nav-cover"></span>
    <div class="site-wrapper">
<header class="main-header no-cover">
    <nav class="main-nav overlay clearfix">
   <a class="menu-button " href="#"><i class="fa fa-bars"></i><span class="word">Menu</span></a>
    </nav>
    <div class="vertical">
        <div class="main-header-content inner">
		<h1 class="page-title" ><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></h1>
        	     <h2 class="page-description"><?php $this->options->description() ?></h2>
                   </div>
                    </div>
<a class="scroll-down icon-arrow-left" href="#content" data-offset="-45"><span class="hidden">Scroll Down</span></a>
</header>
<main id="content" class="content" role="main">
    <div class="extra-pagination inner">
    <nav class="pagination" role="navigation">
    <span class="page-number">Page 1 of 3</span>
	<a class="older-posts" href="/page/2/">Older Posts <span aria-hidden="true">&rarr;</span></a>
</nav>
</div>










