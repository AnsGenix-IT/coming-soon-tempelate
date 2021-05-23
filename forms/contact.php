<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require '../assets/vendor/PHPMailer/PHPMailer/src/PHPMailer.php';
require '../assets/vendor/PHPMailer/PHPMailer/src/Exception.php';
require '../assets/vendor/PHPMailer/PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true);
session_start();
try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;   // keep this commented because it prevents to redirect to home page after form submission because it sends headers which prevents us from applying our headers to redirect                     // Enable verbose debug output
    $mail->isSMTP();
    //$mail->Mailer = "smtp";                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;  
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                 // Enable SMTP authentication
    $mail->Username   = 'naaniregister@gmail.com';                     // SMTP username
    $mail->Password   = '\Kz7Xc[@2+mNQ:mj'; 
    //$mail->SMTPSecure = "tls";                              // SMTP password
                                       // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('naaniregister@gmail.com', 'Naani'); //sender e-mail id and name , name can be removed it is optional
    $mail->addAddress('iamkrishnadogra@gmail.com');     // Add a recipient
    
    
    list($name,$number,$email,$address) = array_values($_POST); 
    
  //html format for email you can also made this in separate .html or .php file also and then pass it here  
    $html = "<html>
    <style>
    th,td{
      padding: 0.25rem;
  text-align: left;
  border: 1px solid #ccc;
    }
    </style>
    <body style=\"font: normal medium/1.4 sans-serif;\" >
    <div style=\"width: 100%; margin: auto;\">
  <table style=\"border-collapse: collapse;\">
    <thead>
      <tr style=\"background: #eee;\">
        <th style=\"padding:1rem;
        text-align: left;
        border: 1px solid #ccc;\">Name</th>
        
        <th style=\"padding:1rem;
        text-align: left;
        border: 1px solid #ccc;\">Email</th>

        <th style=\"padding:1rem;
        text-align: left;
        border: 1px solid #ccc;\">number</th>

        <th style=\"padding:1rem;
        text-align: left;
        border: 1px solid #ccc;\">Address</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style=\"padding:1rem;
        text-align: left;
        border: 1px solid #ccc;\">". $name ."</td>

        <td style=\"padding:1rem;
        text-align: left;
        border: 1px solid #ccc;\">". $number ."</td>

        <td style=\"padding:1rem;
        text-align: left;
        border: 1px solid #ccc;\">". $email ."</td>

        <td style=\"padding:1rem;
        text-align: left;
        border: 1px solid #ccc;\">". $address ."</td>
      </tr>
    </tbody>
  </table>
</div>
</body>
</html>";


    if (empty($name) || empty($number) || empty($email) || empty($address))
    {
        header("Location:/?message=Register_fields_empty");
        exit();
    } 
    else
    {
        if (!preg_match("/^[a-zA-z\s]*$/", $name))
        {
            header("Location:/?message=invalid_characters");
            exit();
        }  
          else
            {
                $mail->isHTML(true);
                $mail->Subject ='Registration email';
                $mail->Body =$html;
                $mail->send();
               
                $mail->smtpClose(); //not vary much required but it is good to have it if you donot add this then also you do not get any errors also ... phpmailer automatocally closes SMTP connections
        
                header("Location:/?message=email_registered");
                exit();

                
                
            }
    }

     
}

catch (Exception $e) {
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; //uncomment this for full debugg info
    header("Location:/?message=email_not_registered");
}