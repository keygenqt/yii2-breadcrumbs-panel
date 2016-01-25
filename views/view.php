<?php
    /* @var $widget keygenqt\breadcrumbsPanel\BreadcrumbsPanel */

    use \yii\widgets\Breadcrumbs;
?>

<style>
    .yii2-breadcrumbs-panel {
        width: 100%;
        display: table;
    }
    .yii2-breadcrumbs-panel .breadcrumbs-panel {
        background: #3d0047;
        display: table-row;
    }
    .yii2-breadcrumbs-panel .content-panel {
        border: 1px solid #3d0047;
        display: table-row;
    }
    .yii2-breadcrumbs-panel ul {
        margin: 0;
        padding: 10px 20px;
    }
    .yii2-breadcrumbs-panel ul li {
        display: inline-block;
        color: white;
    }
    .yii2-breadcrumbs-panel ul li a {
        color: white;
    }
    .yii2-breadcrumbs-panel ul li:after {
        content: "/";
        margin-left: 10px;
        margin-right: 3px;
    }
    .yii2-breadcrumbs-panel ul li:last-child:after {
        content: "";
    }
    
    
    

</style>

<div class="yii2-breadcrumbs-panel">
    <div class="breadcrumbs-panel">
        <?= Breadcrumbs::widget([
            'options' => [],
            'links' => [
                [
                    'label' => 'Sample Post', 
                    'url' => ['post/edit', 'id' => 1]
                ],
                'Edit'
            ],
        ]) ?>
    </div>
    <div class="content-panel">
        <?= $widget->content ?>
    </div>
</div>
