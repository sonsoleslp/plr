<?php
/**
 * Created by PhpStorm.
 * User: Sonsoles
 * Date: 27/04/2016
 * Time: 13:57
 */

$logins  = array(
    'admin' => 'admin',
    'plr' => 'plr');
function checkLogin($username, $password, $logins){
    if(!isset($username) || !isset($password)){
        return false;
    }
    return(array_key_exists($username, $logins)
     && (strcmp($logins[$username],$password)==0));
}

//Válido

if(!checkLogin($_REQUEST['username'],$_REQUEST['password'],$logins)) {
    session_destroy();
    $errorLogin = 'El usuario o la contraseña son incorectos';
    header("Location:login.php?errorLogin=$errorLogin");
} else {
    session_start();
    $_SESSION['username'] = $_REQUEST['username'];
    header("Location:dashboard.php");
}