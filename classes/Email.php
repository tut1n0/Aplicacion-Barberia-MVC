<?php


namespace Classes;
use PHPMailer\PHPMailer\PHPMailer;
use Dotenv\Dotenv as Dotenv;

class Email {
    public $email;
    public $nombre;
    public $token;

    public function __construct($email, $nombre, $token)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion() {

        //Crear el objeto de email
        $mail = new PHPMailer();
        $mail->isSMTP();
        //$mail->Host = 'smtp.mailtrap.io';
        $mail->Host = $_ENV['MAIL_HOST'];
        $mail->SMTPAuth = true;
        //$mail->Port = 2525;
        $mail->Port = $_ENV['MAIL_PORT'];
        //$mail->Username = 'c075e304641c33';
        $mail->Username = $_ENV['MAIL_USER'];
        //$mail->Password = '3387e18620111a';
        $mail->Password = $_ENV['MAIL_PASS'];

        $mail->setFrom('cuentas@appsalon.com');
        $mail->addAddress('cuentas@appsalon.com', 'AppSalon.com');
        $mail->Subject = 'Confirma tu cuenta';
        
        //Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " . $this->email . "</strong> Has creado tu cuenta en App Salon, solo debes confirmarla presionando el siguiente enlace</p>";
        $contenido .= "<p>Presiona aqui: <a href='" . $_ENV['SERVER_HOST'] . $this->token . "'>Confirmar cuenta</a> </p>";
        $contenido .= "<p>Si no solicitaste abrir una cuenta, ignora este mensaje.</p>";
        $contenido .="</html>";
        
        $mail->Body = $contenido;

        //Enviar email
        $mail->send();
    }

    public function enviarInstrucciones() {

        //create a new object
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'c075e304641c33';
        $mail->Password = '3387e18620111a';

        $mail->setFrom('cuentas@appsalon.com');
        $mail->addAddress('cuentas@appsalon.com', 'AppSalon.com');
        $mail->Subject = 'Reestablece tu password';
        
        //Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre . "</strong> Has solicitado reestablecer tu password, sigue el siguiente enlace para hacerlo</p>";
        $contenido .= "<p>Presiona aqui: <a href='http://localhost:3000/recuperar?token=" . $this->token . "'>Reestablecer password</a> </p>";
        $contenido .= "<p>Si no solicitaste este cambio, ignora este mensaje.</p>";
        $contenido .="</html>";
        
        $mail->Body = $contenido;

        //Enviar email
        $mail->send();
    }
}