<?php
/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<br><br><br>
<style>

    /*======================
        404 page
    =======================*/
    @import url('https://fonts.googleapis.com/css?family=Arvo');

    /* latin */
    @font-face {
        font-family: 'Arvo';
        font-style: normal;
        font-weight: 400;
        src: url(https://fonts.gstatic.com/s/arvo/v14/tDbD2oWUg0MKqScQ7Q.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    body{        
        background-color: white;
    }

    .page_404{ padding:40px 0; background:#fff; font-family: 'Arvo', serif;
    }

    .page_404  img{ width:100%;}

    .four_zero_four_bg{
        /*background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);*/
        background-image: url(<?= Yii::$app->homeUrl ?>resources/images/dribbble_1.gif);
        height: 400px;
        background-position: center;
    }

    .four_zero_four_bg h1{
        font-size:80px;
    }

    .four_zero_four_bg h3{
        font-size:80px;
    }

    .link_404{			 
        color: #fff!important;
        padding: 10px 20px;
        background: #39ac31;
        margin: 20px 0;
        display: inline-block;
        text-decoration: none;
    }

    .contant_box_404{ margin-top:-50px;}
</style>

<!--https://fonts.googleapis.com/css?family=Arvo-->
<!--https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css-->
<div class="container" style="margin-top: 30px;">
    <section class="page_404">
        <div class="container">
            <div class="row">	
                <div class="col-sm-12 ">
                    <div class="col-sm-offset-1  text-center">
                        <div class="four_zero_four_bg">
                            <h1 class="text-center "><?= Html::encode($this->title) ?></h1>                           
                        </div>

                        <div class="contant_box_404">
                            <div class="alert alert-danger">
                                <?= nl2br(Html::encode($message)) ?>                                
                            </div>
                            <h3 class="h2">
                                Parece que estás perdido.
                            </h3>

                            <p>La página que busca no está disponible!</p>

                            <a href="<?= Yii::$app->homeUrl ?>" class="link_404">Ir al inicio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>