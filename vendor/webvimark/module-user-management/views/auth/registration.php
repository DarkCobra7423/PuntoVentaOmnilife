<?php

use webvimark\modules\UserManagement\UserManagementModule;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var webvimark\modules\UserManagement\models\forms\RegistrationForm $model
 */
$this->title = UserManagementModule::t('front', 'Registration');
$this->params['breadcrumbs'][] = $this->title;
?>
<!--
<div class="user-registration">

        <h2 class="text-center"><?= $this->title ?></h2>

<?php
$form = ActiveForm::begin([
            'id' => 'user',
            'layout' => 'horizontal',
            'validateOnBlur' => false,
        ]);
?>

<?= $form->field($model, 'username')->textInput(['maxlength' => 50, 'autocomplete' => 'off', 'autofocus' => true]) ?>

<?= $form->field($model, 'password')->passwordInput(['maxlength' => 255, 'autocomplete' => 'off']) ?>

<?= $form->field($model, 'repeat_password')->passwordInput(['maxlength' => 255, 'autocomplete' => 'off']) ?>

<?=
$form->field($model, 'captcha')->widget(Captcha::className(), [
    'template' => '<div class="row"><div class="col-sm-2">{image}</div><div class="col-sm-3">{input}</div></div>',
    'captchaAction' => ['/user-management/auth/captcha']
])
?>

        <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
<?=
Html::submitButton(
        '<span class="glyphicon glyphicon-ok"></span> ' . UserManagementModule::t('front', 'Register'), ['class' => 'btn btn-primary']
)
?>
                </div>
        </div>

<?php ActiveForm::end(); ?>

</div>-->
<style>
    .header1{
        background-color: #2F2F2F;
        display: block;
        height: 11.375rem;
        width: 100%;
    }
    .cardcenter{
        box-shadow: 0 0.0625rem 0.125rem 0 rgb(0 0 0 / 15%);
        margin: -6.875rem auto 0;
        max-width: 26.5rem;
        min-height: 25.5625rem;
        padding: 2rem 4rem;

        padding-bottom: 0;
        position: relative;

        font-family: Proxima Nova, -apple-system, Helvetica Neue, Helvetica, Roboto, Arial, sans-serif;
        border-radius: 6px;
        background-color: #fff;
    }
    .nose{

    }
</style>

