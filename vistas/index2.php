<?php

include_once '../controlador/user.php';
include_once '../controlador/user_session.php';

$userSession = new UserSession();
$user = new User();
$iden = '1';

if(isset($_SESSION['user']))
{
    //echo "hay session";
    
    if ($iden == '1') {
        $user->setUser($userSession->getCurrentUser());
        include_once 'Admin.php';
    }else{
        $user->setUser($userSession->getCurrentUser());
           include_once '../modelo/Micuenta.php';
    }
    
 


}else if(isset($_POST['nomusuario']) && isset($_POST['pass'])){
    //echo "validacion de login";

    $userForm = $_POST['nomusuario'];
    $passForm = $_POST['pass'];

    if($user->userExists($userForm, $passForm))
    {
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);

        if ($userForm == 'ADMINISTRADOR' && $passForm == 'admin') {

            $userSession->setCurrentUser($userForm);
            $user->setUser($userForm);

            include_once 'Admin.php';
            $iden = '1';
        }
        else{
            include_once '../modelo/Micuenta.php';
        }
        //echo "Usuario validado";
    }
    else
    {
        //echo "Nombre de usuario y/o password INCORRECTO";
        $errorLogin ="Usuario y/o Password es INCORRECTO";
        include_once '../vistas/Inicio.php';
    }

}
else
{
    //echo "login";
    include_once 'Inicio.php';
}

?>