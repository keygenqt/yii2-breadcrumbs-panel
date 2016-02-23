<?php

namespace keygenqt\breadcrumbsPanel;

class BreadcrumbsPanel extends \yii\base\Widget
{
    public static $links = [];
    public static $icon = '';

    public $breadcrumbsOptions = [];
    public $backLink = 'Back to page';
    public $homeLink = true;
    public $content;
    
    public static $_init = false;
    
    public function run()
	{
        FontAwesomeAsset::register($this->getView());
        ActiveAssets::register($this->getView());
        
        if ($this->backLink) {
            $exist = false;
            $class = \Yii::$app->controller;
            while (($class = get_parent_class($class)) !== false) {
                if ('keygenqt\lastPage\LastPage' == $class) {
                    $exist = true;
                    break;
                }
            }
            if (!$exist) {
                $className = preg_replace('/.+\\\(.+)/ui', '$1', get_class(\Yii::$app->controller));
                $classNamespase = preg_replace('/(.+)\\\.+/ui', '$1', get_class(\Yii::$app->controller));
                
                throw new \yii\base\Exception("Сonnect LastPage (more: https://github.com/keygenqt/yii2-last-page)

                    namespace $classNamespase;

                    class $className extends \keygenqt\lastPage\LastPage {
                    ...
                ");
            }
        }
        
		return  $this->getView()->render('@keygenqt/breadcrumbsPanel/views/view', ['widget' => $this]);
    }
    
    public static function setParams($links, $icon = '')
    {
        self::$links = $links;
        self::$icon = $icon;
    }
}