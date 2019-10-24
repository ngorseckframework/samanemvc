<?php
namespace src\service\mail;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class SamaneMailing 
{
    public function sendMail($from, $companyName, $recipients = array(), $replyTo = null, $cc = null, $bcc = null,$attachments = null, $subject, $body)
    {
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;//2;                                       // Enable verbose debug output
            $mail->isSMTP();                                            // Set mailer to use SMTP
            $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'ngorseckjee@gmail.com';                     // SMTP username
            $mail->Password   = 'seckangor123';                               // SMTP password
            $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
            $mail->Port       = 465;                                    // TCP port to connect to

            /** 
             * Recipients
            */
            $mail->setFrom($from, $companyName);
            foreach ($recipients as $key => $recipient) 
            {
                $mail->addAddress($recipient);
            }
            
            if($replyTo != null)
            {
                $mail->addReplyTo($replyTo, 'Information');
            }

            if($cc != null)
            {
                if(is_array($cc) && count($cc) != 0)
                {
                    foreach ($cc as $key => $carboncopy) 
                    {
                        $mail->addCC($carboncopy);
                    }  
                }
                if(!is_array($cc)) 
                {
                    $mail->addCC($cc);
                }
            }

            if($bcc != null)
            {
                if(is_array($bcc) && count($bcc) != 0)
                {
                    foreach ($bcc as $key => $blindcarboncopy) 
                    {
                        $mail->addBCC($blindcarboncopy);
                    }
                }
                if(!is_array($bcc)) 
                {
                    $mail->addBCC($bcc);
                }
            }
            
            /**
             * Attachments
            */
            if($attachments != null)
            {
                if(is_array($attachments) && count($attachments) != 0)
                {
                    foreach ($attachments as $key => $attachment) 
                    {
                        $mail->addAttachment($attachment);
                    }
                }
                if(!is_array($attachments))
                {
                    $mail->addAttachment($attachments);
                }
            }
            
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $body;
            $mail->AltBody = 'Default text mail!';

            $result = $mail->send();
            
            return $result;
        } catch (Exception $e) {
            die("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
            return false;
        }
    }
}
?>