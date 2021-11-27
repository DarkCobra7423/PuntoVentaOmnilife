<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Productos';
?>

<link href="<?= Yii::$app->homeUrl ?>css/styleProducts.css" rel="stylesheet" type="text/css"/>
<div class="producto-index"></div>

<body>

    <section class="recommendations" type="recommendations">
        <div class="row container">
            <div class="row">
                <?php foreach ($products as $product): ?>
                    <div data-index="0" class="slick-slide slick-active" tabindex="-1" style="outline: none; width: 240px;">
                        <div class="ui-item__wrapper price-digits-4__wrapper with-discount__wrapper with-installments__wrapper">
                            <a href="<?= Yii::$app->homeUrl ?>product/products/<?= $product->idproduct ?>" class="ui-item price-digits-4 with-discount with-installments" aria-label="">
                                <div class="ui-item__image-container">
                                    <img src="<?=$product->image ?>" class="ui-item__image" width="224" height="224" alt="" srcset="">
                                </div>
                                <div class="ui-item__content">
                                    <div class="ui-item__price-block">
                                        <span class="price-tag ui-item__price">
                                            <span class="price-tag-amount" aria-hidden="true">
                                                <span class="price-tag-symbol">$</span>
                                                <span class="price-tag-fraction"><?= $product->price ?></span>                                                            
                                            </span>                                                        
                                        </span>
                                        <span class="ui-item__discount-text"><?= $product->content ?> Sobres</span>
                                        <span class="ui-item__installments"><?= $product->product ?></span>           
                                    </div>
                                    <p class="ui-item__title" aria-hidden="true"><?= $product->product ?></p>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</body>