<?php
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
        //$shoping = app\models\Profile::find()->where(['idprofile' => $binnacle->idshoping])->all();
         
        ?>

        <tr>
            <th scope="row">1</th>
            <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter">Yesenia Díaz Hernández</a></td>
            <td>
                <?php
                foreach ($products as $product):

                echo $product->product;

                endforeach;
                ?>

            </td>
            <td>La casa azul con rojo frente a la cancha a lado del arbol color verde con tronco color cafe</td>
            <td>
                <?= $binnacle->shipping ?>

        <!--<select class="form-control form-control-sm">
            <option>Enviado</option>
            <option>No Enviado</option>
        </select>-->
            </td>
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
