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

        <style>

            @import url('https://fonts.googleapis.com/css?family=Roboto');

            body{
                font-family: 'Roboto', sans-serif;
                background-color: #EBEBEB;
            }
            * {
                margin: 0;
                padding: 0;
            }
            i {
                margin-right: 10px;
            }
            /*----------bootstrap-navbar-css------------*/
            .navbar-brand {
                /*padding: 15px;*/
                color: #fff;  
                width: 35%;
            }
            /*
            .navbar-logo{
                padding: 15px;
                color: #fff;
            }
            */
            .navbar-mainbg{
                /*background-color: #5161ce;*/
                background-color: #2F2F2F;
                padding: 0px;
            }
            div .navbar-collapse{
                overflow: hidden;
                /*position: relative;*/
            }
            div .navbar-collapse ul{
                padding: 0px;
                margin: 0px;
            }
            div .navbar-collapse ul li a i{
                margin-right: 10px;
            }
            div .navbar-collapse li {
                list-style-type: none;
                float: left;
            }
            div .navbar-collapse ul li a{
                color: rgba(255,255,255,0.5);
                text-decoration: none;
                font-size: 15px;
                display: block;
                padding: 20px 20px;
                transition-duration:0.6s;
                transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
                position: relative;
            }
            /*
            #w0-collapse>ul>li.active>a{
                color: #5161ce;
                background-color: transparent;
                transition: all 0.7s;
            }*/

            div .navbar-collapse ul li a.active {
                /*color: #5161ce;*/
                color: #2F2F2F;
                background-color: transparent;
                transition: all 0.7s;
            }    

            div .navbar-collapse a:not(:only-child):after {
                content: "\f105";
                position: absolute;
                right: 20px;
                top: 10px;
                font-size: 14px;
                font-family: "Font Awesome 5 Free";
                display: inline-block;
                padding-right: 3px;
                vertical-align: middle;
                font-weight: 900;
                transition: 0.5s;
            }
            div .navbar-collapse .active>a:not(:only-child):after {
                transform: rotate(90deg);
            }
            .hori-selector{
                display:inline-block;
                position:absolute;
                height: 100%;
                top: 0px;
                left: 0px;
                transition-duration:0.6s;
                transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
                /*background-color: #fff;*/
                background-color: #EBEBEB;
                border-top-left-radius: 15px;
                border-top-right-radius: 15px;
                margin-top: 10px;
            }
            .hori-selector .right,
            .hori-selector .left{
                position: absolute;
                width: 25px;
                height: 25px;
                /*background-color: #fff;*/
                background-color: #EBEBEB;
                bottom: 10px;
            }
            .hori-selector .right{
                right: -25px;
            }
            .hori-selector .left{
                left: -25px;
            }
            .hori-selector .right:before,
            .hori-selector .left:before{
                content: '';
                position: absolute;
                width: 50px;
                height: 50px;
                border-radius: 50%;
                /*background-color: #5161ce;*/
                background-color: #2F2F2F;
            }
            .hori-selector .right:before{
                bottom: 0;
                right: -25px;
            }
            .hori-selector .left:before{
                bottom: 0;
                left: -25px;
            }


            @media(min-width: 992px){
                .navbar-expand-custom {
                    -ms-flex-flow: row nowrap;
                    flex-flow: row nowrap;
                    -ms-flex-pack: start;
                    justify-content: flex-start;
                }
                .navbar-expand-custom .navbar-nav {
                    -ms-flex-direction: row;
                    flex-direction: row;
                }
                .navbar-expand-custom .navbar-toggler {
                    display: none;
                }
                .navbar-expand-custom .navbar-collapse {
                    display: -ms-flexbox!important;
                    display: flex!important;
                    -ms-flex-preferred-size: auto;
                    flex-basis: auto;
                }
            }


            @media (max-width: 991px){
                div .navbar-collapse ul li a{
                    padding: 12px 30px;
                }
                .hori-selector{
                    margin-top: 0px;
                    margin-left: 10px;
                    border-radius: 0;
                    border-top-left-radius: 25px;
                    border-bottom-left-radius: 25px;
                }
                .hori-selector .left,
                .hori-selector .right{
                    right: 10px;
                }
                .hori-selector .left{
                    top: -25px;
                    left: auto;
                }
                .hori-selector .right{
                    bottom: -25px;
                }
                .hori-selector .left:before{
                    left: -25px;
                    top: -25px;
                }
                .hori-selector .right:before{
                    bottom: -25px;
                    left: -25px;
                }
            }
            
            /* ///////////////////////////////////////////// */

            #w2{
                margin: 0;
                padding: 0;
            }
            
            .navbar-nav .nav-link {
                padding: 20px 20px;
            }

        </style>

        <header>

            <?php
            NavBar::begin([
                //'brandImage' => Yii::$app->homeUrl . 'image/regcivil.svg',
                'brandLabel' => '<img src="' . Yii::$app->homeUrl . 'resources/images/logoES.svg" alt="Logo" class="navbar-brand navbar-logo" style="margin-top: -7px; margin-right: 3px;">',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar navbar-expand-custom navbar-mainbg',
                ],
            ]);
            ?>
            <?=
            Nav::widget([
                'options' => ['class' => 'navbar-nav ml-auto'],
                'encodeLabels' => false,
                'activateParents' => true,
                'items' => [
                    '<div class="hori-selector"><div class="left"></div><div class="right"></div></div>',
                        ['label' => 'Inicio', 'url' => ['/site/index']],
                        ['label' => 'Crea tu cuenta', 'url' => ['/user-management/auth/registration']],
                        ['label' => 'Ingresa', 'url' => ['/user-management/auth/login']],
                        ['label' => 'Mis compras', 'url' => ['/bank/index']],
                        ['label' => '<i class="fas fa-shopping-cart"></i>', 'url' => ['/site/car']],

                ],
            ]);

            NavBar::end();
            ?>
        </header>
        <br>
        <main role="main" class="flex-shrink-0">
            <div class="container">
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

