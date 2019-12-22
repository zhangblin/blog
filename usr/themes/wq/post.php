<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="col-mb-12 col-8" id="main" role="main">
    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
        <h1 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
        
        <div class="post-content" itemprop="articleBody">
            <?php $this->content(); ?>
        </div>
       <footer class="post-meta">
	     
        <a href="#"><?php $this->author(); ?></a>
        <time class="post-date" datetime=""> <?php $this->date('F j, Y'); ?></time>
    </footer>
    
   <div class="post-near">
        <p>上一篇: <?php $this->thePrev('%s','没有了'); ?></p>
        <p>下一篇: <?php $this->theNext('%s','没有了'); ?></p>
    </div>
    	<?php if($this->allow('comment')): ?>
		<?php $this->need('comments.php'); ?>
		<?php endif; ?>
		</article>
</div><!-- end #main-->
<?php $this->need('footer.php'); ?>
