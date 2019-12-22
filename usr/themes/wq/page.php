<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="col-8" id="main">
	<div class="res-cons">
		<article class="post">
			<header>
				<h1 class="post-title">
					<?php $this->title() ?>
				</h1>
			</header>
			<div class="page-content post-content">
				<?php $this->content(); ?>
			</div>
			<?php if(!$this->allow('comment')): ?>
			<footer class="post-footer">
				<section class="author">
					<div class="author-ava">
						<img src="<?php echo getGravatar($this->options->navy_gravatar,160); ?>" alt="" width="160" height="160" />
					</div>
									</section>
            </footer>
            <?php endif; ?>
		
		<?php if($this->allow('comment')): ?>
		<?php $this->need('comments.php'); ?>
		<?php endif; ?>
		</article>
	</div>
</div>
<?php $this->need('footer.php'); ?>