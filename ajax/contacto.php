<?php
session_start(); 
require_once "../modelos/Contacto.php";

$contacto=new Contacto();


switch ($_GET["op"]){
	
	case 'guardar_contacto':
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];       
        $rspta=$contacto->guardar_contacto($name,$email,$subject,$message);
         echo json_encode($rspta);        
    break;

	
}
?>