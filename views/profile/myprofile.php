<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<link href="<?= Yii::$app->homeUrl ?>css/styleProfile.css" rel="stylesheet" type="text/css"/>


<body style="background-color:#56257f;">

    <section class="main_body">
        <div class="site-width">
            <article class="basic_register_form">
                <div class="logo">
                    <div class="clickable">
                        <a href="<?= Yii::$app->homeUrl ?>">
                            <img src="<?= Yii::$app->homeUrl ?>resources/images/Omnilife_BCO_ESP.svg">
                        </a>
                    </div>
                </div>
                
                <header>
                    <h1><center>Mis Datos</center></h1>                   
                </header>
                
                <?php $form = ActiveForm::begin([
                    'method' => 'post',
                    'action' => ['profile/personaldata'],                  
                    'class' => 'new_register ng-pristine ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength ng-valid-minlength ng-valid-confirmed-by'
                ]); ?>
                                    
                    <fieldset ng-controller="BasicRegistrationController" ng-init="init('MEX', 'MwqnVLCB9s6YEOKgaxTPuvDAhob1emkSqMtRErQAOO6ukmMrH4hnHF0XR8u/6rSadAOiW2scsNpAYGzHtupGww==', false)" class="ng-scope">
                        <ol country-code="MEX" disclaimer-copy="disclaimerCopy" display-email-preference-checkbox="displayEmailPreferenceCheckbox" email-opt-in-copy="emailOptInCopy" email-preference="emailPreference" register-email-preference="" class="ng-isolate-scope">
                            <li>                             
                                <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'placeholder' => 'Nombre(s)', 'class' => 'ng-pristine ng-untouched ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength'])->label(false) ?>
                            </li>
                            <li>
                                <?= $form->field($model, 'lastname')->textInput(['maxlength' => true, 'placeholder' => 'Apellidos', 'class' => 'ng-pristine ng-untouched ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength'])->label(false) ?>
                            </li>
                            <li>
                                <?= $form->field($model, 'phonenumber')->textInput(['maxlength' => true, 'placeholder' => 'Numero de telefono', 'class' => 'ng-pristine ng-untouched ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength'])->label(false) ?>                                
                            </li> 
                            <li>                                
                                <?= $form->field($model, 'email')->textInput(['maxlength' => true, 'placeholder' => 'Numero de telefono', 'class' => 'ng-pristine ng-untouched ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength'])->label(false) ?>                                                                
                            </li>

                            <li>
                                <label for="register_country_code">Tipo de Cuenta</label>                                
                                <?= $form->field($model, 'account')->textInput(['maxlength' => true, 'value' => 'Comprador', 'placeholder' => 'Numero de telefono', 'class' => 'ng-pristine ng-untouched ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength', 'hidden' => ''])->label(false) ?>                                                                
                            </li>
                            <?= $form->field($model, 'fkuser')->textInput(['value' => Yii::$app->user->identity->id, 'hidden' => '']) ?>
                            <br>
                            <li>
                                <fieldset>
                                    <div class="ng-scope">
                                        <?= Html::submitButton('<span class="ng-scope">Acualizar datos</span>', ['class' => 'ng-isolate-scope']) ?>                                        
                                    </div>
                                </fieldset>
                            </li>
                            <p html-translate="Al unirte a Omnilife, aceptas"><span>Al unirte a Omnilife, aceptas nuestra Política de privacidad y condiciones de Uso. </span></p>
                        </ol>
                    </fieldset>
                    <input name="nds-pmd" type="hidden" value="{&quot;jvqtrgQngn&quot;:{&quot;oq&quot;:&quot;1280:657:1280:760:1280:760&quot;,&quot;wfi&quot;:&quot;flap-151081&quot;,&quot;oc&quot;:&quot;2501pp0s72219oop&quot;,&quot;fe&quot;:&quot;1280k800 24&quot;,&quot;qvqgm&quot;:&quot;360&quot;,&quot;jxe&quot;:598974,&quot;syi&quot;:&quot;snyfr&quot;,&quot;si&quot;:&quot;si,btt,zc4,jroz&quot;,&quot;sn&quot;:&quot;sn,zcrt,btt,jni&quot;,&quot;us&quot;:&quot;s5nnrp7prr18q38&quot;,&quot;cy&quot;:&quot;Jva32&quot;,&quot;sg&quot;:&quot;{\&quot;zgc\&quot;:0,\&quot;gf\&quot;:snyfr,\&quot;gr\&quot;:snyfr}&quot;,&quot;sp&quot;:&quot;{\&quot;gp\&quot;:gehr,\&quot;ap\&quot;:gehr}&quot;,&quot;sf&quot;:&quot;gehr&quot;,&quot;jt&quot;:&quot;3n1sr8q09p488ppo&quot;,&quot;sz&quot;:&quot;qq24746n55316rn4&quot;,&quot;vce&quot;:&quot;apvc,0,61n5nr05,2,1;fg,0,ertvfgre_rznvy,0,ertvfgre_cnffjbeq,0,ertvfgre_cnffjbeq_pbasvezngvba,0;zz,68173,21s,1,;gf,0,68173;zzf,3r6,0,n,9s 1sr,2726 4s68,184r,183n,-2p11r,26pr6,-1nnp;zzf,3r8,3r8,n,ro 0,446 56rn,163n,1643,-35q94,1os4r,-337q;zzf,40n,40n,n,ABC;zzf,s80,s80,n,ABC;zzf,3r6,3r6,n,ABC;zzf,sn6,sn1,n,ABC;zz,32s,223,6n,;zzf,o3,3r7,n,s90 sn0,2451 8pn,5s1,5s1,9916,qp8p,255q;zzf,3r8,3r8,n,9p sn,1s68 78r3,25rp,2614,-24784,35136,-2902;zzf,3r9,3r9,n,ABC;zzf,3r7,3r7,n,ABC;gf,0,6oss1;zz,p92,15n,2n0,;zz,1965,100,29,;zzf,8s1,2rr8,32,27 3s,25ps 49p2,66o,5410,-398rp,13869,-rn7;&quot;,&quot;hn&quot;:&quot;Zbmvyyn/5.0 (Jvaqbjf AG 10.0; Jva64; k64) NccyrJroXvg/537.36 (XUGZY, yvxr Trpxb) Puebzr/96.0 Fnsnev/537.36&quot;,&quot;ns&quot;:&quot;&quot;},&quot;jg&quot;:&quot;1.j-317751.1.2.V6udU_0mkh9tkIyX9seWpj,,.Uf4lEm2ZkK7ewWg1C6RZYUvecIJdrb1Dyah6Ol60u0a-fgeC6v2fN_GDj8pJc2QfvdMewEcS9cYnVxLoyv5DRkk-6qcYGw7Tcigz8OYXILBIoGH5vmZULLEyTT9rtzhl2oBb76fumZJBM7nOXEjVOZ39RwWV9P3tk23G3rd99_f7nnT15lySalUtUwOUPqlsAhC7-XTP3tCt1dt4drHd-FGjNbgs8v-88649l0cA9Q17IHEtt1bdpBxrwAbKyi08&quot;}">
                <!--</form>-->
                <?php ActiveForm::end(); ?>
            </article>
        </div>
    </section>
 


