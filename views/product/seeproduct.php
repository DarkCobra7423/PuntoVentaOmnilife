<?php

//

use yii\helpers\Html;
use yii\web\Controller;
use yii\grid\GridView;
?>


<style>
    #centrador{
        text-align: center;
        /*width: 400px;
        height: 400px;
        background-color: red;*/
    }

    #imagen{
        width: auto;
    }
</style>
<br><br><br><br>
<div class="container" style="background-color: white; border-radius: 5px;">
    <br>
    <div class="row">

        <div class="col-md-8">

            <div id="centrador"><img id="imagen" src="<?= $model->image ?>" alt="<?= $model->product ?>"></div>

            <br><br><br>
            <h5>Caracteristicas</h5>

            <p><?= $model->description ?></p>
            <br>
            <h5>Caracteristicas Principales</h5>
            <div class="table-responsive col-md-6">
            <table class="table table-striped">
                <tbody>
                    <tr>                        
                        <td><b>Tipo</b></td>
                        <td><?= $model->fkunittype ?></td>                        
                    </tr>
                    <tr>                        
                        <td><b>Sabor</b></td>
                        <td><?= $model->fkflavor ?></td>                        
                    </tr>  
                    <tr>                        
                        <td><b>Contenido</b></td>
                        <td><?= $model->content ?></td>                        
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
        <div class="col-md-4">

            <div class="container" style="border: 1px solid rgba(0, 0, 0, 0.1);border-radius: 8px;right: 15px;">
                <br>
                <h4><?= $model->product ?></h4>

                <h2>$ <?= $model->price ?>.00</h2>
                <label>IVA incluido</label>
                <br>
                <a href="#" style="color: #64A0FB" data-toggle="modal" data-target="#exampleModalCenter">Ver medios de pago</a>

                <label style="color: #00A650"><i class="fas fa-shipping-fast"></i> Envio Gratis a todo el pais</label>
                <br>
                <a href="#" style="color: #64A0FB" data-toggle="modal" data-target="#exampleModalCenter1">Ver formas de entrega</a>           
                <br>
                <b>Stocks disponible</b>
                <br>
                <label>Cantidad: </label>
                <select>
                    <option value="1">1 <?= $model->fkunittype ?></option>
                </select>
                <label style="color: #A3A3A3">(<?= $model->stock ?> Disponibles)</label>
                <br>
                <br>

                <a href="#" class="btn btn-primary btn-lg btn-block" style="bottom: 5px;">Comprar ahora</a>
                
                <a href="#" class="btn btn-link btn-lg btn-block" style="background-color: rgba(65,137,230,.15); border-color: transparent; color: #3483fa;">Agregar al carrito</a>
                <br>
                <br>
                <i class="fas fa-shield-alt"></i> <label style="color: #438CFA">Compra Protegida</label><span style="color: #A3A3A3">, recibe el producto que esperabas o te devolvemos tu dinero.</span>

            </div>
        </div><br>

    </div>

    <div class="row">



    </div>
</div>




<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Medios de pago disponibles</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Formas de entrega disponibles</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...Hola
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>