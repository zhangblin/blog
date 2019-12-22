<?php

/*
 * 简单的响应式模板<br>技术支持：<a href="http://bootcss.com">开源模板</a><br/>原作者:<a href="http://bootcss.com.com">cho</a>
 * @package wq
 * @author wq
 * @version 1.0
 * @link http://bootcss.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
?>
 <?php while($this->next()): ?>
 <article class="post">
    <header class="post-header">
        <h2 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
    </header>
    <section class="post-excerpt">
	<?php $this->excerpt(240, '...<p class="read-more"><a href="'.$this->permalink.'">--More--</a></p>');; ?>
     </section>
    <footer class="post-meta">
	     
        <a href="#"><?php $this->author(); ?></a>
        <time class="post-date" datetime=""> <?php $this->date('F j, Y'); ?></time>
    </footer>
</article>
<?php endwhile; ?>
		<?php $this->pageNav('&laquo; Previous','Next &raquo;',2,'...');?>
<?php $this->need('footer.php'); ?>