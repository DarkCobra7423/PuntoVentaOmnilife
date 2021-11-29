<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Productos';
?>

<!--<link  href="<?= Yii::$app->homeUrl ?>css/styleProducts.css" rel="stylesheet" type="text/css"/> -->
<br>
<br>
<br>
<br>
<style>
    .card:hover{
        transform: translateY(-15px);
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }

    .unittype{
        font-size: 14px;
        vertical-align: 3px;
        color: #39b54a;
        display: inline-block;
        margin-left: 10px;
    }

    #card1{
        margin-top: 10px;
        margin-bottom: 10px;
        margin-left: 2px;
        margin-right: 2px;
    }

</style>

<nav class="navbar justify-content-between">
    <a class="navbar-brand"></a>
    <form class="form-inline">
        <input id="inputSearch" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" onkeypress="search($(this).val())">
        <label for="inputSearch" class="btn btn-outline-success my-2 my-sm-0" type="search">Search</label>
    </form>
</nav>

<div class="producto-index">
    <h5 id="idTitle" hidden="">Productos encontados</h5>
    <div id="idSearch" class="row">       
    </div>  
</div>

<div class="producto-index">

    <div class="row">
        <?php foreach ($products as $product): ?>
            <div id="card1">
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
    </div>

</div>

<script>
    function search(value) {
        
        warning = '<div class="alert alert-danger col-md-12" role="alert">¡Ningun producto coincidió con la busqueda!</div>';

        $.post("<?= Yii::$app->homeUrl ?>product/search?value=" + value, function (data) {
            document.getElementById("idTitle").removeAttribute("hidden");
            if (data == '') {
                document.getElementById("idSearch").innerHTML = warning;
            } else {
                document.getElementById("idSearch").innerHTML = data;
            }




            //    alert(data);
        });
    }</script>