<?php

/**
 * @var $this yii\web\View
 * @var $model webvimark\modules\UserManagement\models\forms\LoginForm
 */
use webvimark\modules\UserManagement\components\GhostHtml;
use webvimark\modules\UserManagement\UserManagementModule;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;
?>
<?= Html::jsFile('@web/js/all.js') ?>
<!--<h3 class="panel-title"><?php // UserManagementModule::t('front', '¡Hola! Ingresa tu teléfono, email o usuario')   ?></h3>-->

<body data-site="ML" data-country="MX" class="platform--ml">
    <header role="banner" class="nav-header nav-header-lite">
        <div class="nav-bounds"><a class="nav-logo" href="<?= Yii::$app->homeUrl ?>">Omnilife Castellanos</a>
            <div class="nav-header-menu-wrapper">
                <nav id="nav-header-menu" class="nav-header-menu">
                    <a href="<?= Yii::$app->homeUrl ?>" class="option-help" rel="nofollow" aria-labelledby="help-text" style="font-size: 20px; color: white;"><i class="far fa-question-circle"><span id="help-text">Ayuda</span></i></a>
                </nav>
            </div>
        </div>
    </header>
    <main role="main" id="root-app">
        <div class="email_nickname_view container1">
            <div class="wrap">
                <div class="main">
                    <div class="center-card__billboard"></div>
                    <div class="andes-card andes-card--flat andes-card--default center-card__body andes-card--padding-default">
                        <div class="center-card__header">
                            <h1 class="center-card__title"><?= UserManagementModule::t('front', '¡Hola! Ingresa tu teléfono, email o usuario') ?></h1>
                        </div>
                        <!--<form class="login-form" action="#" method="POST" novalidate="" id="login_user_form">-->
                        <?php
                        $form = ActiveForm::begin([
                                    'id' => 'login_user_form',
                                    'class' => 'login-form',
                                    'options' => ['autocomplete' => 'off'],
                                    'validateOnBlur' => false,
                                    'fieldConfig' => [
                                        'template' => "{input}\n{error}",
                                    ],
                                ])
                        ?>
                        <style>
                            .form-group {
                                margin-bottom: 0;
                                min-width: 100%;
                            }
                        </style>
                        <div class="login-form__row">
                            <div class="login-form__input">

                                <label class="andes-form-control andes-form-control--textfield andes-form-control--default login-form__input--email">
                                    <span class="andes-form-control__label">Teléfono, e-mail o usuario</span>
                                    <div class="andes-form-control__control">                        
                                        <?= $form->field($model, 'username')->textInput(['placeholder' => '', 'autocomplete' => 'on', 'class' => 'andes-form-control__field']) ?>
                                    </div>
                                </label>

                                <label class="andes-form-control andes-form-control--textfield andes-form-control--default login-form__input--email">
                                    <span class="andes-form-control__label">Contraseña</span>
                                    <div class="andes-form-control__control">                                                                
                                        <?= $form->field($model, 'password')->passwordInput(['placeholder' => '', 'autocomplete' => 'on', 'class' => 'andes-form-control__field']) ?>
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
                            <?= Html::submitButton(UserManagementModule::t('front', '<span class="andes-button__content">Continuar</span>'), ['class' => 'andes-button andes-button--large andes-button--loud andes-button--full-width']) ?>

                            <?= Html::a(UserManagementModule::t('front', '<span class="andes-button__content">Crear cuenta</span>'), ['/user-management/auth/registration'], ['class' => 'andes-button andes-button--large andes-button--transparent andes-button--full-width', 'id' => 'registration-link']) ?>
                        </div>                
                        <?php ActiveForm::end() ?>
                        <a href="#" class="andes-card__footer andes-card__footer--link andes-card__footer--border">Necesito ayuda para ingresar
                            <!-- -->
                        </a>
                    </div>
                </div>
            </div>
            <div class="recaptcha-terms__container">Protegido por reCAPTCHA<span class="recaptcha-terms__links">- <a href="https://policies.google.com/privacy?hl=es-419">Privacidad
                        <!-- -->
                    </a>- <a href="https://policies.google.com/terms?hl=es-419">Condiciones</a></span></div>
            <div style="display:none" class="profiling-container">

            </div>

        </div>
    </main>
    <footer class="login-footer">
        <div><a class="login-footer_link" href="#" target="_blank">Cómo cuidamos tu privacidad <span>(abrirá una nueva ventana)</span></a></div>
        <div class="login-footer_copyright">Copyright © 2017-2021 cobratechnologies.com de México S. de R.L. de C.V.</div>
    </footer>

