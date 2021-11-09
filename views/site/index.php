<?php
/* @var $this yii\web\View */

use kv4nt\owlcarousel\OwlCarouselWidget;
use yii\helpers\Html;

$this->title = 'Omnilife Castellanos';
?>
<link href="<?= Yii::$app->homeUrl ?>css/styleSiteIndex.css" rel="stylesheet" type="text/css"/>

<div class="site-index">

    <?php
    OwlCarouselWidget::begin([
        'container' => 'div',
        'containerOptions' => [
            'id' => 'container-id',
            'class' => 'container-class owl-theme owl-loaded'
        ],
        'pluginOptions' => [
            'autoplay' => true,
            'autoplayTimeout' => 3000,
            'items' => 1,
            'loop' => true,
            'itemsDesktop' => [1199, 3], //[1199, 3]
            'itemsDesktopSmall' => [979, 3], //[979, 3]
        //'nav' => true            
        ]
    ]);
    ?>

    <div class="item-class"><img src="<?= Yii::$app->homeUrl ?>resources/carousel/slider1.jpg" alt="Image 1" style="/*max-height: 500px;*/"></div>
    <div class="item-class"><img src="<?= Yii::$app->homeUrl ?>resources/carousel/slider2.jpg" alt="Image 2" style="/*max-height: 500px;*/"></div>
    <div class="item-class"><img src="<?= Yii::$app->homeUrl ?>resources/carousel/slider3.jpg" alt="Image 3" style="/*max-height: 500px;*/"></div>


    <?php OwlCarouselWidget::end(); ?>

</div>

