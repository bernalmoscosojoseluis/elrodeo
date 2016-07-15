<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

$asset=AppAsset::register($this);
$baseUrl=$asset->baseUrl;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0 ;background-color:#00e676">
            <?= $this->render('headerNav.php',['baseUrl'=>$baseUrl])?>
            <?= $this->render('toplinks.php',['baseUrl'=>$baseUrl])?>
            <?= $this->render('sidebar.php',['baseUrl'=>$baseUrl])?>
        </nav>

        <div id="page-wrapper">
            <?= $content ?>
        </div>
        <!-- /#page-wrapper -->

    </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
