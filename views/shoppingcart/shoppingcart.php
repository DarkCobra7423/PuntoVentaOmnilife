<?php
use yii\widgets\ActiveForm;

$this->title = 'Omnilife Castellanos'; 
?>
<br><br><br>
<link rel="stylesheet" type="text/css" href="<?= Yii::$app->homeUrl; ?>css/styleShoppingcart.css">

<div>    
    <?php
    foreach ($carts as $cart):

        $products = app\models\Product::find()->where(['idproduct' => $cart->fkproduct])->all();

        foreach ($products as $product):
            ?>
            <div data-region="items" class="cart__items-container" role="tabpanel" itemscope="" itemtype="#">
                <div>
                    <div data-component="item-cart" class="ui-panel" itemprop="itemListElement" style="padding-left: 15px;padding-right: 15px; border-radius: 10px;">
                        <article class="item">
                            <div data-region="item-loading"></div>
                            <figure class="item__image item__image--dimmer">
                                <a itemprop="url" href="#">
                                    <img itemprop="image" src="<?= $product->imagen ?>" style="width: 150px">
                                </a>
                            </figure>
                            <div class="item__information">

                                <div class="u-float-left item__description" style="margin-top: 20px;">
                                    <a class="" href="#" itemprop="url"><b><?= $product->product ?></b></a><br>
                                    <label class="item__subtitle" itemprop="description" style="margin-bottom: 0px;"><?= $product->description ?></label><br>
                                    <label class="item__subtitle" itemprop="description">Sabor: <?= $product->flavor ?></label>
                                </div>

                                <div data-quantity="container" class="ui-quantity-selector u-float-left" style="padding-top: 38px;">
                                    <div class="ui-quantity-selector__container">
                                        <form class="u-float-left" action="#" method="POST">
                                            <input id="decrement<?= $cart->fkproduct ?>" onClick='decreaseCount(<?= $cart->fkproduct ?>)' data-quantity="pop" value="-" type="button" class="u-button-reset ui-quantity-selector__button min" name="pop">
                                        </form>
                                        <input id="quantity<?= $cart->fkproduct ?>" autocomplete="off" data-quantity="input" onblur="calcular(<?= $cart->fkproduct ?>);" type="tel" value="<?= $cart->quantity ?>" class="u-button-reset ui-quantity-selector__input quantity" name="quantity">
                                        <form class="u-float-left" action="#" method="POST">
                                            <input id="increment<?= $cart->fkproduct ?>" onClick='increaseCount(<?= $cart->fkproduct ?>)' data-quantity="push" value="+" type="button" class="u-button-reset ui-quantity-selector__button mas" name="push">
                                        </form>
                                        <div class="cart-inline-loading__quantity-selector" data-region="quantity-loading"></div>
                                    </div>
                                    <div data-quantity="error" class="ui-quantity-selector__stock"><?= $product->stock ?> disponibles</div>
                                </div>

                                <div class="item__price" style="margin-right: 38px;">
                                    <span class="item__notification-open" data-notification="open">
                                        <svg viewBox="0 0 100 100" role="presentation" class="ui-icon ui-icon--info ">
                                        <use xmlns:xlink="" xlink:href="#ui-icon--info"></use>
                                        </svg>
                                    </span>
                                    <span class="price-tag item__price-tag" itemprop="offers" itemscope="" itemtype="" style="padding-top: 60px;">
                                        <meta itemprop="price" content="120">
                                        <span class="price-tag-symbol" itemprop="priceCurrency">$</span>                                    
                                        <span id="precio<?= $cart->fkproduct ?>" class="price-tag-fraction" data-unitario="<?= $cart->product->price ?>" data-value="<?= $cart->price ?>"><?= $cart->price ?></span>
                                        <span class="price-tag-decimal-separator">.</span>
                                        <span class="price-tag-cents">00</span>
                                    </span>
                                </div>

                            </div>
                            <div class="item__actions">
                                <ul class="item__action-menu">
                                    <li>
                                        <form data-action="remove-from-cart" action="#" method="POST">
                                            <input type="hidden" name="id" value="">
                                            <input class="u-button-reset u-link  item__action-menu-link " type="submit" value="Eliminar">
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div>
                </div>  
            </div>
            <br>
        <?php endforeach; ?>
    <?php endforeach; ?>
    <div data-region="summary" class="cart__summary">
        <div>
            <footer class="summary summary--collapsable summary--fixed" aria-label="Resumen de tu carrito" data-summary="footer">
                <div class="summary__row-container">
                    <div>
                        <div class="summary__row summary__row--total">
                            <span class="summary__label">Precio Total: </span>
                            <span class="summary__price">
                                <span class="price-tag " itemprop="offers" itemscope="" itemtype="#">
                                    <meta itemprop="price" content="3,813.00">
                                    <span class="price-tag-symbol" itemprop="priceCurrency">$</span>
                                    <span class="price-tag-fraction" id="totalCar">0</span>
                                    <span class="price-tag-decimal-separator">.</span>
                                    <span class="price-tag-cents">00</span>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="summary__actions">
                    <?php
                    $form = ActiveForm::begin([
                                'method' => 'post',
                                'action' => ['card/payment'],
                    ]);
                    ?>
                    <input id="totalpost" name="totalpost" value="0" hidden=""/>
                    <button class="ui-button ui-button--primary" type="submit">Continuar compra</button>
                    <?php ActiveForm::end(); ?>
                </div>


            </footer>
        </div>
    </div>
