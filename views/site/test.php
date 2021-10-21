<?php
use webvimark\modules\UserManagement\components\GhostMenu;
use webvimark\modules\UserManagement\UserManagementModule;
echo GhostMenu::widget([
    'encodeLabels' => false,
    'activateParents' => true,
    'items' => [
            [
            'label' => 'Backend routes',
            'items' => UserManagementModule::menuItems()
        ],
        
            [
            'label' => 'Frontend routes',
            'items' => [
                    ['label' => 'Login', 'url' => ['/user-management/auth/login']],
                    ['label' => 'Logout', 'url' => ['/user-management/auth/logout']],
                    ['label' => 'Registration', 'url' => ['/user-management/auth/registration']],
                    ['label' => 'Change own password', 'url' => ['/user-management/auth/change-own-password']],
                    ['label' => 'Password recovery', 'url' => ['/user-management/auth/password-recovery']],
                    ['label' => 'E-mail confirmation', 'url' => ['/user-management/auth/confirm-email']],
            ],
        ],
    ],
]);

?>


<?php
use yii\bootstrap4\Carousel;
/*
echo Carousel::widget([
    'items' => [
        // el artículo contiene solo la imagen
        '<img src="https://static-cse.canva.com/blob/646804/posters.jpg"/>',
        // equivalente a lo anterior
        ['content' => '<img src="https://binaries.templates.cdn.office.net/support/templates/es-es/lt23311183_quantized.png"/>'],
        // el artículo contiene tanto la imagen como el título
        [
            'content' => '<img src="https://cdn-1.motorsport.com/images/amp/Y99ALkPY/s1000/locandina-misano-1.jpg"/>',
            'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
            //'options' => [...],
        ],
    ]
]);
*/
echo Carousel::widget([
    'items' => [
        
        [
            'content' => '<img src="https://cdn-1.motorsport.com/images/amp/Y99ALkPY/s1000/locandina-misano-1.jpg"/>',
            'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
            //'options' => [...],
        ],
        [
            'content' => '<img src="https://static-cse.canva.com/blob/646804/posters.jpg"/>',
            'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
            //'options' => [...],
        ],
        [
            'content' => '<img src="https://binaries.templates.cdn.office.net/support/templates/es-es/lt23311183_quantized.png"/>',
            'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
            //'options' => [...],
        ],
    ]
]);


?>