<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script type="text/javascript">
// ---------Responsive-navbar-active-animation-----------
    function test() {
        var tabsNewAnim = $('div .navbar-collapse');
        var selectorNewAnim = $('div .navbar-collapse').find('li').length;
        var activeItemNewAnim = tabsNewAnim.find('.active');
        var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
        var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
        var itemPosNewAnimTop = activeItemNewAnim.position();
        var itemPosNewAnimLeft = activeItemNewAnim.position();
        $(".hori-selector").css({
            "top": itemPosNewAnimTop.top + "px",
            "left": itemPosNewAnimLeft.left + "px",
            "height": activeWidthNewAnimHeight + "px",
            "width": activeWidthNewAnimWidth + "px"
        });
        $("div .navbar-collapse").on("click", "li", function (e) {
            $('div .navbar-collapse ul li').removeClass("active");
            $(this).addClass('active');
            var activeWidthNewAnimHeight = $(this).innerHeight();
            var activeWidthNewAnimWidth = $(this).innerWidth();
            var itemPosNewAnimTop = $(this).position();
            var itemPosNewAnimLeft = $(this).position();
            $(".hori-selector").css({
                "top": itemPosNewAnimTop.top + "px",
                "left": itemPosNewAnimLeft.left + "px",
                "height": activeWidthNewAnimHeight + "px",
                "width": activeWidthNewAnimWidth + "px"
            });
        });
    }
    $(document).ready(function () {
        setTimeout(function () {
            test();
        });
    });
    $(window).on('resize', function () {
        setTimeout(function () {
            test();
        }, 500);
    });
    $(".navbar-toggler").click(function () {
        $(".navbar-collapse").slideToggle(300);
        setTimeout(function () {
            test();
        });
    });



// --------------add active class-on another-page move----------
    jQuery(document).ready(function ($) {
        // Get current path and find target link
        var path = window.location.pathname.split("/").pop();

        // Account for home page with empty path
        if (path == '') {
            path = 'index.html';
        }

        var target = $('div .navbar-collapse ul li a[href="' + path + '"]');
        // Add active class to target link
        target.parent().addClass('active');
    });
</script>