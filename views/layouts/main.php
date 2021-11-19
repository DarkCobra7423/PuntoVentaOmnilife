<?php
/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use webvimark\modules\UserManagement\components\GhostMenu;
use webvimark\modules\UserManagement\UserManagementModule;
use webvimark\modules\UserManagement\components\GhostNav;
use app\models\AuthAssignment;

$rols = AuthAssignment::find()->select('item_name')->where(['user_id' => Yii::$app->user->id])->one();

if ($rols == "") {
    $rol = "false";
} else {
    $rol = $rols->item_name;
}

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>          
        <?= Html::jsFile('@web/js/all.js') ?>
    </head>
    <body class="d-flex flex-column h-100">
        <?php $this->beginBody() ?>        
        <link href="<?= Yii::$app->homeUrl ?>css/styleMain.css" rel="stylesheet" type="text/css"/>

        <header>

            <?php
            NavBar::begin([
                'brandLabel' => '<img src="' . Yii::$app->homeUrl . 'resources/images/logoES.svg" alt="Logo" class="navbar-brand navbar-logo" style="margin-top: -7px; margin-right: 3px;">',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar navbar-expand-custom navbar-mainbg',
                ],
            ]);
            ?>

            <?=
            GhostNav::widget([
                //    Nav::widget([
                'options' => ['class' => 'navbar-nav ml-auto'],
                'encodeLabels' => false,
                'activateParents' => true,
                'items' => [
                    '<div class="hori-selector"><div class="left"></div><div class="right"></div></div>',
                        ['label' => 'Productos', 'url' => ['/site/index']],
                    Yii::$app->user->isGuest ? ('') : (
                        ['label' => 'Crea tu cuenta', 'url' => ['/user-management/auth/registration']]
                            ),
                    Yii::$app->user->isGuest ? (
                        ['label' => 'Ingresa', 'url' => ['/user-management/auth/login']]
                            ) : (''),
                    Yii::$app->user->isGuest ? (
                            ['label' => 'Sobre Nosotros', 'url' => ['/site/about']]
                            ) : (''),
                    $rol == 'Cliente' ? (
                                ['label' => 'Mis compras', 'url' => ['/shoppingcart/myshopping']]
                            ) : (''),
                    $rol == 'Vendedor' ? (
                                ['label' => 'Panel de control', 'url' => ['/product/dashboard']]
                            ) : (''),                                            
                    $rol == 'Cliente' ? (
                                ['label' => '<i class="fas fa-shopping-cart"></i>', 'url' => ['/shoppingcart/index']]
                            ) : (''),                        
                    Yii::$app->user->isGuest ? ('') : (
                                ['label' => 'Salir (' . Yii::$app->user->identity->username . ')', 'url' => ['/user-management/auth/logout']]
                            )
                ],
            ]);

            /*
              GhostNav::widget([
              //    Nav::widget([
              'options' => ['class' => 'navbar-nav ml-auto'],
              'encodeLabels' => false,
              'activateParents' => true,
              'items' => [
              '<div class="hori-selector"><div class="left"></div><div class="right"></div></div>',
              ['label' => 'Productos', 'url' => ['/site/index']],
              ['label' => 'Crea tu cuenta', 'url' => ['/user-management/auth/registration']],
              Yii::$app->user->isGuest ? (
              ['label' => 'Ingresa', 'url' => ['/user-management/auth/login']]
              ) : (''),
              Yii::$app->user->isGuest ? (
              ['label' => 'Sobre Nosotros', 'url' => ['/site/about']]
              ) : (''),

              ['label' => 'Mis compras', 'url' => ['/shoppingcart/index']],
              ['label' => 'Panel de control', 'url' => ['/product/index']],
              ['label' => '<i class="fas fa-shopping-cart"></i>', 'url' => ['/shoppingcart/index']],

              Yii::$app->user->isGuest ? ('') : (
              ['label' => 'Logout (' . Yii::$app->user->identity->username . ')', 'url' => ['/user-management/auth/logout']]
              )



              ],
              ]); */

            NavBar::end();
            ?>
        </header>

        <main id="idMain" role="main" class="flex-shrink-0 br1">
            <div id="idContainer" class="container">
                <?=
                Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
                ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </main>

        <footer class="footer mt-auto py-3 text-muted">
            <div class="container">
                <p class="float-left">&copy; My Company <?= date('Y') ?></p>
                <p class="float-right"><?= Yii::powered() ?></p>
            </div>
        </footer>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>

<!--<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>-->

<script src="<?= Yii::$app->homeUrl ?>js/scriptMain.js" type="text/javascript"></script>
<script>
    $("#container-id1 .owl-next span").text("Escribe lo que quieras");
    document.querySelector('#container-id1 div .owl-stage').removeAttribute('style');
</script>