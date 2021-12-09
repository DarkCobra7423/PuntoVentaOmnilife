<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = "Opciones de pago";
?>

<br><br><br>
<link href="<?= Yii::$app->homeUrl ?>css/stylePayment.css" rel="stylesheet" type="text/css"/>
<h4>¿Como quieres pagar?</h4>

<div class="row">
    <div class="col-8">

        <?php
        $form = ActiveForm::begin([
                    'method' => 'post',
                    'action' => ['shoppingcart/ticket'],
        ]);
        ?>

        <span>Domicilio</span><br><br>

        <div data-id="hero-shipping" class="hero hero-shipping  hero--contained hero--ellipsis">
            <div class="hero__wrapper">
                <div class="hero__table-row">
                    <div class="hero__icon" data-js="hero-icon">
                        <span class="ui-badge ui-badge--small" style="text-align: center; color: #3483FA; padding-bottom: 7px; bottom: auto; padding-top: 11px;">
                            <i class="fas fa-map-marker-alt"></i>
                        </span>
                    </div>
                    <input name="idAddress" hidden="" value="<?= $address->idshippingaddress ?>"/>
                    <div class="hero__main-content" data-js="hero-main-content">
                        <div class="hero__main-content-wrapper">
                            <div class="hero__info" data-js="hero-info">
                                <h3 data-id="hero-shipping-title" class="hero__info-title">
                                    C.P. <?= $address->postalcode ?>
                                </h3>
                                <span data-id="hero-shipping-subtitle" class="hero__info-subtitle ">
                                    <?= $address->street ?> <?= $address->outdoornumber ?> - - Colonia <?= $address->suburb ?> - <?= $address->municipalitymayoralty ?>, <?= $address->state ?>
                                </span>

                                <span class="hero__info-subtitle hero__info-subtitle--new-line">
                                   <?= $address->namelastname ?> - <?= $address->telephonecontact ?>
                                </span>

                            </div>
                            <div class="hero__action" data-js="hero-action">                                
                                <a data-js="next-step" data-input-id="nextStepAddressChange" class=" hero__action-button u-link" name="nextStepAddressChange" value="nextStepAddressChange" style="text-decoration: none;"  data-toggle="modal" data-target="#exampleModal1">
                                    Editar o elegir otro
                                </a>                                
                            </div>

                        </div>
                    </div>

                </div>

                <div class="hero__table-row">
                    <div class="hero__table-cell"></div>
                    <div class="hero__table-cell">

                    </div>
                </div>
            </div>
        </div>

        <br><br><span>Con tarjetas</span><br><br>
        <div data-js="payments-types" data-stored="true">
            <ul class="badge-type-selection__list">


                <div id="idCardnumber">
                    <?php foreach ($cards as $card): ?>

                        <li class="badge-type-selection__list-item ui-list__item">
                            <div>
                                <label class="ui-radio__label ">
                                    <div class="ui-radio-element">
                                        <input type="radio" data-js="payment-type" name="paymentType" class="ui-radio__input" value="DEBIT_CARD" required="" aria-invalid="false">
                                        <div class="ui-radio__background">
                                            <div class="ui-radio__outer-circle"></div>
                                            <div class="ui-radio__inner-circle"></div>
                                        </div>
                                        <input data-js="payment-type-id" type="hidden" name="paymentMethodId" value="debvisa">
                                        <input data-js="payment-type-card-id" type="hidden" name="cardId" value="<?= $card->cardnumber ?>">
                                    </div>
                                    <div class="ui-radio__text">
                                        <span class="ui-badge ui-badge--small">
                                            <span class="ui-badge__icon ui-badge__icon--payment-logo">
                                                <i class="payment-icon payments-cho_badge _debvisa-cho_badge"></i>
                                            </span>
                                        </span>
                                        <div class="badge-type__metadata">
                                            <h2 class="badge-type-selection__list-title" aria-label="Bancomer terminada en 1382"><?= $card->getBank() ?> Débito <span id="idCardnumber<?= $card->idcard ?>"><?= $card->cardnumber ?></span><span id="idCardnumber1<?= $card->idcard ?>"></span></h2>                                        
                                        </div>
                                        <input value="<?= $card->idcard ?>" name="idCard" hidden=""/>
                                        <input value="<?= $card->getBank() ?>" name="idBank" hidden=""/>
                                    </div>
                                </label>
                            </div>
                        </li>

                    <?php endforeach; ?>                
                </div>
                <li class="badge-type-selection__list-item ui-list__item" data-toggle="modal" data-target="#exampleModal">
                    <div>
                        <label class="ui-radio__label ">
                            <div class="ui-radio-element">                                
                                <div class="ui-radio__background">
                                    <div class="ui-radio__outer-circle"></div>
                                    <div class="ui-radio__inner-circle"></div>
                                </div>                                
                            </div>
                            <div class="ui-radio__text">
                                <span class="ui-badge ui-badge--small" style="text-align: center; color: #3483FA; padding-bottom: 7px; bottom: auto; padding-top: 11px;">
                                    <i class="far fa-credit-card"></i>
                                </span>
                                <div class="badge-type__metadata">
                                    <h2 class="badge-type-selection__list-title">Nueva tarjeta de débito</h2>
                                </div>
                            </div>
                        </label>
                    </div>

                </li>
            </ul>
        </div>


        <br><br><span>Con otras formas de pago</span><br><br>

        <article class="ui-list ui-panel--raised" data-js="payments-types" data-stored="false" role="list" aria-label="Con otras formas de pago">
            <ul class="badge-type-selection__list">
                <li class="badge-type-selection__list-item ui-list__item">
                    <div>
                        <label class="ui-radio__label ">
                            <div class="ui-radio-element">
                                <input type="radio" data-js="payment-type" name="paymentType" class="ui-radio__input" value="BANK_TRANSFER" required="" aria-invalid="false">
                                <div class="ui-radio__background">
                                    <div class="ui-radio__outer-circle"></div>
                                    <div class="ui-radio__inner-circle"></div>
                                </div>
                                <input data-js="payment-type-name" type="hidden" value="BANK_TRANSFER">
                            </div>
                            <div class="ui-radio__text">
                                <span class="ui-badge ui-badge--small" style="text-align: center; color: #3483FA; padding-bottom: 7px; bottom: auto; padding-top: 11px;">
                                    <i class="fas fa-university"></i>
                                </span>
                                <div class="badge-type__metadata">
                                    <h2 class="badge-type-selection__list-title">Transferencia electrónica</h2>
                                </div>
                            </div>
                        </label>
                    </div>

                </li>
                <li class="badge-type-selection__list-item ui-list__item">
                    <div>
                        <label class="ui-radio__label ">
                            <div class="ui-radio-element">
                                <input type="radio" data-js="payment-type" name="paymentType" class="ui-radio__input" value="TICKET" required="" aria-invalid="false">
                                <div class="ui-radio__background">
                                    <div class="ui-radio__outer-circle"></div>
                                    <div class="ui-radio__inner-circle"></div>
                                </div>
                                <input data-js="payment-type-name" type="hidden" value="TICKET">
                            </div>
                            <div class="ui-radio__text">
                                <span class="ui-badge ui-badge--small" style="text-align: center; color: #3483FA; padding-bottom: 7px; bottom: auto; padding-top: 11px;">
                                    <i class="fas fa-ticket-alt"></i>
                                </span>
                                <div class="badge-type__metadata">
                                    <h2 class="badge-type-selection__list-title">Efectivo en puntos de pago</h2>
                                    <p class="badge-type-selection__list-text">
                                        7-Eleven, BBVA Bancomer, Citibanamex, OXXO y Otros
                                    </p>
                                </div>
                            </div>
                        </label>
                    </div>

                </li>
            </ul>
        </article>
        <br>

        <?= Html::submitButton('Continuar', ['class' => 'btn btn-primary float-right', 'style' => 'max-width: 16%;']) ?>
        <?php ActiveForm::end(); ?>
    </div>

    <div class="col-4">

        <section class="cart-aside__content" style="background-color: #f5f5f5;">
            <div class="overview-component__item u-block-center">
                <img src="<?= Yii::$app->homeUrl ?>resources/images/logo2.png" alt="" style="width: 25%;"/>
                
            </div>

            <div class="overview__table-container">
                <div class="overview-component__amounts">
                    <div class="overview-component__table">
                        <div class="overview-component__row">
                            <div data-id="overview-items-quantity" class="overview-component__column">
                                Productos
                            </div>
                            <div data-id="overview-items-price" class="overview-component__column" aria-label="385 pesos">
                                <span aria-hidden="true">
                                    <span class="price-tag " itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                        <meta itemprop="price" content="385">

                                        <span class="price-tag-symbol" itemprop="priceCurrency" aria-hidden="true">$</span>
                                        <span class="price-tag-fraction"><?= $model->price ?></span>

                                    </span>
                                </span>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="overview-component__payments">
                    <div class="overview-component__table overview-component__table--auto-width">
                        <div class="overview-component__row">
                            <div class="overview-component__column overview-component__payments-text">
                                <span class="overview-component__label">
                                    Pagas
                                </span>
                            </div>
                            <div class="overview-component__column">
                                <div class="overview-component__payment" aria-label="385 pesos">
                                    <span aria-hidden="true">
                                        <span class="price-tag " itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                            <meta itemprop="price" content="385">

                                            <span class="price-tag-symbol" itemprop="priceCurrency" aria-hidden="true">$</span>
                                            <span class="price-tag-fraction"><?= $model->price ?></span>

                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>