</body>

<?php // $form->field($model, 'username')->textInput(['placeholder' => $model->getAttributeLabel('username'), 'autocomplete' => 'off']) ?>

<?php // $form->field($model, 'password')->passwordInput(['placeholder' => $model->getAttributeLabel('password'), 'autocomplete' => 'off']) ?>

<?php // (isset(Yii::$app->user->enableAutoLogin) && Yii::$app->user->enableAutoLogin) ? $form->field($model, 'rememberMe')->checkbox(['value' => true]) : '' ?>

<?php // GhostHtml::a(UserManagementModule::t('front', "Forgot password ?"), ['/user-management/auth/password-recovery'])?>



<?php
$logo = Yii::$app->homeUrl . 'resources/images/logoES.svg';
$css = <<<CSS
/*! CSS Used from: Embedded */
@media (min-width: 1024px) {
  [role="main"],
  body,
  html {
    height: 100%;
  }
  .nav-header {
    -webkit-user-select: none;
  }
  [class^="nav-icon-"] {
    font-style: normal;
  }
  [class^="nav-icon-"]:before {
    font-variant: normal;
    margin: 0;
    speak: none;
    text-align: center;
    width: 1em;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-family: navigation;
  }
  #nav-header-menu a.option-help:after {
    content: "\EA0B";
  }
  .nav-icon-help:before {
    content: "\EA0C";
  }
  body,
  html {
    margin: 0;
    padding: 0;
    width: 100%;
  }
  body {
    border-collapse: collapse;
    display: table;
    font-family: "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica,
      Roboto, Arial, sans-serif, sans-serif;
    table-layout: fixed;
  }
  .nav-header,
  [role="main"] {
    display: table-row;
    width: 100%;
  }
  .nav-bounds {
    display: block;
    padding: 0 10px;
    margin: 0 auto;
  }
  .nav-header {
    font-family: "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica,
      Roboto, Arial, sans-serif;
    color: #333;
    -ms-user-select: none;
    user-select: none;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    -webkit-tap-highlight-color: transparent;
    cursor: default;
  }
  .nav-header .nav-bounds {
    position: relative;
  }
  .nav-header,
  .nav-header *,
  .nav-header :after,
  .nav-header :before {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
  }
  .nav-logo {
    display: inline-block;
  }
  #nav-header-menu:after,
  #nav-header-menu:before {
    border-style: solid;
    border-color: transparent;
    position: absolute;
    bottom: 100%;
    -webkit-transform: translateY(1px);
    -ms-transform: translateY(1px);
    transform: translateY(1px);
    content: "";
  }
  #nav-header-menu,
  #nav-header-menu a {
    position: relative;
  }
  #nav-header-menu a:first-child {
    border-top-color: #fff;
  }
  #nav-header-menu a:after {
    position: absolute;
    top: 0;
    right: 20px;
    font-family: navigation;
    color: #404040;
    content: "\EA05";
  }
  #nav-header-menu:before {
    border-bottom-color: #fff;
    border-width: 8px;
    right: 14.5px;
    pointer-events: none;
  }
  #nav-header-menu:after {
    border-width: 7px;
    border-bottom-color: #fff;
    right: 15.5px;
    pointer-events: none;
  }
  .nav-logo {
    background-repeat: no-repeat;
    overflow: hidden;
    text-indent: -999px;
    position: absolute;
    left: 10px;
    outline: 0;
  }
  @media (-webkit-min-device-pixel-ratio: 2),
    (min-resolution: 192dpi),
    (min-resolution: 2dppx) {
    .nav-logo {
      background-image: url($logo);
      -webkit-background-size: 39px 28px;
      background-size: 39px 28px;
    }
  }
  #nav-header-menu a {
    border: none;
  }
  #nav-header-menu a.option-help {
    border-left: none;
  }
  #nav-header-menu a:after {
    left: 24px;
    font-size: 24px;
  }
  #nav-header-menu a:after,
  [class^="nav-icon-"] span {
    display: none;
  }
  [class^="nav-icon-"]:before {
    display: inline-block;
  }
  body,
  html {
    font-size: 13px;
    background-color: #fff;
  }
  .nav-bounds {
    max-width: 1220px;
  }
  .nav-header {
    background-image: none;
    font-size: 13px;
    font-weight: 400;
  }
  .nav-header .nav-bounds {
    padding: 0 0 0 160px;
  }
  .nav-header :focus {
    outline: 0;
  }
  #nav-header-menu {
    display: block;
    font-size: 0;
    margin: 0 0 0 16px;
    background-color: transparent;
    float: right;
    padding: 0;
    white-space: nowrap;
  }
  #nav-header-menu a {
    display: inline;
    height: auto;
    border-top: none;
    color: #333;
    text-decoration: none;
    border-left: 1px solid rgba(51, 51, 51, 0.2);
    padding: 1px 16px;
  }
  #nav-header-menu a:hover,
  #nav-header-menu a:hover i:before {
    color: #000;
  }
  #nav-header-menu i:before {
    color: #333;
    vertical-align: middle;
    font-size: 16px;
    text-shadow: none;
  }
  #nav-header-menu i span {
    font-size: 14px;
  }
  #nav-header-menu:after,
  #nav-header-menu:before {
    display: none;
  }
  .nav-logo {
    background-image: url($logo);
    height: 34px;
    top: 11px;
    width: 134px;
  }
  @media (-webkit-min-device-pixel-ratio: 2),
    (min-resolution: 192dpi),
    (min-resolution: 2dppx) {
    .nav-logo {
      background-image: url($logo);
      -webkit-background-size: 134px 34px;
      background-size: 134px 34px;
    }
  }
  #nav-header-menu a {
    padding-top: 1px;
    padding-bottom: 1px;
    font-size: 14px;
    line-height: 55px;
  }
  #nav-header-menu a [class^="nav-icon-"]:before {
    display: inline-block;
  }
  #nav-header-menu:first-child {
    border-left: none;
  }
  #nav-header-menu i.nav-icon-help:before {
    font-size: 16px;
  }
  #nav-header-menu .nav-icon-help:before {
    content: "\EA24";
  }
  .nav-header {
    background-color: #fff159;
    border: 0;
    position: relative;
  }
  .nav-header:before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100px;
    left: 0;
    top: 0;
    -webkit-box-shadow: 0 1px 0 0 rgba(0, 0, 0, 0.1);
    box-shadow: 0 1px 0 0 rgba(0, 0, 0, 0.1);
  }
  .nav-header a,
  .nav-header a:focus {
    outline: 0;
  }
  .nav-header {
    height: 100px;
  }
  .nav-header .nav-bounds {
    height: auto;
    max-width: 1200px;
  }
  #nav-header-menu {
    margin-top: 48px;
  }
  #nav-header-menu {
    text-align: right;
  }
  #nav-header-menu {
    height: 52px;
    min-width: 340px;
    -webkit-font-smoothing: antialiased;
    left: 2px;
    padding-top: 4px;
    margin-right: 15px;
    margin-left: 0;
  }
  #nav-header-menu > a {
    border: none;
    left: 12px;
    padding: 0 10px;
    font-size: 14px;
  }
  nav#nav-header-menu a.option-help {
    padding-right: 10px;
  }
}
@media (max-width: 1023px) {
  [role="main"],
  body,
  html {
    height: 100%;
  }
  [class^="nav-icon-"] {
    font-style: normal;
  }
  [class^="nav-icon-"]:before {
    display: inline-block;
    font-variant: normal;
    margin: 0;
    speak: none;
    text-align: center;
    width: 1em;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-family: navigation;
  }
  #nav-header-menu a.option-help:after {
    content: "\EA0B";
  }
  .nav-icon-help:before {
    content: "\EA0C";
  }
  body,
  html {
    margin: 0;
    padding: 0;
    width: 100%;
  }
  body {
    border-collapse: collapse;
    display: table;
    background-color: #fff;
    font-family: "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica,
      Roboto, Arial, sans-serif, sans-serif;
    font-size: 14px;
    table-layout: fixed;
  }
  .nav-header,
  [role="main"] {
    display: table-row;
    width: 100%;
  }
  .nav-bounds {
    display: block;
    margin: 0 auto;
  }
  .nav-header {
    font-family: "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica,
      Roboto, Arial, sans-serif;
    color: #333;
    -webkit-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    -webkit-tap-highlight-color: transparent;
    cursor: default;
  }
  .nav-header .nav-bounds {
    position: relative;
  }
  .nav-header,
  .nav-header *,
  .nav-header :after,
  .nav-header :before {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
  }
  #nav-header-menu:after,
  #nav-header-menu:before {
    border-style: solid;
    border-color: transparent;
    position: absolute;
    bottom: 100%;
    -webkit-transform: translateY(1px);
    -ms-transform: translateY(1px);
    transform: translateY(1px);
    content: "";
  }
  #nav-header-menu {
    background-color: #fff;
    display: none;
    position: relative;
  }
  #nav-header-menu a {
    display: block;
    font-size: 16px;
    text-decoration: none;
    color: #333;
    position: relative;
  }
  #nav-header-menu a [class^="nav-icon-"]:before {
    display: none;
  }
  #nav-header-menu a:first-child {
    border-top-color: #fff;
  }
  #nav-header-menu a:after {
    position: absolute;
    top: 0;
    right: 20px;
    display: block;
    font-family: navigation;
    color: #404040;
    content: "\EA05";
  }
  .nav-logo {
    display: inline-block;
  }
  #nav-header-menu:before {
    border-bottom-color: #fff;
    border-width: 8px;
    right: 14.5px;
    pointer-events: none;
  }
  #nav-header-menu:after {
    border-width: 7px;
    border-bottom-color: #fff;
    right: 15.5px;
    pointer-events: none;
  }
  .nav-logo {
    background-image: url($logo);
    background-repeat: no-repeat;
    height: 28px;
    overflow: hidden;
    text-indent: -999px;
    width: 39px;
    top: 11px;
    position: absolute;
    left: 10px;
    outline: 0;
  }
  @media (-webkit-min-device-pixel-ratio: 2),
    (min-resolution: 192dpi),
    (min-resolution: 2dppx) {
    .nav-logo {
      background-image: url($logo);
      -webkit-background-size: 39px 28px;
      background-size: 39px 28px;
    }
  }
  #nav-header-menu {
    padding: 16px 0;
  }
  #nav-header-menu a {
    padding: 0 16px 0 72px;
    height: 50px;
    line-height: 50px;
    border: none;
  }
  #nav-header-menu a.option-help {
    border-left: none;
  }
  #nav-header-menu a:after {
    left: 24px;
    font-size: 24px;
  }
  .nav-header {
    background-color: #fff159;
    border: 0;
    position: relative;
  }
  .nav-header:before {
    content: "";
    position: absolute;
    width: 100%;
    left: 0;
    top: 0;
    -webkit-box-shadow: 0 1px 0 0 rgba(0, 0, 0, 0.1);
    box-shadow: 0 1px 0 0 rgba(0, 0, 0, 0.1);
  }
  .nav-header a,
  .nav-header a:focus {
    outline: 0;
  }
  .nav-header:before {
    height: 48px;
  }
  .nav-bounds {
    padding: 22px 10%;
  }
  .nav-header .nav-logo {
    -webkit-background-size: 44px 31px;
    background-size: 44px 31px;
    width: 44px;
    height: 32px;
    top: 8px;
    left: 10px;
  }
  .nav-header .nav-bounds {
    padding: 48px 0 0;
  }
}
*,
:after,
:before {
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
body {
  background: #eee;
}
main[role="main"] {
  font-family: Proxima Nova, -apple-system, Helvetica Neue, Helvetica, Roboto,
    Arial, sans-serif;
  font-size: 16px;
  font-weight: 300;
  line-height: 1.35;
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0.1);
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
.andes-form-control__label,
.andes-form-control__message {
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
.andes-form-control--textfield .andes-form-control__message {
  font-size: 13px;
  margin-top: 0;
}
.andes-form-control--textfield .andes-form-control__bottom {
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  font-size: 13px;
  margin: 0.6153846154em 0 0 0.4615384615em;
}
.andes-form-control--textfield:hover .andes-form-control__label {
  color: rgba(0, 0, 0, 0.8) !important;
}
.andes-form-control__label,
.andes-form-control__message {
  font-family: Proxima Nova, -apple-system, Helvetica Neue, Helvetica, Roboto,
    Arial, sans-serif;
}
.andes-form-control--textfield:last-child {
  margin-right: 0;
}
.andes-form-control__message {
  font-size: 14px;
  line-height: 1em;
  color: rgba(0, 0, 0, 0.45);
  margin-top: 0.3333333333em;
  opacity: 0;
  -webkit-transition: opacity 0.15s ease-out;
  transition: opacity 0.15s ease-out;
  text-align: left;
  min-height: 14px;
  opacity: 1;
}
a:focus {
  outline: 1px auto -webkit-focus-ring-color;
}
input:not(:-webkit-autofill) {
  -webkit-animation-name: onAutoFillCancel;
  animation-name: onAutoFillCancel;
}
body,
html {
  font-size: 16px;
}
body {
  background: #fff;
}
.nav-header:before {
  content: none;
}
@media only screen and (min-width: 768px) {
  body {
    background: #ededed;
  }
  .nav-header {
    border-bottom: 0;
    box-shadow: none;
  }
  .platform--ml .nav-header {
    background-color: #2F2F2F;
  }
  #nav-header-menu {
    height: inherit;
    margin: 0;
    min-width: inherit;
    padding: 0;
    position: inherit;
  }
  #nav-header-menu > a {
    border-left: 0;
    left: unset;
    position: unset;
  }
  #nav-header-menu > a.option-help {
    border-left: 0;
  }
  .andes-button {
    width: 100%;
  }
  .andes-button + .andes-button {
    margin: 0.5rem 0 0;
  }
}
@media screen and (min-width: 1024px) {
  body,
  html {
    font-size: 16px;
  }
  #nav-header-menu {
    margin: auto;
  }
  .nav-header {
    height: 3.5rem;
  }
  .nav-header #nav-header-menu {
    -webkit-align-items: center;
    align-items: center;
    display: -webkit-flex;
    display: flex;
    height: 3.5rem;
    padding: 0 12px;
  }
  .nav-header #nav-header-menu .option-help {
    line-height: inherit;
    padding-bottom: 4px;
  }
  .nav-header #nav-header-menu .option-help:focus {
    outline: 1px auto -webkit-focus-ring-color;
    outline-offset: 2px;
  }
}
.container1 {
  height: 100%;
  position: relative;
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
.recaptcha-terms__container {
  font-size: 12px;
  font-size: 0.75rem;
  color: #666;
  margin: 2rem 0 0;
  text-align: center;
}
.recaptcha-terms__links {
  font-size: 10px;
  font-size: 0.625rem;
}
@media only screen and (min-width: 768px) {
  .recaptcha-terms__container {
    margin: 1.5rem 0 5.5rem;
  }
}
@media only screen and (max-height: 481px) {
  .wrap {
    height: 86%;
    min-height: 23.125rem;
  }
}
.login-footer {
  border-top: 0.0625rem solid rgba(0, 0, 0, 0.1);
  background: #fff;
  height: 5.5rem;
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: column;
  flex-direction: column;
  -webkit-justify-content: center;
  justify-content: center;
  text-align: center;
}
.login-footer_link {
  font-size: 14px;
  font-size: 0.875rem;
  color: rgba(0, 0, 0, 0.8) !important;
}
.login-footer_link span {
  font-size: 0;
}
.login-footer_copyright {
  font-size: 12px;
  font-size: 0.75rem;
  color: rgba(0, 0, 0, 0.45);
}
.wrap {
  height: 90%;
  min-height: 25rem;
  width: 100%;
}
.main {
  overflow: auto;
  padding-bottom: 1.5rem;
}
.center-card__billboard,
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
  .wrap {
    height: auto;
  }
  .center-card__billboard {
    background-color: #2F2F2F;
    display: block;
    height: 11.375rem;
    width: 100%;
  }
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
.login-form__input--email .andes-form-control__bottom {
  margin-top: 0.375rem;
}
.login-form__actions {
  margin-top: 0.75rem;
}
.andes-form-control__message,
.andes-form-control__message .input-error {
  margin-top: 0;
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
  .platform--ml {
    height: 0;
    min-height: 100vh;
  }
  .platform--ml .center-card__header {
    margin-bottom: 1.5rem;
  }
  .platform--ml .container {
    display: -webkit-flex;
    display: flex;
    -webkit-flex-direction: column;
    flex-direction: column;
  }
  .platform--ml .container .wrap {
    display: -webkit-flex;
    display: flex;
    -webkit-flex-grow: 1;
    flex-grow: 1;
  }
  .platform--ml .container .wrap .main {
    display: -webkit-flex;
    display: flex;
    -webkit-flex-direction: column;
    flex-direction: column;
    padding-bottom: 0.5rem;
  }
  .platform--ml .container .wrap .main .center-card__body {
    display: -webkit-flex;
    display: flex;
    -webkit-flex-direction: column;
    flex-direction: column;
    -webkit-flex-grow: 1;
    flex-grow: 1;
  }
  .platform--ml .container .wrap .main .center-card__body .login-form {
    -webkit-flex-grow: 1;
    flex-grow: 1;
  }
  .platform--ml
    .container
    .wrap
    .main
    .center-card__body
    .login-form
    .login-form__actions {
    margin-top: 1rem;
  }
  .platform--ml
    .container
    .wrap
    .main
    .center-card__body
    .andes-card__footer--border {
    border: 0;
    margin: 0;
    padding-top: 0.5rem;
    text-align: center;
    width: auto;
  }
  .platform--ml .container .recaptcha-terms__container {
    margin: 0 0 1.5rem;
  }
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
/*! CSS Used fontfaces 
@font-face {
  font-family: navigation;
  src: url(https://http2.mlstatic.com/frontend-assets/ui-navigation/5.10.1/navigation.eot);
  src: url(https://http2.mlstatic.com/frontend-assets/ui-navigation/5.10.1/navigation.eot#iefix)
      format("embedded-opentype"),
    url(https://http2.mlstatic.com/frontend-assets/ui-navigation/5.10.1/navigation.woff2)
      format("woff2"),
    url(https://http2.mlstatic.com/frontend-assets/ui-navigation/5.10.1/navigation.woff)
      format("woff"),
    url(https://http2.mlstatic.com/frontend-assets/ui-navigation/5.10.1/navigation.ttf)
      format("truetype"),
    url(https://http2.mlstatic.com/frontend-assets/ui-navigation/5.10.1/navigation.svg#navigation)
      format("svg");
  font-weight: 400;
  font-style: normal;
}
@font-face {
  font-family: navigation;
  src: url(https://http2.mlstatic.com/frontend-assets/ui-navigation/5.10.1/navigation.eot);
  src: url(https://http2.mlstatic.com/frontend-assets/ui-navigation/5.10.1/navigation.eot#iefix)
      format("embedded-opentype"),
    url(https://http2.mlstatic.com/frontend-assets/ui-navigation/5.10.1/navigation.woff2)
      format("woff2"),
    url(https://http2.mlstatic.com/frontend-assets/ui-navigation/5.10.1/navigation.woff)
      format("woff"),
    url(https://http2.mlstatic.com/frontend-assets/ui-navigation/5.10.1/navigation.ttf)
      format("truetype"),
    url(https://http2.mlstatic.com/frontend-assets/ui-navigation/5.10.1/navigation.svg#navigation)
      format("svg");
  font-weight: 400;
  font-style: normal;
}
@font-face {
  font-family: "Proxima Nova";
  font-weight: 300;
  font-style: normal;
  font-display: swap;
  src: url(https://http2.mlstatic.com/ui/webfonts/v3.0.0/proxima-nova/proximanova-light.woff2)
      format("woff2"),
    url(https://http2.mlstatic.com/ui/webfonts/v3.0.0/proxima-nova/proximanova-light.woff)
      format("woff"),
    url(https://http2.mlstatic.com/ui/webfonts/v3.0.0/proxima-nova/proximanova-light.ttf)
      format("truetype");
}
@font-face {
  font-family: "Proxima Nova";
  font-weight: 400;
  font-style: normal;
  font-display: swap;
  src: url(https://http2.mlstatic.com/ui/webfonts/v3.0.0/proxima-nova/proximanova-regular.woff2)
      format("woff2"),
    url(https://http2.mlstatic.com/ui/webfonts/v3.0.0/proxima-nova/proximanova-regular.woff)
      format("woff"),
    url(https://http2.mlstatic.com/ui/webfonts/v3.0.0/proxima-nova/proximanova-regular.ttf)
      format("truetype");
}
*/

CSS;

$this->registerCss($css);
?>