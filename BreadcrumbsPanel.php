<?php

namespace keygenqt\breadcrumbsPanel;

class BreadcrumbsPanel extends \yii\widgets\Menu
{
    public $icon;
    public $content;
    
    public function run()
	{
        FontAwesomeAssets::register($this->getView());
        ActiveAssets::register($this->getView());
		return  $this->getView()->render('@keygenqt/breadcrumbsPanel/views/view', ['widget' => $this]);
    }
}