<?php
    /* @var $widget keygenqt\breadcrumbsPanel\BreadcrumbsPanel */

    use \yii\widgets\Breadcrumbs;
    use keygenqt\breadcrumbsPanel\BreadcrumbsPanel;

?>

<?php if ($widget->homeLink === false): ?>
    <style>
        .yii2-breadcrumbs-panel .breadcrumbs-panel ul li:first-child {
            display: none;
        }
    </style>
<?php endif; ?>

<div class="yii2-breadcrumbs-panel">
    <div class="breadcrumbs-panel">
        <div class="breadcrumbs-cell">
            
            <?php if (BreadcrumbsPanel::$icon): ?>
                <div class="breadcrumbs-icon">
                    <i class="<?= BreadcrumbsPanel::$icon ?>"></i>
                </div>
            <?php endif; ?>
            
            <?php if (BreadcrumbsPanel::$links): ?>
                <?= Breadcrumbs::widget(\yii\helpers\ArrayHelper::merge($widget->breadcrumbsOptions, [
                    'options' => [],
                    'links' => BreadcrumbsPanel::$links
                ])) ?>
            <?php endif; ?>
            
            <?php if ($widget->backLink): ?>
                <?= yii\helpers\Html::a($widget->backLink, Yii::$app->user->getReturnUrl(), ['class' => 'back-link']) ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="content-panel">
        <div class="breadcrumbs-cell">
            <?= $widget->content ?>
        </div>
    </div>
</div>