</div>

<!--<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>-->

<script>
    total = 0;
<?php foreach ($carts as $cart): ?>

        totalElem<?= $cart->fkproduct ?> = document.getElementById('precio<?= $cart->fkproduct ?>');
        totalpro<?= $cart->fkproduct ?> = parseFloat(totalElem<?= $cart->fkproduct ?>.dataset.value);

        total = total + parseFloat(totalpro<?= $cart->fkproduct ?>);
<?php endforeach; ?>
    //alert(total);
    totalCar = document.getElementById('totalCar');
    totalCar.innerHTML = parseInt(total);
    document.getElementById("totalpost").value = parseInt(total);

    function calcular(id) {
        quantity = document.getElementById('quantity' + id).value;

        totalElem = document.getElementById('precio' + id);
        preunitario = parseFloat(totalElem.dataset.unitario);
        //totalpro = parseFloat(totalElem.dataset.value);

        precio = parseFloat(quantity) * parseFloat(preunitario);

        totalElem.dataset.value = parseFloat(quantity) * parseFloat(preunitario);
        totalElem.innerHTML = parseFloat(quantity) * parseFloat(preunitario);

        calculartotal();

        $.post("<?= Yii::$app->homeUrl ?>shoppingcart/updatequantity?id=" + id + "&cantidad=" + parseFloat(quantity) + "&precio=" + parseFloat(precio), function (data) {});

    }

    function increaseCount(id) {

        increment = document.getElementById("increment" + id).value;
        if (increment == "+") {
            increment = 1;
        }
        quantity = document.getElementById('quantity' + id).value;

        sum = parseFloat(quantity) + parseFloat(increment);

        document.getElementById('quantity' + id).value = sum;
        /////////////////////////
        totalElem = document.getElementById('precio' + id);
        preunitario = parseFloat(totalElem.dataset.unitario);
        //totalpro = parseFloat(totalElem.dataset.value);

        totalElem.dataset.value = parseFloat(sum) * parseFloat(preunitario);
        totalElem.innerHTML = parseFloat(sum) * parseFloat(preunitario);

        calculartotal();

        precio = parseFloat(sum) * parseFloat(preunitario);

        $.post("<?= Yii::$app->homeUrl ?>shoppingcart/updatequantity?id=" + id + "&cantidad=" + parseFloat(sum) + "&precio=" + parseFloat(precio), function (data) {});
    }

    function decreaseCount(id) {

        increment = document.getElementById("increment" + id).value;
        if (increment == "+") {
            increment = 1;
        }
        quantity = document.getElementById('quantity' + id).value;

        sum = parseInt(quantity) - parseInt(increment);

        document.getElementById('quantity' + id).value = sum;
        ////////////////////////////
        totalElem = document.getElementById('precio' + id);
        preunitario = parseFloat(totalElem.dataset.unitario);
        //totalpro = parseFloat(totalElem.dataset.value);

        totalElem.dataset.value = parseFloat(sum) * parseFloat(preunitario);
        totalElem.innerHTML = parseFloat(sum) * parseFloat(preunitario);

        calculartotal();

        precio = parseFloat(sum) * parseFloat(preunitario);

        $.post("<?= Yii::$app->homeUrl ?>shoppingcart/updatequantity?id=" + id + "&cantidad=" + parseFloat(sum) + "&precio=" + parseFloat(precio), function (data) {});

    }

    function calculartotal() {
        total = 0;
<?php foreach ($carts as $cart): ?>

            totalElem<?= $cart->fkproduct ?> = document.getElementById('precio<?= $cart->fkproduct ?>');
            totalpro<?= $cart->fkproduct ?> = parseFloat(totalElem<?= $cart->fkproduct ?>.dataset.value);

            total = total + parseFloat(totalpro<?= $cart->fkproduct ?>)
<?php endforeach; ?>
        //alert(total);
        totalCar = document.getElementById('totalCar');
        totalCar.innerHTML = parseInt(total);
        document.getElementById("totalpost").value = parseInt(total);
    }
</script>