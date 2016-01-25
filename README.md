yii2-breadcrumbs-panel
===================

Panel with Breadcrumbs. Made for my the admin panel on yii2.

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either add

```
"require": {
    "keygenqt/yii2-breadcrumbs-panel": "*"
},
"repositories":[
    {
        "type": "git",
        "url": "https://github.com/keygenqt/yii2-breadcrumbs-panel.git"
    }
]
```

of your `composer.json` file.

## Latest Release

The latest version of the module is v0.5.0 `BETA`.

## Usage

Layouts

```php
use \keygenqt\breadcrumbsPanel\BreadcrumbsPanel;

<?= BreadcrumbsPanel::widget([
	'homeLink' => false,
	'content' => $content
]) ?>
```

View

```php
use \keygenqt\breadcrumbsPanel\BreadcrumbsPanel;

BreadcrumbsPanel::setParams([
	[
		'label' => 'Sample Post', 
		'url' => ['post/edit', 'id' => 1]
	],
	'Edit'
], 'fa fa-desktop');
```

## License

**yii2-breadcrumbs-panel** is released under the BSD 3-Clause License. See the bundled `LICENSE.md` for details.


