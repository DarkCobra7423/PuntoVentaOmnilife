<?php
/* @var $this yii\web\View */

use kv4nt\owlcarousel\OwlCarouselWidget;
use yii\helpers\Html;

$this->title = 'Omnilife Castellanos';
?>
<!--<link href="<?= Yii::$app->homeUrl ?>css/styleSiteIndex.css" rel="stylesheet" type="text/css"/>-->

<style>
    .card:hover{
        transform: translateY(-15px);
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }

    .owl-item{
        padding-top: 17px;
        padding-bottom: 3px;
    }

    .unittype{
        font-size: 14px;
        vertical-align: 3px;
        color: #39b54a;
        display: inline-block;
        margin-left: 10px;
    }

    #calloutmd{
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
</style>

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
    <div id="calloutmd" class="row">
        <div class="col-md-3"> 
            <h6> ¡No te quedes sin tus productos!</h6>
        </div>
        <div class="col-md-3">
            <h6> Paga de la Manera mas Segura </h6>  
        </div>
        <div class="col-md-3">
            <h6> Tarjeta de Crédito o Débito</h6>
        </div>
        <div class="col-md-3">
            <h6><a href="<?= Yii::$app->homeUrl ?>site/contacto" style="color: white;"> Estamos ubicados en ...</a></h6>
        </div> 
    </div>
    <br>
    <div class="row">
        <h4>Productos <a href="<?= Yii::$app->homeUrl ?>product/products?id=generaly" style="font-size: 14px; color: #3483fa;">Ver mas...</a></h4>

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
                <a href="<?= Yii::$app->homeUrl ?>product/seeproduct/<?= $product->idproduct ?>" style="text-decoration: none; color: #212529;">
                    <div class="card" style="width: 14rem;">
                        <img class="card-img-top" src="<?= $product->imagen ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">$ <?= $product->price; ?>.00 <span class="unittype"><?= $product->unittype; ?></span></h5>
                            <p class="card-text"><?= $product->product; ?></p>    
                        </div>
                    </div>
                </a>
            </div>

        <?php endforeach; ?>
        <!-- -------- fin del card ----------------- -->
        <?php OwlCarouselWidget::end(); ?>

        <br>

        <h4 style="margin-top: 15px;">Productos Por Caja <a href="<?= Yii::$app->homeUrl ?>product/products/1" style="font-size: 14px; color: #3483fa;">Ver mas...</a></h4>

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


        <?php foreach ($boxs as $box): ?>

            <div class="item-class">
                <a href="<?= Yii::$app->homeUrl ?>product/seeproduct/<?= $box->idproduct ?>" style="text-decoration: none; color: #212529;">
                    <div class="card" style="width: 14rem;">
                        <img class="card-img-top" src="<?= $box->imagen ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">$ <?= $box->price; ?>.00 <span class="unittype"><?= $box->unittype; ?></span></h5>
                            <p class="card-text"><?= $box->product; ?></p>    
                        </div>
                    </div>
                </a>
            </div>            

        <?php endforeach; ?>
        <!-- -------- fin del card ----------------- -->
        <?php OwlCarouselWidget::end(); ?>

          <br>

        <h4 style="margin-top: 15px;">Productos Por Sobre <a href="<?= Yii::$app->homeUrl ?>product/products/2" style="font-size: 14px; color: #3483fa;">Ver mas...</a></h4>

        <?php
        OwlCarouselWidget::begin([
            'container' => 'div',
            'containerOptions' => [
                'id' => 'container-id3',
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


        <?php foreach ($envelopess as $envelopes): ?>

            <div class="item-class">
                <a href="<?= Yii::$app->homeUrl ?>product/seeproduct/<?= $envelopes->idproduct ?>" style="text-decoration: none; color: #212529;">
                    <div class="card" style="width: 14rem;">
                        <img class="card-img-top" src="<?= $envelopes->imagen ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">$ <?= $envelopes->price; ?>.00 <span class="unittype"><?= $envelopes->unittype; ?></span></h5>
                            <p class="card-text"><?= $envelopes->product; ?></p>    
                        </div>
                    </div>
                </a>
            </div>            

        <?php endforeach; ?>
        <!-- -------- fin del card ----------------- -->
        <?php OwlCarouselWidget::end(); ?>
        
          <br>

        <h4 style="margin-top: 15px;">Productos Por Botella <a href="<?= Yii::$app->homeUrl ?>product/products/3" style="font-size: 14px; color: #3483fa;">Ver mas...</a></h4>

        <?php
        OwlCarouselWidget::begin([
            'container' => 'div',
            'containerOptions' => [
                'id' => 'container-id4',
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


        <?php foreach ($bottles as $bottle): ?>

            <div class="item-class">
                <a href="<?= Yii::$app->homeUrl ?>product/seeproduct/<?= $bottle->idproduct ?>" style="text-decoration: none; color: #212529;">
                    <div class="card" style="width: 14rem;">
                        <img class="card-img-top" src="<?= $bottle->imagen ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">$ <?= $bottle->price; ?>.00 <span class="unittype"><?= $bottle->unittype; ?></span></h5>
                            <p class="card-text"><?= $bottle->product; ?></p>    
                        </div>
                    </div>
                </a>
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