</div>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nueva Tarjeta de debito</h5>
                <button id="closeModalCard" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="wrapper" id="app">
                    <div class="card-form">
                        <div class="card-list">
                            <div class="card-item" v-bind:class="{ '-active' : isCardFlipped }">
                                <div class="card-item__side -front">
                                    <div class="card-item__focus" v-bind:class="{'-active' : focusElementStyle }" v-bind:style="focusElementStyle" ref="focusElement"></div>
                                    <div class="card-item__cover">
                                        <img
                                            v-bind:src="'<?= Yii::$app->homeUrl ?>resources/card/' + currentCardBackground + '.jpeg'" class="card-item__bg">
                                    </div>

                                    <div class="card-item__wrapper">
                                        <div class="card-item__top">
                                            <img src="<?= Yii::$app->homeUrl ?>resources/card/chip.png" class="card-item__chip">
                                            <div class="card-item__type">
                                                <transition name="slide-fade-up">
                                                    <img v-bind:src="'<?= Yii::$app->homeUrl ?>resources/card/' + getCardType + '.png'" v-if="getCardType" v-bind:key="getCardType" alt="" class="card-item__typeImg">
                                                </transition>
                                            </div>
                                        </div>
                                        <label for="cardNumber" class="card-item__number" ref="cardNumber">
                                            <template v-if="getCardType === 'amex'">
                                                <span v-for="(n, $index) in amexCardMask" :key="$index">
                                                    <transition name="slide-fade-up">
                                                        <div
                                                            class="card-item__numberItem"
                                                            v-if="$index > 4 && $index < 14 && cardNumber.length > $index && n.trim() !== ''"
                                                            >*</div>
                                                        <div class="card-item__numberItem"
                                                             :class="{ '-active' : n.trim() === '' }"
                                                             :key="$index" v-else-if="cardNumber.length > $index">
                                                             {{cardNumber[$index]}}
                                                    </div>
                                                    <div
                                                        class="card-item__numberItem"
                                                        :class="{ '-active' : n.trim() === '' }"
                                                        v-else
                                                        :key="$index + 1"
                                                        >{{n}}</div>
                                                </transition>
                                            </span>
                                        </template>

                                        <template v-else>
                                            <span v-for="(n, $index) in otherCardMask" :key="$index">
                                                <transition name="slide-fade-up">
                                                    <div
                                                        class="card-item__numberItem"
                                                        v-if="$index > 4 && $index < 15 && cardNumber.length > $index && n.trim() !== ''"
                                                        >*</div>
                                                    <div class="card-item__numberItem"
                                                         :class="{ '-active' : n.trim() === '' }"
                                                         :key="$index" v-else-if="cardNumber.length > $index">
                                                         {{cardNumber[$index]}}
                                                </div>
                                                <div
                                                    class="card-item__numberItem"
                                                    :class="{ '-active' : n.trim() === '' }"
                                                    v-else
                                                    :key="$index + 1"
                                                    >{{n}}</div>
                                            </transition>
                                        </span>
                                    </template>
                                </label>
                                <div class="card-item__content">
                                    <label for="cardName" class="card-item__info" ref="cardName">
                                        <div class="card-item__holder">Titular de la tarjeta</div>
                                        <transition name="slide-fade-up">
                                            <div class="card-item__name" v-if="cardName.length" key="1">
                                                <transition-group name="slide-fade-right">
                                                    <span class="card-item__nameItem" v-for="(n, $index) in cardName.replace(/\s\s+/g, ' ')" v-if="$index === $index" v-bind:key="$index + 1">{{n}}</span>
                                                </transition-group>
                                            </div>
                                            <div class="card-item__name" v-else key="2">Nombre Completo</div>
                                        </transition>
                                    </label>
                                    <div class="card-item__date" ref="cardDate">
                                        <label for="cardMonth" class="card-item__dateTitle">Expira</label>
                                        <label for="cardMonth" class="card-item__dateItem">
                                            <transition name="slide-fade-up">
                                                <span v-if="cardMonth" v-bind:key="cardMonth">{{cardMonth}}</span>
                                                <span v-else key="2">MM</span>
                                            </transition>
                                        </label>
                                        /
                                        <label for="cardYear" class="card-item__dateItem">
                                            <transition name="slide-fade-up">
                                                <span v-if="cardYear" v-bind:key="cardYear">{{String(cardYear).slice(2,4)}}</span>
                                                <span v-else key="2">YY</span>
                                            </transition>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-item__side -back">
                            <div class="card-item__cover">
                                <img
                                    v-bind:src="'<?= Yii::$app->homeUrl ?>resources/card/' + currentCardBackground + '.jpeg'" class="card-item__bg">
                            </div>
                            <div class="card-item__band"></div>
                            <div class="card-item__cvv">
                                <div class="card-item__cvvTitle">CVV</div>
                                <div class="card-item__cvvBand">
                                    <span v-for="(n, $index) in cardCvv" :key="$index">
                                        *
                                    </span>

                                </div>
                                <div class="card-item__type">
                                    <img v-bind:src="'<?= Yii::$app->homeUrl ?>resources/card/' + getCardType + '.png'" v-if="getCardType" class="card-item__typeImg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-form__inner">                            
                    <div class="card-input">
                        <label for="cardNumber" class="card-input__label">Número de tarjeta</label>
                        <input type="text" id="cardNumber" class="card-input__input" v-mask="generateCardNumberMask" v-model="cardNumber" v-on:focus="focusInput" v-on:blur="blurInput" data-ref="cardNumber" autocomplete="off" name="cardnumber">
                    </div>
                    <div class="card-input">
                        <label for="cardName" class="card-input__label">Titular de tarjeta</label>
                        <input type="text" id="cardName" class="card-input__input" v-model="cardName" v-on:focus="focusInput" v-on:blur="blurInput" data-ref="cardName" autocomplete="off" name="cardName">
                    </div>
                    <div class="card-form__row">
                        <div class="card-form__col">
                            <div class="card-form__group">
                                <label for="cardMonth" class="card-input__label">Fecha de expiracion</label>
                                <select class="card-input__input -select" id="cardMonth" v-model="cardMonth" v-on:focus="focusInput" v-on:blur="blurInput" data-ref="cardDate" name="cardMonth">
                                    <option value="" disabled selected>Mes</option>
                                    <option v-bind:value="n < 10 ? '0' + n : n" v-for="n in 12" v-bind:disabled="n < minCardMonth" v-bind:key="n">
                                        {{n < 10 ? '0' + n : n}}
                                    </option>
                                </select>
                                <select class="card-input__input -select" id="cardYear" v-model="cardYear" v-on:focus="focusInput" v-on:blur="blurInput" data-ref="cardDate" name="cardYear">
                                    <option value="" disabled selected>Año</option>
                                    <option v-bind:value="$index + minCardYear" v-for="(n, $index) in 12" v-bind:key="n">
                                        {{$index + minCardYear}}
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="card-form__col -cvv">
                            <div class="card-input">
                                <label for="cardCvv" class="card-input__label">CVV</label>
                                <input type="text" class="card-input__input" id="cardCvv" v-mask="'####'" maxlength="4" v-model="cardCvv" v-on:focus="flipCard(true)" v-on:blur="flipCard(false)" autocomplete="off" name="cardCVV">
                            </div>
                        </div>                        
                    </div>    
                    <div class="card-input">                        
                        <select class="card-input__input -select" name="cardBank" id="cardBank">
                            <option value="" disabled selected>Seleccione el Banco</option>
                            <option value="1">Bancomer</option>
                        </select>
                    </div>
                    <button id="newCardInsert" class="card-form__button">Continuar</button>                    
                </div>
            </div>

        </div>
    </div>
