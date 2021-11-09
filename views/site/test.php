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

<!-------------------------------------------------------------------------------------------------->

<?php 
use webvimark\modules\UserManagement\models\User;
//use webvimark\modules\UserManagement\models\User;

if(User::hasRole(['vendedor'])){
    echo 'este es el admin';
}

echo 'apartir de aqui es<br>';

echo GhostMenu::widget([
    
    'encodeLabels'=>false,
	'activateParents'=>true,
	'items' => [
		
			['label' => 'Bank', 'url' => ['/bank/index']],
            ['label' => 'crea tu cuenta', 'url' => ['/user-management/auth/registration']],
            ['label' => 'sobre mi', 'url' => ['/site/about']],
                    
            ]
    
]);


if (User::hasRole('cliente')) {
    echo 'este es el cliente';
}

//SELECT * FROM `auth_assignment` WHERE `user_id` IN (4, 3, 1);  Obtener los roles
//SELECT * FROM `auth_assignment` WHERE `user_id` IN (6, 5, 4, 3, 1)
//Yii::$app->user->id
?>

