<?php
$this->title = 'Mis Compras';
?>
<br><br><br>
<link href="<?= Yii::$app->homeUrl ?>css/styleMyshopping.css" rel="stylesheet" type="text/css"/>
<h5>Mis compras</h5>
<label class="totalshopping"><?= $count ?> compras</label>



<?php foreach ($myshoppings as $myshopping): 
    $carts = app\models\Shoppingcart::find()->where(['fkshopping' => $myshopping->idshopping, 'fkprofile' => Yii::$app->globalprofileid->idprofile])->all();
    foreach ($carts as $cart): 
    ?>
    <div class="list-item-grouper" data-js="list-item-grouper" data-id="list_item_grouper_d8d77ea6db98">
        <div class="list-item-grouper--header">
            <span class="list-item-grouper--text" aria-label="5 de junio">
                <span data-js="rich-text" aria-hidden="true" class="bf-ui-rich-text bf-ui-rich-text--bold"><?= $myshopping->formatDatetime() ?></span>              
            </span>
        </div>
        <div class="list-item" data-js="list-item" data-id="list_item_d48c5edd2f0d">
            <div class="list-item__product">
                <div data-js="image" class="list-item__image">
                    <img decoding="async" src="<?= $cart->product->imagen ?>" class="bf-ui-image--default" alt="">
                </div>
                <div class="list-item__data">
                    <?php if($myshopping->shipping == "Enviado"){ ?>
                    <p class="list-item__intro" data-js="intro" aria-label="Entregado">
                        <span data-js="rich-text" aria-hidden="true" class="bf-ui-rich-text bf-ui-rich-text--success">Entregado</span>
                    </p>
                    <?php }else{ ?>
                    <p class="list-item__intro" data-js="intro" aria-label="Entregado">
                        <span data-js="rich-text" aria-hidden="true" class="bf-ui-rich-text bf-ui-rich-text--success" style="color: #FFC107">No Entregado</span>
                    </p>
                    <?php } ?>
                    <h3 class="list-item__title" data-js="title" aria-label="Lo retiraste el 11 de junio&nbsp;&nbsp;">
                        <span data-js="rich-text" aria-hidden="true" class="bf-ui-rich-text"><?= $cart->product->product ?>&nbsp;&nbsp;</span>
                        <span class="bf-ui-rich-icon"><span class="bf-ui-icon-container bf-ui-icon-container--regular">
                                <img id="full" class="bf-ui-icon bf-ui-icon--full" src="https://http2.mlstatic.com/frontend-assets/bf-ui-library/assets/icons/full.svg" alt=""></span>
                        </span>
                    </h3>
                    <p class="list-item__link" data-js="link" aria-label="" tabindex="0" role="button">
                        <span data-js="rich-text" aria-hidden="true" class="bf-ui-rich-text"><?= $cart->product->description ?></span>
                    </p>
                    <p class="list-item__info" data-js="info" aria-label=""><span data-js="rich-text" aria-hidden="true" class="bf-ui-rich-text"><?= $cart->quantity ?> unidades</span>
                    </p>
                </div>
            </div><!--
            <div class="text-with-link" data-js="text-with-link" data-id="text_with_link_40dbc2402fba">
                <span class="text-with-link__text" aria-label="Memory One Guadalajara">
                    <span data-js="rich-text" aria-hidden="true" class="bf-ui-rich-text">Memory One Guadalajara</span></span>
                <div class="bf-ui-link-container bf-ui-link-container--horizontal" data-js="link-container" data-id="link_container_df4302163f41">
                    <span role="link" tabindex="0" class="bf-ui-link bf-ui-link--xsmall" data-id="link_a9903bf9baee" data-js="link">
                        <span data-js="rich-text" aria-hidden="true" class="bf-ui-rich-text">Enviar mensaje</span>                  
                    </span>
                </div>
            </div>-->
            <div class="bf-ui-button-container bf-ui-button-container--vertical bf-ui-button-container--transparent" data-js="button-container" data-id="button_container_ba709603742a">
                <a role="button" href="<?= Yii::$app->homeUrl ?>product/seeproduct/<?= $cart->product->idproduct ?>" class="andes-button bf-ui-button andes-button--medium andes-button--loud" data-js="button" data-id="button_f4126599e834">
                    <span class="andes-button__content">
                        <span class="andes-button__text">Ver producto</span>
                    </span>
                </a>
                <a role="button" href="#" class="andes-button bf-ui-button andes-button--medium andes-button--quiet" data-js="button" data-id="button_50a8017c9b3c">
                    <span class="andes-button__content"><span class="andes-button__text">Volver a comprar</span>                
                    </span>
                </a>
            </div>
        </div>
    </div>
<?php 
endforeach;
endforeach;
?>