</div>
</div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Direcciones</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script src="<?= Yii::$app->homeUrl ?>js/jquery.js" type="text/javascript"></script>
<script src="<?= Yii::$app->homeUrl ?>js/vue.min.js" type="text/javascript"></script>
<script src="<?= Yii::$app->homeUrl ?>js/vue-the-mask.js" type="text/javascript"></script>

<script>
new Vue({
    el: "#app",
    data() {
        return {
            currentCardBackground: Math.floor(Math.random() * 25 + 1), // just for fun :D
            cardName: "",
            cardNumber: "",
            cardMonth: "",
            cardYear: "",
            cardCvv: "",
            minCardYear: new Date().getFullYear(),
            amexCardMask: "#### ###### #####",
            otherCardMask: "#### #### #### ####",
            cardNumberTemp: "",
            isCardFlipped: false,
            focusElementStyle: null,
            isInputFocused: false
        };
    },
    mounted() {
        this.cardNumberTemp = this.otherCardMask;
        document.getElementById("cardNumber").focus();
    },
    computed: {
        getCardType() {
            let number = this.cardNumber;
            let re = new RegExp("^4");
            if (number.match(re) != null)
                return "visa";

            re = new RegExp("^(34|37)");
            if (number.match(re) != null)
                return "amex";

            re = new RegExp("^5[1-5]");
            if (number.match(re) != null)
                return "mastercard";

            re = new RegExp("^6011");
            if (number.match(re) != null)
                return "discover";

            re = new RegExp('^9792')
            if (number.match(re) != null)
                return 'troy'

            return "visa"; // default type
        },
        generateCardNumberMask() {
            return this.getCardType === "amex" ? this.amexCardMask : this.otherCardMask;
        },
        minCardMonth() {
            if (this.cardYear === this.minCardYear)
                return new Date().getMonth() + 1;
            return 1;
        }
    },
    watch: {
        cardYear() {
            if (this.cardMonth < this.minCardMonth) {
                this.cardMonth = "";
            }
        }
    },
    methods: {
        flipCard(status) {
            this.isCardFlipped = status;
        },
        focusInput(e) {
            this.isInputFocused = true;
            let targetRef = e.target.dataset.ref;
            let target = this.$refs[targetRef];
            this.focusElementStyle = {
                width: `${target.offsetWidth}px`,
                height: `${target.offsetHeight}px`,
                transform: `translateX(${target.offsetLeft}px) translateY(${target.offsetTop}px)`
            }
        },
        blurInput() {
            let vm = this;
            setTimeout(() => {
                if (!vm.isInputFocused) {
                    vm.focusElementStyle = null;
                }
            }, 300);
            vm.isInputFocused = false;
        }
    }
});
</script>
<script>

