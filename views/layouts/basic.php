<?php


use app\assets\AppAsset;
use yii\helpers\Html;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wraap navBarInPosts" style="background: #202021; ">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <?= Html::a('Home','/web/') ?>
                <?= Html::a('Posts',['/post/index']) ?>
                <?= Html::a('Post',['/post/show']) ?>
            </div>
        </nav>

</div>
<div class="container-fluid">
    <?= $content?>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>