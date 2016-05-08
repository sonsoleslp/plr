<?php
/**
 * Created by PhpStorm.
 * User: Sonsoles
 * Date: 13/04/2016
 * Time: 22:43
 */

define("RECIPIENT_NAME","PLR");
define("RECIPIENT_ADDRESS","sonsoleslp@hotmail.com");
define("EMAIL_SUBJECT","PLR");
$senderEmail = $_REQUEST['email'];
if (!isset($senderEmail)){
    $errorEmail =  'ERROR_EMAIL';

} else {
    $senderEmail = filter_var($senderEmail, FILTER_SANITIZE_EMAIL);
    if(!filter_var($senderEmail, FILTER_VALIDATE_EMAIL)){
        $errorEmail = 'ERROR_EMAIL';
    }
}
$senderName = $_REQUEST['name'];
if (!isset($senderName)){
    $errorName =   'ERROR_NAME';

} else {
    $senderName = filter_var($senderName, FILTER_SANITIZE_STRING);
    if($senderName==""){
        $errorName =  'ERROR_NAME';
    }
}

$message = $_REQUEST['message'];
if (!isset($message)){
    $errorMessage =  'ERROR_MSG';

} else {
    $message = filter_var($message, FILTER_SANITIZE_STRING);
    if($message == ""){
        $errorMessage =  'ERROR_MSG';
    }
}

$sucess=false;
if(!isset($errorEmail) && !isset($errorName) && !isset($errorMessage)){
    $recipient = RECIPIENT_NAME . " <" . RECIPIENT_ADDRESS . ">";
    $headers = "From: " . $senderName . " <" . $senderEmail . ">";
    require_once 'conectar.php';
    $sql_insert = "INSERT INTO `mensajes` (name,email,message) " . "
			      VALUES (?, ?, ?)";
    try {
        $sentencia = $db->prepare($sql_insert);
        $sentencia->execute(array($senderName, $senderEmail,  $message));

    }catch(PDOException $error) {
        die("Error a insertar " . $error->getMessage()) or die("Error al redirigir a formulario con error $error->getMessage()");
    }

    $success = mail($recipient, EMAIL_SUBJECT, $message, $headers);

}
?>


    <?php
    if($success):
        ?>
        <div style="padding:20px; border-style:dotted;" class="panel panel-success">
            <p> <?php $translate->__('EMAIL_SENT'); ?></p>
            <img src="images/ty.png" alt="">

        </div>
    <?php
    else:
    ?>
        <div style="padding:20px; border-style:dotted;"  class="panel panel-danger">
            <p><?php $translate->__('EMAIL_BAD'); ?></p>
            <p><?php  $translate->__($errorMessage);  ?></p>
            <p><?php  $translate->__($errorEmail);  ?></p>
            <p><?php  $translate->__($errorName);  ?></p>


        </div>
    <?php endif ?>
    <footer class="footer">
        <div class="container">
            <a style="color:#D40000;" href="javascript:history.back()"><i class="fa fa-arrow-left fa-4x"></i></a>
        </div>
    </footer>