$(document).ready(function () {

<?php foreach ($cards as $card): ?>

        var span_Text = document.getElementById("idCardnumber<?= $card->idcard ?>").innerText;
        document.getElementById("idCardnumber<?= $card->idcard ?>").innerText = cardHide(span_Text);

<?php endforeach; ?>
});

function cardHide(card) {
    let hideNum = [];
    for (let i = 0; i < card.length; i++) {
        if (i < card.length - 4) {
            hideNum.push("*");
        } else {
            hideNum.push(card[i]);
        }
    }
    return hideNum.join("");
}

</script>
<script>
    $(document).ready(function () {
        //fila=$(#nombre).val();
        $("#newCardInsert").click(function () {    //SE DETECTA SI SE A PULSADO EL BOTON DE INSERTAR
            cardNumber = $("#cardNumber").val();        // SE OBTIENE EL VALOR DEL CAMPO ID="NOMBRE"
            cardName = $("#cardName").val();
            cardMonth = $("#cardMonth").val() + "/" + $("#cardYear").val();
            //cardYear = $("#cardYear").val();
            cardCvv = $("#cardCvv").val();
            cardBank = $("#cardBank").val();
            Registrar(cardNumber, cardName, cardMonth, cardCvv, cardBank);       //SE LLAMA A LA FUNCION REGISTRAR QUE SE LOCALISA EN FUNCIONES.JS

        });
    });

    function Registrar(cardNumber, cardName, cardMonth, cardCvv, cardBank)     //OBTENEMOS LOS DATOS ENVIADOS POR LA INSTRUCCION REGISTRAR(NOMBRE,APELLIDO) QUE SE ENCUENTRA EN EL INDEX
    {
        cadena = "cardNumber=" + cardNumber + //JUNTAMOS LOS VALORES EN LA VARUIABLE CADENA
                "&cardName=" + cardName +
                "&cardMonth=" + cardMonth +
                "&cardCvv=" + cardCvv +
                "&cardBank=" + cardBank;        //AL PARECER ESTO & HACE ALGO PERO AUN NO SE QUE

        //$("#respuesta").html("<img src="loader.gif" /> Por favor espera un momento");
        $.ajax({
            type: "POST",
            //dataType: 'html',
            url: "<?= Yii::$app->homeUrl ?>card/newcard", //LLAMAMOS AL ARCHIVO INSERTAR.PHP PARA INSERTAR EL REGISTRO EN LA TABLA
            data: cadena,
            success: function () {

                Limpiar();//limpia data
                $("#closeModalCard").click();

                $.post("<?= Yii::$app->homeUrl ?>card/updatecard", function (data) {
                    //$("#idCardnumber").load(data);
                    document.getElementById("idCardnumber").innerHTML = data;
                });
            }
        });
    }
    function Limpiar() {
        $("#cardNumber").val("");
        $("#cardName").val("");
        $("#cardMonth").val("");
        $("#cardCvv").val("");
        $("#cardBank").val("");
    }


</script>