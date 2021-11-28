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
        <div class=""></div>
        <div class="loyalty-buylevel6__header">
            <!-- <div class="loyalty-buylevel6__header__title"> -->

            <div class="col-ch-3 bd-callout bd-callout-blue " > 
                <h6> ¡No te quedes sin tus productos!</h6>
            </div>
            <div class="col-ch-3 bd-callout ">
                <h6> Paga cómodo y de Manera Segura</h6>  
            </div>
            <div class="col-ch-3 bd-callout ">
                <h6> ¡Paga con tu Tarjeta: Credito o Debito!</h6>
            </div>
            <div class="col-ch-3 bd-callout ">
                <h6><a href="#"><FONT COLOR="white"> Estamos ubicados en ...   </FONT></a></h6>
            </div>        
        </div>
        

        <!----------------------     Prueba de color ------------ -->
        <style>
            /*! CSS Used from: https://http2.mlstatic.com/frontend-assets/ui-navigation/5.17.0/mercadolibre/navigation-desktop.css ; media=(min-width: 1024px) */
            @media (min-width: 1024px) {
                :focus:not(:focus-visible) {
                    outline: 0;
                }
            }
            /*! CSS Used from: https://http2.mlstatic.com/frontend-assets/ui-navigation/5.17.0/mercadolibre/navigation-mobile.css ; media=(max-width: 1023px) */
            @media (max-width: 1023px) {
                :focus:not(:focus-visible) {
                    outline: 0;
                }
            }
            /*! CSS Used from: https://http2.mlstatic.com/frontend-assets/homes-palpatine/home.desktop.e5a1b5f2.css */
            .loyalty-buylevel6__header {
                padding: 16px 24px;
                color: #fff;
                display: -webkit-flex;
                display: flex;
                -webkit-justify-content: space-between;
                justify-content: space-between;
                background: -webkit-linear-gradient(left, #a90f90 55%, #0c1a51);
                background: linear-gradient(90deg, #a90f90 55%, #0c1a51);
                -webkit-align-items: center;
                align-items: center;
                border-radius: 0.6rem;
            }
            .loyalty-buylevel6__header__title {
                font-size: 26px;
                line-height: 30px;
                font-weight: 600;
            }
            .loyalty-buylevel6__header-pricing {
                position: relative;
                display: -webkit-flex;
                display: flex;
                -webkit-flex-direction: column;
                flex-direction: column;
                text-align: right;
                font-weight: 600;
                line-height: 1;
            }
            .loyalty-buylevel6__header-price {
                font-size: 24px;
            }
            .loyalty-buylevel6__header-period {
                font-size: 14px;
            }
            .loyalty-buylevel6__header-cents {
                font-size: 16px;
                vertical-align: top;
            }
            .loyalty-buylevel6__header-description {
                display: block;
                font-size: 16px;
                line-height: 16px;
            }


        </style>
        <!---------------------- fin de prueba de color ------------ -->

        <h4>Productos <a href="<?= Yii::$app->homeUrl ?>product/products" style="font-size: 14px; color: #3483fa;">Ver mas...</a></h4>

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
        <!-- ------------ Cards ------------------>


        <?php foreach ($products as $product): ?>
            <div class="item-class">  

                <div data-index="0" class="slick-slide slick-active" tabindex="-1" style="outline: none; width: 240px;">
                    <div class="ui-item__wrapper price-digits-4__wrapper with-discount__wrapper with-installments__wrapper">
                        <a href="<?= $product->image ?>" class="ui-item price-digits-4 with-discount with-installments" aria-label="">
                            <!--<a href="#" class="ui-item price-digits-4 with-discount with-installments" aria-label="">-->
                            <div class="ui-item__image-container">
                              <!--  <img src="images/products/slider12.webp" class="ui-item__image" width="224" height="224" alt="" srcset=""> -->
                                <img src="<?= $product->image ?>" class="ui-item__image" width="224" height="224" alt="" srcset="">
                            </div>
                            <div class="ui-item__content">
                                <div class="ui-item__price-block">
                                    <span class="price-tag ui-item__price">
                                      <!--<span class="price-tag-text-sr-only">8499 pesos</span>-->
                                        <span class="price-tag-amount" aria-hidden="true">
                                            <span class="price-tag-symbol">$</span>
                                            <span class="price-tag-fraction"><?= $product->price; ?></span>
                                        </span>
                                    </span>
                                    <span class="ui-item__discount-text"><?= $product->unittype; ?></span>
                                    <span class="ui-item__installments"><?= $product->product; ?></span>
                                    <!--<p class="ui-item__shipping-free">Envío gratis</p>-->
                                </div>
                                <p class="ui-item__title" aria-hidden="true"><?= $product->product; ?></p>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

        <?php endforeach; ?>
        <!-- -------- fin del card ----------------- -->
        <?php OwlCarouselWidget::end(); ?>



        <h4>Productos Por Caja <a href="<?= Yii::$app->homeUrl ?>product/products" style="font-size: 14px; color: #3483fa;">Ver mas...</a></h4>

        <?php
        OwlCarouselWidget::begin([
            'container' => 'div',
            'containerOptions' => [
                'id' => 'container-id2',
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
        <!-- ------------ Cards ------------------>
       

        <?php foreach ($products as $product): ?>
            <div class="item-class">  

                <div data-index="0" class="slick-slide slick-active" tabindex="-1" style="outline: none; width: 240px;">
                    <div class="ui-item__wrapper price-digits-4__wrapper with-discount__wrapper with-installments__wrapper">
                        <a href="/Omnilife/web/producto/verproducto/12" class="ui-item price-digits-4 with-discount with-installments" aria-label="">
                            <!--<a href="#" class="ui-item price-digits-4 with-discount with-installments" aria-label="">-->
                            <div class="ui-item__image-container">
                              <!--  <img src="images/products/slider12.webp" class="ui-item__image" width="224" height="224" alt="" srcset=""> -->
                                <img src="<?= $product->image ?>" class="ui-item__image" width="224" height="224" alt="" srcset="">
                            </div>
                            <div class="ui-item__content">
                                <div class="ui-item__price-block">
                                    <span class="price-tag ui-item__price">
                                      <!--<span class="price-tag-text-sr-only">8499 pesos</span>-->
                                        <span class="price-tag-amount" aria-hidden="true">
                                            <span class="price-tag-symbol">$</span>
                                            <span class="price-tag-fraction"><?= $product->price; ?></span>
                                        </span>
                                    </span>
                                    <span class="ui-item__discount-text"><?= $product->unittype; ?></span>
                                    <span class="ui-item__installments"><?= $product->product; ?></span>
                                    <!--<p class="ui-item__shipping-free">Envío gratis</p>-->
                                </div>
                                <p class="ui-item__title" aria-hidden="true"><?= $product->product; ?></p>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

        <?php endforeach; ?>
        <!-- -------- fin del card ----------------- -->
        <?php OwlCarouselWidget::end(); ?>




    </div>

    <script>
        document.getElementById("idContainer").className = "";
        document.getElementById("idMain").className = "";

        document.querySelector('#container-id1 div .owl-stage').removeAttribute('style');

        //document.getElementById('#container-id1 .owl-next span').innerHTML = "";
        //document.querySelector('#container-id1 .owl-next span').innerHTML = '1 elemento';

    </script>

