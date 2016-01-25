<?php
    /* @var $widget keygenqt\breadcrumbsPanel\BreadcrumbsPanel */
?>

<style>
    .yii2-breadcrumbs-panel {
        
    }
    .yii2-breadcrumbs-panel .breadcrumbs-panel {
        
    }
    .yii2-breadcrumbs-panel .content-panel {
        
    }
</style>

<div class="yii2-breadcrumbs-panel">
    <div class="breadcrumbs-panel">
        <?= Breadcrumbs::widget([
            'itemTemplate' => "<li><i>{link}</i></li>\n", // template for all links
            'links' => [
                [
                    'label' => 'Post Category',
                    'url' => ['post-category/view', 'id' => 10],
                    'template' => "<li><b>{link}</b></li>\n", // template for this link only
                ],
                ['label' => 'Sample Post', 'url' => ['post/edit', 'id' => 1]],
                'Edit',
            ],
        ]) ?>
    </div>
    <div class="content-panel">
        <?= $widget->content ?>
    </div>
</div>
