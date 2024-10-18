<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'href' => Yii::getAlias('@web/images/logo.png')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<main id="main">
    <div class="container_">
        <?= $content ?>
    </div>
</main>

<footer class="footer_nav">
    <ul>
        <li><a href="/" class="<?= trim($_SERVER['REQUEST_URI'], '/') === '' ? 'active' : null ?>"><i class="fa-solid fa-magnifying-glass"></i>Поиск</a></li>
        <li><a href="/article" class="<?= strstr(trim($_SERVER['REQUEST_URI'], '/'), 'article') ? 'active' : null ?>"><i class="fa-regular fa-file-lines"></i>Статьи</a></li>
        <li><a href="/favorite" class="<?= strstr(trim($_SERVER['REQUEST_URI'], '/'), 'favorite') ? 'active' : null ?>"><i class="fa-regular fa-heart"></i>Избранное</a></li>
        <li><a href="/user" class="<?= strstr(trim($_SERVER['REQUEST_URI'], '/'), 'user') ? 'active' : null ?>"><i class="fa-regular fa-user"></i>Профиль</a></li>
    </ul>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
