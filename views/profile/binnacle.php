<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Omnilife Castellanos';
?>
<br>
<br>
<br>  
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <!--<th scope="col">Producto</th>-->
            <th scope="col">Envio</th>
            <th scope="col">Dirreción</th>
            <th scope="col">Estatus</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($binnacles as $binnacle):
        $shoppingcards = app\models\Shoppingcart::find()->where(['fkshopping' => $binnacle->idshopping])->all();
        foreach ($shoppingcards as $shoppingcard):
        $products = app\models\Product::find()->where(['idproduct' => $shoppingcard->fkproduct])->all();
        
        foreach ($products as $product):       
         
        ?>

        <tr>
            <th scope="row">1</th>
            <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter"><?= $shoppingcard->profile->name." ".$shoppingcard->profile->lastname ?></a></td>
            <td>
                <?php
                echo $product->product;                
                ?>
            </td>
            <td>
                <?= $binnacle->address->street ?> <?= $binnacle->address->outdoornumber ?> C.P. <?= $binnacle->address->postalcode ?> - <?= $binnacle->address->municipalitymayoralty ?>, <?= $binnacle->address->state ?> |  <?= $binnacle->address->namelastname ?> - <?= $binnacle->address->telephonecontact ?>
            </td>
            <?php $form = ActiveForm::begin(); ?>
            <td>
               <?= $form->field($model, 'shipping')->dropDownList([ 'No Enviado' => 'No Enviado', 'Enviado' => 'Enviado', ], ['prompt' => $binnacle->shipping ,'onchange' => '$.post("'.Yii::$app->homeUrl.'shopping/state?id="+'.$binnacle->idshopping.'+"&state="+$(this).val(), function(data){})'])->label(false) ?>                        
            </td>
            <?php ActiveForm::end(); ?>
        </tr>
        <?php
        endforeach;
        endforeach;
        endforeach;
       
        ?>


    </tbody>
</table>


<?php // $form->field($model, 'ven_pago')->dropDownList([ 'DEPOSITO' => 'DEPOSITO', 'EFECTIVO' => 'EFECTIVO', ], ['prompt' => ''])   ?>





<!-- Modal -->

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                    <i class="fas fa-user"></i> Yesenia Diaz Hernandez</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5>Propietario</h5>

                <div class="row">
                    <div class="col-md-6">
                        <label><b>Nombre(s):</b></label><br><label>Yesenia</label>
                        <br><label><b>Apellidos:</b></label><br><label>Díaz Hernández</label>
                    </div>
                    <div class="col-md-6">
                        <label><b>Telefono:</b></label><br><label>6647661256</label>
                        <br><label><b>Correo Electronico:</b></label><br> <label>Yeseniadiaz@hotmail.com</label>
                    </div>
                </div>


                <br><h5>Datos de Envío</h5>
                <div class="row">
                    <div class="col-md-6">
                        <label><b>Nombre:</b></label><br><label>Prueba</label>
                        <br><label><b>Codigo Postal:</b></label><br><label>29580</label>
                        <br><label><b>Estado:</b></label><br><label>Tabasco</label>
                        <br><label><b>Municipio:</b></label><br><label>Nacajuca</label>
                        <br><label><b>Colonia:</b></label><br><label>Pomoca</label>
                        <br><label><b>Calle:</b></label></br><label>Bomanpak</label>
                    </div>
                    <div class="col-md-6">
                        <label><b>Número Exterior:</b></label><br><label>12345</label>
                        <br><label><b>Número Interior:</b></label><br><label>56789</label>
                        <br><label><b>Tipo de Dirección:</b></label><br><label>No se</label>
                        <br><label><b>Telefono de Contacto:</b></label><br><label>1234567890</label>
                        <br><label><b>Referencias:</b></label><br><label>En frente de un gimnasio</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <!--<button type="button" class="btn btn-primary">Save</button>-->
            </div>
        </div>
    </div>
</div>
