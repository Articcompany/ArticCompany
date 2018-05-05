<?php
    $mail = "Prueba de mensaje";
    //Titulo
    $titulo = "PRUEBA DE TITULO";
    //cabecera
    $headers = "MIME-Version: 1.0\r\n"; 
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    //dirección del remitente 
    $headers .= "From: Geeky Theory < tu_dirección_email >\r\n";
    //Enviamos el mensaje a tu_dirección_email 
    $bool = mail("icruizc@correo.udistrital.edu.co",$titulo,$mail,$headers);
    if($bool){
        echo "Mensaje enviado";
    }else{
        echo "Mensaje no enviado";
    }
    if(isset($_POST['email'])) {
        // Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
        $email_to = "icruizc@correo.udistrital.edu.co";
        $email_subject = "Proyecto nuevo para Artic";
        // Aquí se deberían validar los datos ingresados por el usuario
        if(!isset($_POST['nombre']) || !isset($_POST['email']) || !isset($_POST['telefono']) || !isset($_POST['mensaje'])) {
            echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
            echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
            die();
        }
        $email_message = "";
        $email_message .= "Nombre Cliente: " . $_POST['nombre'] . "\n";
        $email_message .= "E-mail Cliente: " . $_POST['email'] . "\n";
        $email_message .= "Teléfono Cliente: " . $_POST['telefono'] . "\n";
        $email_message .= "Comentarios acerca del proyecto: " . $_POST['mensaje'] . "\n\n";
        $email_message = "Detalles del formulario de contacto:\n\n";
        // Ahora se envía el e-mail usando la función mail() de PHP
        
        if(@mail("icruizc@correo.udistrital.edu.co", "nuevo trabajo artic", "oli")){
            echo "¡El formulario se ha enviado con éxito!";
        }else{
            echo "¡problemas con el envio!";
        }
        
        
    }
?>