<style>
    h1 {
        margin-top: 0;
        margin-bottom: 0.5rem;
    }
    a {
        color: #007bff;
        text-decoration: none;
        background-color: transparent;
    }
    a:hover {
        color: #0056b3;
        text-decoration: underline;
    }
    label {
        display: inline-block;
        margin-bottom: 0.5rem;
    }
    button {
        border-radius: 0;
    }
    button:focus:not(:focus-visible) {
        outline: 0;
    }
    input,
    button {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
    }
    button,
    input {
        overflow: visible;
    }
    button {
        text-transform: none;
    }
    button,
    [type="submit"] {
        -webkit-appearance: button;
    }
    button::-moz-focus-inner,
    [type="submit"]::-moz-focus-inner {
        padding: 0;
        border-style: none;
    }
    h1 {
        margin-bottom: 0.5rem;
        font-weight: 500;
        line-height: 1.2;
    }
    h1 {
        font-size: 2.5rem;
    }
    .form-group {
        margin-bottom: 1rem;
    }
    .invalid-feedback {
        display: none;
        width: 100%;
        margin-top: 0.25rem;
        font-size: 80%;
        color: #dc3545;
    }
    @media print {
        *,
        *::before,
        *::after {
            text-shadow: none !important;
            box-shadow: none !important;
        }
        a:not(.btn) {
            text-decoration: underline;
        }
    }
    /*! CSS Used from: Embedded */
    *,
    :after,
    :before {
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    ::-moz-selection {
        background: #e6e6e6;
    }
    ::selection {
        background: #e6e6e6;
    }
    h1 {
        margin: 0;
        font-weight: 400;
        line-height: 1.25;
    }
    a,
    a:hover,
    a:link,
    a:visited {
        text-decoration: none;
        color: #3483fa;
    }
    button {
        font-family: inherit;
    }
    .andes-card--padding-default .andes-card__footer {
        padding: 16px;
    }
    .andes-card {
        font-family: Proxima Nova, -apple-system, Helvetica Neue, Helvetica, Roboto,
            Arial, sans-serif;
        border-radius: 6px;
        background-color: #fff;
    }
    .andes-card--flat {
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.12);
    }
    .andes-card > :first-child {
        border-top-left-radius: 6px;
        border-top-right-radius: 6px;
    }
    .andes-card > :last-child {
        border-bottom-left-radius: 6px;
        border-bottom-right-radius: 6px;
    }
    .andes-card__footer {
        padding-top: 14px;
    }
    .andes-card__footer--border {
        border-top: 1px solid rgba(0, 0, 0, 0.07);
    }
    .andes-card__footer--link {
        font-size: 16px;
        font-weight: 600;
        line-height: 20px;
        display: block;
        color: #3483fa;
        text-decoration: none;
        -webkit-transition: background-color 0.15s ease-out;
        transition: background-color 0.15s ease-out;
    }
    .andes-card__footer--link:hover {
        background-color: #f5f5f5;
        color: #2968c8;
    }
    .andes-button {
        font-family: Proxima Nova, -apple-system, Helvetica Neue, Helvetica, Roboto,
            Arial, sans-serif;
        font-size: 16px;
        font-weight: 600;
        line-height: 48px;
        padding: 0 24px;
        height: 48px;
        text-align: center;
        border-radius: 6px;
        -webkit-transition: 0.18s ease-out;
        transition: 0.18s ease-out;
        -webkit-transition-property: background, color;
        transition-property: background, color;
        display: inline-block;
        width: auto;
        -webkit-font-smoothing: antialiased;
    }
    .andes-button:link {
        text-decoration: none;
    }
    .andes-button,
    .andes-button * {
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    .andes-button--full-width {
        width: 100%;
        display: block;
    }
    .andes-button__content {
        display: -webkit-flex;
        display: flex;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-align-items: center;
        align-items: center;
    }
    .andes-button__content {
        height: 100%;
    }
    .andes-button__content:after {
        content: "";
        display: table;
        clear: both;
    }
    .andes-button--loud {
        cursor: pointer;
        -webkit-transition: box-shadow 0.25s ease-out, background-color 0.2s ease-out;
        transition: box-shadow 0.25s ease-out, background-color 0.2s ease-out;
        box-shadow: 0 0 0 0 #fff;
    }
    .andes-button--loud,
    .andes-button--loud:focus,
    .andes-button--loud:link,
    .andes-button--loud:visited {
        border-color: transparent;
        background-color: #3483fa;
        color: #fff;
    }
    .andes-button--loud:hover {
        border-color: transparent;
        background-color: #2968c8;
        color: #fff;
        -webkit-transition: background-color 0.2s ease-in;
        transition: background-color 0.2s ease-in;
    }
    .andes-button--loud:active {
        border-color: transparent;
        background-color: #1f4e96;
        color: #fff;
    }
    .andes-button--loud:disabled {
        border-color: transparent;
        background-color: rgba(0, 0, 0, 0.1);
        color: rgba(0, 0, 0, 0.25);
        cursor: default;
        background-clip: padding-box;
    }
    .andes-button--loud:focus {
        outline: 0;
        box-shadow: 0 0 0 0.1875em rgba(30, 109, 255, 0.3);
        -webkit-transition: box-shadow 0.25s ease-in;
        transition: box-shadow 0.25s ease-in;
    }
    .andes-button--transparent {
        cursor: pointer;
        -webkit-transition: box-shadow 0.25s ease-out, background-color 0.2s ease-out;
        transition: box-shadow 0.25s ease-out, background-color 0.2s ease-out;
        box-shadow: 0 0 0 0 #fff;
    }
    .andes-button--transparent,
    .andes-button--transparent:focus,
    .andes-button--transparent:link,
    .andes-button--transparent:visited {
        border-color: transparent;
        background-color: transparent;
        color: #3483fa;
    }
    .andes-button--transparent:hover {
        border-color: transparent;
        background-color: rgba(65, 137, 230, 0.1);
        color: #3483fa;
        -webkit-transition: background-color 0.2s ease-in;
        transition: background-color 0.2s ease-in;
    }
    .andes-button--transparent:active {
        border-color: transparent;
        background-color: rgba(65, 137, 230, 0.2);
        color: #3483fa;
    }
    .andes-button--transparent:disabled {
        border-color: transparent;
        background-color: transparent;
        color: rgba(0, 0, 0, 0.25);
        cursor: default;
        background-clip: padding-box;
    }
    .andes-button--transparent:focus {
        outline: 0;
        box-shadow: 0 0 0 0.1875em rgba(30, 109, 255, 0.3);
        -webkit-transition: box-shadow 0.25s ease-in;
        transition: box-shadow 0.25s ease-in;
    }
    .andes-button--loud:after,
    .andes-button--loud:before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        padding: 0.0555555556em;
        margin: -0.0555555556em;
        border-radius: 0.2222222222em;
        -moz-box-sizing: content-box;
        box-sizing: content-box;
        -webkit-transform: scaleX(0);
        transform: scaleX(0);
        -webkit-transform-origin: left center;
        transform-origin: left center;
        border-color: transparent;
        background-color: #2968c8;
        color: #fff;
    }
    .andes-form-control {
        font-family: Proxima Nova, -apple-system, Helvetica Neue, Helvetica, Roboto,
            Arial, sans-serif;
        font-size: 18px;
        position: relative;
        padding-top: 0.6666666667em;
        font-weight: 400;
        display: block;
        -webkit-font-smoothing: antialiased;
        text-align: left;
    }
    .andes-form-control__control {
        position: relative;
    }
    .andes-form-control__control,
    .andes-form-control__field,
    .andes-form-control__label {
        display: block;
        width: 100%;
    }
    .andes-form-control__label {
        font-size: 1em;
        line-height: 1;
        color: rgba(0, 0, 0, 0.45);
        -webkit-transition: 0.2s ease-out;
        transition: 0.2s ease-out;
        -webkit-transition-property: color, -webkit-transform;
        transition-property: color, -webkit-transform;
        transition-property: transform, color;
        transition-property: transform, color, -webkit-transform;
    }
    .andes-form-control__field {
        font-size: inherit;
        font-family: inherit;
        color: rgba(0, 0, 0, 0.8);
        line-height: normal;
        background: transparent;
        border: 0;
        padding: 0;
        margin: 8px 0 4px;
        resize: none;
        overflow: hidden;
    }
    .andes-form-control:hover .andes-form-control__label {
        color: rgba(0, 0, 0, 0.45);
    }
    .andes-form-control__field:focus {
        outline: 0;
    }
    .andes-form-control--textfield .andes-form-control__label {
        font-size: 14px;
        font-weight: 400;
        line-height: 1.0714285714em;
        color: rgba(0, 0, 0, 0.8);
        margin: 0 0 0.4285714286em 0.4285714286em;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        -webkit-transition: 0.2s ease-out;
        transition: 0.2s ease-out;
        -webkit-transition-property: color;
        transition-property: color;
        -webkit-transform: unset !important;
        transform: unset !important;
        cursor: text;
    }
    .andes-form-control--textfield .andes-form-control__control {
        display: -webkit-flex;
        display: flex;
        -webkit-align-items: center;
        align-items: center;
        border-radius: 0.375em;
        background-color: #fff;
        font-size: 16px;
        box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.25);
        min-height: 48px;
    }
    .andes-form-control--textfield .andes-form-control__field {
        height: 22px;
        line-height: 22px;
        font-size: 16px;
        padding: 0.8125em 0.75em;
        margin: 0;
    }
    .andes-form-control--textfield
    .andes-form-control__field::-webkit-input-placeholder {
        opacity: 1;
    }
    .andes-form-control--textfield
    .andes-form-control__field:-ms-input-placeholder {
        opacity: 1;
    }
    .andes-form-control--textfield .andes-form-control__field::placeholder {
        opacity: 1;
        color: rgba(0, 0, 0, 0.25);
        font-size: 16px;
    }
    .andes-form-control--textfield
    .andes-form-control__field::-webkit-input-placeholder {
        color: rgba(0, 0, 0, 0.25);
        font-size: 16px;
    }
    .andes-form-control--textfield .andes-form-control__field::-moz-placeholder {
        opacity: 1;
        color: rgba(0, 0, 0, 0.25);
        font-size: 16px;
    }
    .andes-form-control--textfield .andes-form-control__field:-moz-placeholder {
        opacity: 1;
    }
    .andes-form-control--textfield
    .andes-form-control__field:-ms-input-placeholder {
        color: rgba(0, 0, 0, 0.25);
        font-size: 16px;
    }
    .andes-form-control--textfield
    .andes-form-control__field::-ms-input-placeholder {
        color: rgba(0, 0, 0, 0.25);
        font-size: 16px;
    }
    .andes-form-control--textfield .andes-form-control__field:-moz-placeholder {
        color: rgba(0, 0, 0, 0.25);
        font-size: 16px;
    }
    .andes-form-control--textfield:hover .andes-form-control__label {
        color: rgba(0, 0, 0, 0.8) !important;
    }
    .andes-form-control__label {
        font-family: Proxima Nova, -apple-system, Helvetica Neue, Helvetica, Roboto,
            Arial, sans-serif;
    }
    .andes-form-control--textfield:last-child {
        margin-right: 0;
    }
    a:focus {
        outline: 1px auto -webkit-focus-ring-color;
    }
    input:not(:-webkit-autofill) {
        -webkit-animation-name: onAutoFillCancel;
        animation-name: onAutoFillCancel;
    }
    @media only screen and (min-width: 768px) {
        .andes-button {
            width: 100%;
        }
        .andes-button + .andes-button {
            margin: 0.5rem 0 0;
        }
    }
    .login-form__row {
        margin: 0.625rem 0;
        min-height: 3.75rem;
        padding: 1.3125rem 0 0;
        position: relative;
        text-align: left;
    }
    .login-form__actions {
        margin-top: 2.25rem;
    }
    .login-form__input {
        position: relative;
        z-index: 10;
    }
    .center-card__body {
        padding: 0 1.5rem;
        text-align: left;
    }
    .center-card__body {
        box-shadow: none;
    }
    .center-card__header {
        margin: 1.875rem 0 1.625rem;
    }
    .center-card__title {
        font-size: 20px;
        font-size: 1.25rem;
        color: rgba(0, 0, 0, 0.8);
        font-weight: 600;
        letter-spacing: 0.0125rem;
        overflow-wrap: break-word;
    }
    @media only screen and (min-width: 768px) {
        .center-card__body {
            box-shadow: 0 0.0625rem 0.125rem 0 rgba(0, 0, 0, 0.15);
            margin: -6.875rem auto 0;
            max-width: 26.5rem;
            min-height: 25.5625rem;
            padding: 2rem 4rem;
        }
        .center-card__header {
            margin-top: 1.5rem;
        }
        .center-card__title {
            font-size: 24px;
            font-size: 1.5rem;
        }
    }
    .center-card__body {
        padding-bottom: 0;
    }
    .login-form__row {
        margin-bottom: 0;
        margin-top: 0;
        padding-top: 0;
    }
    .login-form__input--email {
        padding-top: 0.5625rem;
    }
    .login-form__actions {
        margin-top: 0.75rem;
    }
    .andes-card__footer--border {
        font-size: 0.875rem;
        margin-left: -4rem;
        margin-top: 2rem;
        padding: 0.6875rem 0 1.9375rem;
        text-align: center;
        width: 26.5rem;
    }
    @media only screen and (max-width: 767px) {
        .platform--ml .center-card__header {
            margin-bottom: 1.5rem;
        }
    }
    /*! CSS Used from: Embedded */
    .form-group {
        margin-bottom: 0;
        min-width: 100%;
    }
    /*! CSS Used keyframes */
    @-webkit-keyframes onAutoFillCancel {
        0% {
            -webkit-box-shadow: 0 0 0 1000px #fff inset;
        }
        to {
            -webkit-box-shadow: 0 0 0 1000px #fff inset;
        }
    }
    @keyframes onAutoFillCancel {
        0% {
            -webkit-box-shadow: 0 0 0 1000px #fff inset;
        }
        to {
            -webkit-box-shadow: 0 0 0 1000px #fff inset;
        }
    }

