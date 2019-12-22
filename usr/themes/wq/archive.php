<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php    
   /**  
    * archives    
    * @package custom   
    */    
$this->need('header.php');?>   
            <article class="post">
             <?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->parse('<li>{year}-{month}-{day} : <a href="{permalink}">{title}</a></li>'); ?>
                   		</article>	
<?php $this->need('footer.php'); ?>