<div class="container">

    <div class="row">

        <div class="col-md-3 bd-callout bd-callout-blue bg-callout-border" >
            <h5>Conveying meaning to<br>assistive technologies</h5>
        </div>
        <div class="col-md-3 bd-callout bg-callout-border">
            <h5>Conveying meaning to<br>assistive technologies</h5>
        </div>
        <div class="col-md-3 bd-callout bg-callout-border">
            <h5>Conveying meaning to<br>assistive technologies</h5>
        </div>
        <div class="col-md-3 bd-callout bg-callout-border">
            <h5>Conveying meaning to<br>assistive technologies</h5>
        </div>        
    </div>

    <!-------------------------------------->
    <style>
        /*! CSS Used from: https://http2.mlstatic.com/frontend-assets/ui-navigation/5.16.2/mercadolibre/navigation-desktop.css ; media=(min-width: 1024px) */
        @media (min-width: 1024px){
            :focus:not(:focus-visible){outline:0;}
        }
        /*! CSS Used from: https://http2.mlstatic.com/frontend-assets/ui-navigation/5.16.2/mercadolibre/navigation-mobile.css ; media=(max-width: 1023px) */
        @media (max-width: 1023px){
            :focus:not(:focus-visible){outline:0;}
        }
        /*! CSS Used from: https://http2.mlstatic.com/frontend-assets/homes-palpatine/home.desktop.b048b39a.css */
        #container-id1 .owl-next:hover{-webkit-transition:box-shadow .1s ease-out;transition:box-shadow .1s ease-out;box-shadow:0 7px 16px 0 rgba(0,0,0,.2),0 1px 3px 0 rgba(0,0,0,.1);-webkit-transition:box-shadow .2s;transition:box-shadow .2s;}
        #container-id1:hover .owl-next{display:block;}
        #container-id1 .owl-next{right:-24px;}
        #container-id1 .owl-next{width:64px;height:64px;display:none;background-color:#fff;border-radius:50%;border-width:0;box-shadow:0 2px 4px 0 rgba(0,0,0,.19);cursor:pointer;outline:0;position:absolute;top:48%;z-index:2;}
        #container-id1 .owl-next .clipped{position:absolute;z-index:-1;border:0;clip:rect(0 0 0 0);-webkit-clip-path:inset(50%);clip-path:inset(50%);margin:0 -1px -1px 0;overflow:hidden;padding:0;}
        #container-id1 .owl-next:after,#container-id1 .owl-next:before{content:"";display:block;width:14px;height:2px;background:#3483fa;position:absolute;}
        #container-id1 .owl-next:after,#container-id1 .owl-next:before{left:50%;margin-left:-6px;}
        #container-id1 .owl-next:before{-webkit-transform:rotate(45deg);transform:rotate(45deg);top:50%;margin-top:-5px;}
        #container-id1 .owl-next:after{-webkit-transform:rotate(-45deg);transform:rotate(-45deg);bottom:50%;margin-bottom:-6px;}
        @media screen and (max-width:1168px){
            #container-id1 .owl-next{right:1px;}
        }
        @media screen and (max-width:1168px)and (max-width:769px){
            #container-id1 .owl-next{right:-20px;}
        }
        .clipped{position:absolute;z-index:-1;border:0;clip:rect(0 0 0 0);-webkit-clip-path:inset(50%);clip-path:inset(50%);margin:0 -1px -1px 0;overflow:hidden;padding:0;display:block;}
        .recommendations #container-id1 .owl-next{top:120px;}


        /*! CSS Used from: https://http2.mlstatic.com/frontend-assets/ui-navigation/5.16.2/mercadolibre/navigation-desktop.css ; media=(min-width: 1024px) */
        @media (min-width: 1024px){
            :focus:not(:focus-visible){outline:0;}
        }
        /*! CSS Used from: https://http2.mlstatic.com/frontend-assets/ui-navigation/5.16.2/mercadolibre/navigation-mobile.css ; media=(max-width: 1023px) */
        @media (max-width: 1023px){
            :focus:not(:focus-visible){outline:0;}
        }
        /*! CSS Used from: https://http2.mlstatic.com/frontend-assets/homes-palpatine/home.desktop.b048b39a.css */
        #container-id1 .owl-prev:hover{-webkit-transition:box-shadow .1s ease-out;transition:box-shadow .1s ease-out;box-shadow:0 7px 16px 0 rgba(0,0,0,.2),0 1px 3px 0 rgba(0,0,0,.1);-webkit-transition:box-shadow .2s;transition:box-shadow .2s;}
        #container-id1:hover .owl-prev{display:block;}
        #container-id1 .owl-prev{left:-24px;}
        #container-id1 .owl-prev{width:64px;height:64px;display:none;background-color:#fff;border-radius:50%;border-width:0;box-shadow:0 2px 4px 0 rgba(0,0,0,.19);cursor:pointer;outline:0;position:absolute;top:48%;z-index:2;}
        #container-id1 .owl-prev .clipped{position:absolute;z-index:-1;border:0;clip:rect(0 0 0 0);-webkit-clip-path:inset(50%);clip-path:inset(50%);margin:0 -1px -1px 0;overflow:hidden;padding:0;}
        #container-id1 .owl-prev:after,#container-id1 .owl-prev:before{content:"";display:block;width:14px;height:2px;background:#3483fa;position:absolute;}
        #container-id1 .owl-prev:after,#container-id1 .owl-prev:before{left:50%;margin-left:-8px;}
        #container-id1 .owl-prev:before{-webkit-transform:rotate(-45deg);transform:rotate(-45deg);top:50%;margin-top:-5px;}
        #container-id1 .owl-prev:after{-webkit-transform:rotate(45deg);transform:rotate(45deg);bottom:50%;margin-bottom:-6px;}
        @media screen and (max-width:1168px){
            #container-id1 .owl-prev{left:1px;}
        }
        @media screen and (max-width:1168px)and (max-width:769px){
            #container-id1 .owl-prev{left:-20px;}
        }
        .clipped{position:absolute;z-index:-1;border:0;clip:rect(0 0 0 0);-webkit-clip-path:inset(50%);clip-path:inset(50%);margin:0 -1px -1px 0;overflow:hidden;padding:0;display:block;}
        .recommendations #container-id1 .owl-prev{top:120px;}
    </style>

    <style>
        .owl-prev{

        }

        .owl-next{

        }
    </style>

    <?php
    OwlCarouselWidget::begin([
        'container' => 'div',
        'containerOptions' => [
            'id' => 'container-id1',
            'class' => 'container-class'
        ],
        'pluginOptions' => [
            'autoplay' => false,
            'autoplayTimeout' => 3000,
            'items' => 5,
            'loop' => true,
            'itemsDesktop' => [1199, 3], //[1199, 3]
            'itemsDesktopSmall' => [979, 3], //[979, 3]
            'nav' => true
        ]
    ]);
    ?>

    <div class="item-class"><img src="https://portal.omnilife.com/uploads/images/products/detail/mex/es_new/5177432_V2.png" alt="Image 1" style="/*max-height: 500px;*/"></div>
    <div class="item-class"><img src="https://portal.omnilife.com/uploads/images/products/detail/mex/es_new/6379929.png" alt="Image 2" style="/*max-height: 500px;*/"></div>
    <div class="item-class"><img src="https://portal.omnilife.com/uploads/images/products/detail/mex/es_new/2603201.png" alt="Image 3" style="/*max-height: 500px;*/"></div>
    <div class="item-class"><img src="https://portal.omnilife.com/uploads/images/products/detail/mex/es_new/2350430.png" alt="Image 3" style="/*max-height: 500px;*/"></div>
    <div class="item-class"><img src="https://portal.omnilife.com/uploads/images/products/detail/mex/es_new/2075722.png" alt="Image 3" style="/*max-height: 500px;*/"></div>
    <div class="item-class"><img src="https://portal.omnilife.com/uploads/images/products/detail/mex/es_new/2923227.png" alt="Image 3" style="/*max-height: 500px;*/"></div>
    <div class="item-class"><img src="https://portal.omnilife.com/uploads/images/products/detail/mex/es_new/2505711.png" alt="Image 3" style="/*max-height: 500px;*/"></div>
    <div class="item-class"><img src="https://portal.omnilife.com/uploads/images/products/detail/mex/es_new/3000730.png" alt="Image 3" style="/*max-height: 500px;*/"></div>
    <div class="item-class"><img src="https://portal.omnilife.com/uploads/images/products/detail/mex/es_new/3575605_.png" alt="Image 3" style="/*max-height: 500px;*/"></div>
    <div class="item-class"><img src="https://portal.omnilife.com/uploads/images/products/detail/mex/es_new/1578400.png" alt="Image 3" style="/*max-height: 500px;*/"></div>


    <?php OwlCarouselWidget::end(); ?>


</div>

<script>
    document.getElementById("idContainer").className = "";
    document.getElementById("idMain").className = "";

    //document.getElementById('#container-id1 .owl-next span').innerHTML = "";
    //document.querySelector('#container-id1 .owl-next span').innerHTML = '1 elemento';

</script>

