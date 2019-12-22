<?php
/**
 * The main template file
 * 
 * @package Kratos
 * @author Vtrois
 * @version 1.0
 * @link https://www.vtrois.com/theme-kratos.html
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');?>
	<div class="container">
		<div class="row">
			<section id="main" class="col-md-8">
			<?php if($this->have()):?>
			<?php while($this->next()): ?>
			<article class="kratos-hentry clearfix">
				<div class="kratos-entry-border-new clearfix">
					<div class="kratos-entry-thumb-new">
						<a href="<?php $this->permalink(); ?>"><img src="<?php echo showThumb($this,null,true); ?>"></a>
					</div>
					<div class="kratos-post-inner-new">
						<header class="kratos-entry-header-new">
							<a class="label"><?php $this->category(',',false); ?><i class="label-arrow"></i></a>
							<h2 class="kratos-entry-title-new"><a href="<?php $this->permalink(); ?>"><?php $this->title(); ?></a></h2>
						</header>
						<div class="kratos-entry-content-new">
							<p><?php $this->excerpt(90, '...'); ?></p>
						</div>
					</div>
					<div class="kratos-post-meta-new">
					<span class="visible-lg visible-md visible-sm pull-left">
					<a href="#"><i class="fa fa-calendar"></i> <?php $this->date('Y/m/d'); ?></a>
					<a href="<?php $this->permalink(); ?>#respond"><i class="fa fa-commenting-o"></i> <?php $this->commentsNum('0', '1', '%d'); ?> Comments</a>
					</span>
					<span class="pull-left">
					<a href="<?php $this->permalink(); ?>"><i class="fa fa-eye"></i> <?php get_post_view($this); ?> Views</a>
					</span>
					<span class="pull-right">
					<a class="read-more" href="<?php $this->permalink(); ?>" title="Read More">Read More <i class="fa fa-chevron-circle-right"></i></a>
					</span>
					</div>
				</div>
			</article>
		<?php endwhile; ?>
		<?php else: ?>
		<div class="kratos-hentry clearfix">
			<h1 class="kratos-post-header-title">Sorry. No Post Yet!</h1>
		</div>
		<?php endif; ?>


        		<?php $this->pageNav('<', '>', 3, '...', array('wrapTag' => 'ul', 'wrapClass' => 'pagination', 'itemTag' => 'li', 'textTag' => '', 'currentClass' => 'active', 'prevClass' => 'prev', 'nextClass' => 'next')); ?>
			</section>
			<aside id="kratos-widget-area" class="col-md-4 hidden-xs hidden-sm scrollspy">
                <div id="sidebar">
                    <?php $this->need('sidebar.php'); ?>
                </div>
            </aside>
		</div>
	</div>
</div>
<?php $this->need('footer.php'); ?>