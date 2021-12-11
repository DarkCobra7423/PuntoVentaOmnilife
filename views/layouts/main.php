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

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>          
        <?= Html::jsFile('@web/js/all.js') ?>
    </head>

    <style>
        body{
            font-family: 'Roboto', sans-serif;
            background-color: #EBEBEB;
        }
    </style>

    <body class="d-flex flex-column h-100">
        <?php $this->beginBody() ?>        
        <header>


            <?php
            NavBar::begin([
                //'brandLabel' => Yii::$app->name,
                'brandLabel' => '<img src="' . Yii::$app->homeUrl . 'resources/images/logoES.svg" alt="Logo" class="" style="width: 135px;">',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav ml-auto'],
                'encodeLabels' => false,
                'items' => [
                        ['label' => 'Inicio', 'url' => ['/site/index']],
                    Yii::$app->user->isGuest ? ('') : (
                                ['label' => 'Mis compras', 'url' => ['/shoppingcart/myshopping']]
                            ),
                    Yii::$app->user->isGuest ? ('') : (
                                ['label' => '<i class="fas fa-shopping-cart"></i>', 'url' => ['/shoppingcart/shoppingcart']]
                            ),
                    Yii::$app->user->isGuest ? (
                                ['label' => 'About', 'url' => ['/site/about']]
                            ) : (''),
                    Yii::$app->user->isGuest ? (
                                ['label' => 'Contact', 'url' => ['/site/contact']]
                            ) : (''),
                    /* [
                      'label' => 'Backend routes',
                      'items' => UserManagementModule::menuItems()
                      ], */
                    /*
                      Yii::$app->user->isGuest ? ('') : (
                      [
                      'label' => '',
                      'items' => [

                      ['label' => 'Login', 'url' => ['/user-management/auth/login']],
                      ['label' => 'Logout', 'url' => ['/user-management/auth/logout']],
                      ['label' => 'Registration', 'url' => ['/user-management/auth/registration']],

                      ['label' => 'Change own password', 'url' => ['/user-management/auth/change-own-password']],
                      ['label' => 'Password recovery', 'url' => ['/user-management/auth/password-recovery']],
                      ['label' => 'E-mail confirmation', 'url' => ['/user-management/auth/confirm-email']],
                      ],
                      ]
                      ), */
                    Yii::$app->user->isGuest ? (

                                ['label' => '<i class="far fa-user"></i> Iniciar Sesion', 'url' => ['/user-management/auth/login']]
                            ) : (
                                [
                                //'label' => '<i class="far fa-user-circle"></i> ' . Yii::$app->user->identity->username,
                                'label' => '<i class="far fa-user-circle"></i> ' . Yii::$app->user->identity->username, //Yii::$app->globalprofileid->name,
                                'items' => [
                                        ['label' => 'Mi perfil', 'url' => ['/profile/myprofile']],
                                        ['label' => 'Cambiar contraseña', 'url' => ['/user-management/auth/change-own-password']],
                                        ['label' => 'Recuperar contraseña', 'url' => ['/user-management/auth/password-recovery']],
                                        ['label' => 'Confirmar E-mail', 'url' => ['/user-management/auth/confirm-email']],
                                        ['label' => 'Salir ('.Yii::$app->user->identity->username.')', 'url' => ['/user-management/auth/logout']],
                                ],
                            ]
                            ),
                ],
            ]);
            NavBar::end();
            ?>


            <?php
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
            <!--<div class="container">
                <p class="float-left">&copy; My Company <?= date('Y') ?></p>
                <p class="float-right"><?= Yii::powered() ?></p>
            </div>-->
            <div class="container">
                <p class="float-left">&REG; Instituto Tecnologico De Villahermosa <?= date('Y') ?></p>

                <p class="float-right">Desarrollado por: 
                    <a href="//www.facebook.com/carlosdaniel.angelpadilla.3" target="_blank"><i class="fab fa-facebook-f"></i> Carlos Angel, </a>
                    <a href="//www.facebook.com/yesenia.diazhernandez.75" target="_blank"><i class="fab fa-facebook-f"></i> Yesenia Diaz, </a>                    
                </p>                
            </div>
        </footer>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>

<script src="<?= Yii::$app->homeUrl ?>js/scriptMain.js" type="text/javascript"></script>
<script>
    $("#container-id1 .owl-next span").text("Escribe lo que quieras");
    document.querySelector('#container-id1 div .owl-stage').removeAttribute('style');
</script>

<script>

</script>
