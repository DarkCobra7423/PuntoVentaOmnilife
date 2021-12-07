<?php //
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use kartik\file\FileInput;

?>
<br><br><br>
<html lang="es" class="no-js">
<link href="<?= Yii::$app->homeUrl ?>css/styleTicket.css" rel="stylesheet" type="text/css"/>
<body data-country="">

  <div class="ticket-box ticket-box-c2">
    <div class="payment-info-container-c2">
      <div class="header-ticket">

        <div class="ticket-header">
            <img src="<?= Yii::$app->homeUrl ?>resources/images/logo2.png" style="border-radius: 6px;padding-left: 15px;padding-right: 15px;padding-top: 10px;padding-bottom: 10px; width: 35%;">                      
        </div>
      </div>

      <div>
        <div class="principal-info">
          <!-- informacion propia del ticket -->

          <h1 class="payment-info">Paga o Transfiere $ <?php // $model->price ?> en la sucursal <?php // $banco ?> más cercana</h1>

          <div class="payment-secondary-info">1. Menciona al empleado que quieres pagar un servicio.</div>

          <div class="payment-secondary-info">2. Díctale este código al cajero y listo.</div>

          <div class="payment-code-c2">
            <!--<span>9700</span><span>0097</span><span>5311</span><span>6380</span>-->
              <span><?php // $numTarjeta ?></span>
          </div>

          <br>

          <!-- incluye el mensaje de tiempo de acreditacion -->
          <!--<div class="oxxo-item-time-accreditation item-time-accreditation">
            <i class="ch-icon-time"></i> Acreditación inmediata.
          </div>-->

        </div>

        <!-- incluye el div concepto -->

        <input id="payment-detail-widget" class="payment-detail-widget" type="checkbox" checked="">

        <div class="div-concept">

          <label for="payment-detail-widget">
            <span>Concepto</span>
          </label>

          <div class="ch-expandable-container purchases-expandable-container-c2" aria-expanded="true">
            <div class="payment-container-c2">
              <p class="buyed"><span></span>Compraste</p>
              
              <?php foreach ($carts as $cart): ?>

              <p class="payment-reason-c2"><?= $cart->product->product ?></p>

              <p class="payment-price-c2"><strong class="ch-price">$ <?= $cart->price ?>.00</strong></p>
              
              <?php endforeach; ?>

              <p class="payment-tax">(No incluye la comisión por operación)</p>

            </div>
          </div>

        </div>

      </div>

      <div class="more-info">
          <?php /*
          $model = new Pago();
          
          $form = ActiveForm::begin([     
            'id' => 'form2',
            'method' => 'post',
            'action' => ['pago/realizarpago'],
            ]);*/
          ?>
          <?php // $form->field($model, 'image')->widget(FileInput::classname(), ['options' => ['accept' => 'image/*'],]); ?>
                    
          <!--<label class="geolocation-button ch-btn" for="evidencia">Enviar evidencia de pago</label><br>-->
          <?php // Html::submitButton('Enviar evidencia de pago', ['class' => 'geolocation-button ch-btn']) ?>
          <?php // ActiveForm::end(); ?>
                  
        <!-- incluye el boton imprimir -->
        <a class="payment-button-print btn-ticket" onclick="javascript:top.focus(); window.print()" href="#">Imprimir</a>
      </div>
    </div>
    <br>
  </div>

  <!--<iframe name="_hjRemoteVarsFrame" title="_hjRemoteVarsFrame" id="_hjRemoteVarsFrame" src="https://vars.hotjar.com/box-25a418976ea02a6f393fbbe77cec94bb.html" style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe>-->
</body>

<!--
https://es.grabz.it/html-to-pdf-image-api.aspx
https://es.grabz.it/api/php/

ca -  NDE5NWQ4OWE3OGJlNGY0NGEzZWVjODY3MDFlMDlmYjU=
sa -  Nz9iJRA/P2puSj9HPz9JPz8/Pz8aLVFnPyZ8UWgmPz8=
-->

</html>