</style>

<?php
$form = ActiveForm::begin([
            'id' => 'user',
            'layout' => 'horizontal',
            'validateOnBlur' => false,
        ]);
?>

<div class="col-12 header1" style=""></div>
<div class="cardcenter">
    <div class="container">



        <div class="center-card__header">
            <h1 class="center-card__title">¡Hola! Ingresa tu teléfono, email o usuario</h1>
        </div>


        <input type="hidden" name="_csrf" value="5ELbWClF95rPe22G16Tm5SlQx64Jf2dSoER_qJ4E7Bu-O68NQAu-1KYSNeO1yte_ahe3-2spNxnpAhr7qEm8bQ==">                        
        <div class="login-form__row">
            <div class="login-form__input">

                <label class="andes-form-control andes-form-control--textfield andes-form-control--default login-form__input--email">
                    <span class="andes-form-control__label">Teléfono, e-mail o usuario</span>
                    <div class="andes-form-control__control">                        
                        <?= $form->field($model, 'username')->textInput(['placeholder' => '', 'autocomplete' => 'off', 'class' => 'andes-form-control__field']) ?>

                    </div>
                </label>

                <label class="andes-form-control andes-form-control--textfield andes-form-control--default login-form__input--email">
                    <span class="andes-form-control__label">Contraseña</span>
                    <div class="andes-form-control__control">                                                                
                        <?= $form->field($model, 'password')->passwordInput(['placeholder' => '', 'autocomplete' => 'off', 'class' => 'andes-form-control__field']) ?>
                    </div>
                </label>

                <label class="andes-form-control andes-form-control--textfield andes-form-control--default login-form__input--email">
                    <span class="andes-form-control__label">Contraseña</span>
                    <div class="andes-form-control__control">                                                                
                        <?= $form->field($model, 'repeat_password')->passwordInput(['placeholder' => '', 'autocomplete' => 'off', 'class' => 'andes-form-control__field']) ?>
                    </div>
                </label>

            </div>
            <div class="recaptcha-container">
                <div>
                    <div id="g-recaptcha" class="g-recaptcha" style="transform:scale(0.89);transform-origin:0 0"></div>
                </div>
                <div class="input-error"></div>
            </div>
        </div>
        <div class="login-form__actions">                  
            <button type="submit" class="andes-button andes-button--large andes-button--loud andes-button--full-width"><span class="andes-button__content">Continuar</span></button>
            <a id="registration-link" class="andes-button andes-button--large andes-button--transparent andes-button--full-width" href="/PuntoVentaOmnilife/web/user-management/auth/registration"><span class="andes-button__content">Crear cuenta</span></a>                        </div>                
        <a href="#" class="andes-card__footer andes-card__footer--link andes-card__footer--border">Necesito ayuda para ingresar
            <!-- -->
        </a>



    </div>
</div>
<?php ActiveForm::end(); ?>


<script>
    document.getElementById('idContainer').className = '';
</script>
