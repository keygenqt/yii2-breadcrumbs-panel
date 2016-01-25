<?php

namespace keygenqt\breadcrumbsPanel;

class BreadcrumbsPanel extends \yii\widgets\Menu
{
    public static $links = [];
    public static $icon = '';
    
    public $homeLink = true;
    public $content;
    
    public static $_init = false;
    
    public function run()
	{
        FontAwesomeAssets::register($this->getView());
        ActiveAssets::register($this->getView());
		return  $this->getView()->render('@keygenqt/breadcrumbsPanel/views/view', ['widget' => $this]);
    }
    
    public static function setParams($links, $icon = '')
    {
        self::$links = $links;
        self::$icon = $icon;
    }
}