<br><br><br><br>

<?php
use kv4nt\owlcarousel\OwlCarouselWidget;
//SELECT * FROM `auth_assignment` WHERE `user_id` IN (4, 3, 1);  Obtener los roles
//SELECT * FROM `auth_assignment` WHERE `user_id` IN (6, 5, 4, 3, 1)
//Yii::$app->user->id
?>
<style>
    .card:hover{
        transform: translateY(-15px);
        /*box-shadow: 0 12px 16px rgba(0, 0, 0, 0.2);*/
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }
    
    .owl-item{
        padding-top: 17px;
        padding-bottom: 3px;
    }
</style>

    <?php
    OwlCarouselWidget::begin([
        'container' => 'div',
        'containerOptions' => [
            'id' => 'container-id',
            'class' => 'container-class owl-theme owl-loaded'
        ],
        'pluginOptions' => [
            'autoplay' => false,
            'autoplayTimeout' => 3000,
            'items' => 5,
            'loop' => true,
            'itemsDesktop' => [1199, 3], //[1199, 3]
            'itemsDesktopSmall' => [979, 3], //[979, 3]
        //'nav' => true            
        ]
    ]);
    ?>
<!---------------------------------------------------->
<div class="item-class">
<div class="card" style="width: 12rem;">
  <img class="card-img-top" src="<?= Yii::$app->homeUrl ?>resources/images/products/2t7yvruCZnm-ZfmiJUvzWwRl26qNr6iB.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">$360.00</h5>
    <p class="card-text">On C Mix</p>    
  </div>
</div>
</div>

<!--------------------------------------------------->

<div class="item-class">
<div class="card" style="width: 12rem;">
  <img class="card-img-top" src="<?= Yii::$app->homeUrl ?>resources/images/products/2t7yvruCZnm-ZfmiJUvzWwRl26qNr6iB.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">$360.00</h5>
    <p class="card-text">On C Mix</p>    
  </div>
</div>
</div>

<div class="item-class">
<div class="card" style="width: 12rem;">
  <img class="card-img-top" src="<?= Yii::$app->homeUrl ?>resources/images/products/2t7yvruCZnm-ZfmiJUvzWwRl26qNr6iB.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">$360.00</h5>
    <p class="card-text">On C Mix</p>    
  </div>
</div>
</div>

<div class="item-class">
<div class="card" style="width: 12rem;">
  <img class="card-img-top" src="<?= Yii::$app->homeUrl ?>resources/images/products/2t7yvruCZnm-ZfmiJUvzWwRl26qNr6iB.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">$360.00</h5>
    <p class="card-text">On C Mix</p>    
  </div>
</div>
</div>

<div class="item-class">
<div class="card" style="width: 12rem;">
  <img class="card-img-top" src="<?= Yii::$app->homeUrl ?>resources/images/products/2t7yvruCZnm-ZfmiJUvzWwRl26qNr6iB.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">$360.00</h5>
    <p class="card-text">On C Mix</p>    
  </div>
</div>
</div>

<div class="item-class">
<div class="card" style="width: 12rem;">
  <img class="card-img-top" src="<?= Yii::$app->homeUrl ?>resources/images/products/2t7yvruCZnm-ZfmiJUvzWwRl26qNr6iB.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">$360.00</h5>
    <p class="card-text">On C Mix</p>    
  </div>
</div>
</div>

<div class="item-class">
<div class="card" style="width: 12rem;">
  <img class="card-img-top" src="<?= Yii::$app->homeUrl ?>resources/images/products/2t7yvruCZnm-ZfmiJUvzWwRl26qNr6iB.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">$360.00</h5>
    <p class="card-text">On C Mix</p>    
  </div>
</div>
</div>

<div class="item-class">
<div class="card" style="width: 12rem;">
  <img class="card-img-top" src="<?= Yii::$app->homeUrl ?>resources/images/products/2t7yvruCZnm-ZfmiJUvzWwRl26qNr6iB.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">$360.00</h5>
    <p class="card-text">On C Mix</p>    
  </div>
</div>
</div>

<div class="item-class">
<div class="card" style="width: 12rem;">
  <img class="card-img-top" src="<?= Yii::$app->homeUrl ?>resources/images/products/2t7yvruCZnm-ZfmiJUvzWwRl26qNr6iB.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">$360.00</h5>
    <p class="card-text">On C Mix</p>    
  </div>
</div>
</div>

<div class="item-class">
<div class="card" style="width: 12rem;">
  <img class="card-img-top" src="<?= Yii::$app->homeUrl ?>resources/images/products/2t7yvruCZnm-ZfmiJUvzWwRl26qNr6iB.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">$360.00</h5>
    <p class="card-text">On C Mix</p>    
  </div>
</div>
</div>


    <?php OwlCarouselWidget::end(); ?>
