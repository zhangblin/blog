<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
/**
 * 实现当前分类上下篇
 *
 * @package CategoryNext
 * @author 雷鬼
 * @version 1.0.0
 * @link http://www.typechodev.com
 */
class CategoryNext_Plugin implements Typecho_Plugin_Interface
{
    public static function activate(){}
    public static function deactivate(){}
    public static function config(Typecho_Widget_Helper_Form $form){}
    public static function personalConfig(Typecho_Widget_Helper_Form $form){}

    /**
     * 显示下一个内容的标题链接
     *
     * @access public
     * @param string $format 格式
     * @param string $default 如果没有下一篇,显示的默认文字
     * @param array $custom 定制化样式
     * @param Widget_Archive $archive
     * @param int $mid
     * @return void
     */
    public static function theNext($format = '%s', $default = NULL, $custom = array(),$archive=null)
    {
        $db = Typecho_Db::get();
        $options = Helper::options();
        @$mid=intval($archive->categories[0]['mid']);
        $select = $archive->select()->where('table.contents.created > ? AND table.contents.created < ?',
            $archive->created, $options->gmtTime)
            ->join('table.relationships', 'table.contents.cid = table.relationships.cid')
            ->where('table.relationships.mid = ?', $mid)
            ->where('table.contents.status = ?', 'publish')
            ->where('table.contents.type = ?', 'post')
            ->where('table.contents.password IS NULL')
            ->order('table.contents.created', Typecho_Db::SORT_ASC)
            ->limit(1);
        $content = $db->fetchRow($select);

        if ($content) {
            $content = $archive->filter($content);
            $default = array(
                'title' => NULL,
                'tagClass' => NULL
            );
            $custom = array_merge($default, $custom);
            extract($custom);

            $linkText = empty($title) ? $content['title'] : $title;
            $linkClass = empty($tagClass) ? '' : 'class="' . $tagClass . '" ';
            $link = '<a ' . $linkClass . 'href="' . $content['permalink'] . '" title="' . $content['title'] . '">' . $linkText . '</a>';

            printf($format, $link);
        } else {
            echo $default;
        }
    }

    /**
     * 显示上一个内容的标题链接
     *
     * @access public
     * @param string $format 格式
     * @param string $default 如果没有上一篇,显示的默认文字
     * @param array $custom 定制化样式
     * @param Widget_Archive $archive
     * @param int $mid
     * @return void
     */
    public function thePrev($format = '%s', $default = NULL, $custom = array(),$archive=null)
    {
        $db = Typecho_Db::get();
        @$mid=intval($archive->categories[0]['mid']);
        $select=$archive->select()->where('table.contents.created < ?', $archive->created)
            ->join('table.relationships', 'table.contents.cid = table.relationships.cid')
            ->where('table.relationships.mid = ?', $mid)
            ->where('table.contents.status = ?', 'publish')
            ->where('table.contents.type = ?', 'post')
            ->where('table.contents.password IS NULL')
            ->order('table.contents.created', Typecho_Db::SORT_DESC)
            ->limit(1);

        $content  = $db->fetchRow($select);

        if ($content) {
            $content = $archive->filter($content);
            $default = array(
                'title' => NULL,
                'tagClass' => NULL
            );
            $custom = array_merge($default, $custom);
            extract($custom);

            $linkText = empty($title) ? $content['title'] : $title;
            $linkClass = empty($tagClass) ? '' : 'class="' . $tagClass . '" ';
            $link = '<a ' . $linkClass . 'href="' . $content['permalink'] . '" title="' . $content['title'] . '">' . $linkText . '</a>';

            printf($format, $link);
        } else {
            echo $default;
        }
    }
}
