<?php
    // include phpmailer class
    require_once 'class.phpmailer.php';
    require_once 'class.smtp.php';

    class SendMail {

        public function send($payload, $type) {
            // creates object
            $mail = new PHPMailer(true);

            $subjects = [
                'new_order' => 'Order Successful',
                'order_review' => 'Order Review'
            ];
            $messages = [
                'new_order' => "<div style='padding:25px 16px;background-color:#121212;color:white;line-height:1.5;'>
                        <h2>Dear <strong>{$payload->first_name}!</strong></h2>

                        <h1> &#128640; Order Placement</h1>
                        
                        <p style='font-size:16px;padding:20px 20px;margin:10px auto 20px auto;background-color:#222222;border-radius:10px;line-height:1.7;'>
                            We are glad to inform you that your order has been received successfully.
                            <br/>
                            Our designers will spring into action immediately in order to ensure you get satisfaction and value for your money.
                        </p>
                        
                        <a style='color:white;font-size:16px;padding:12px 12px;margin:10px auto 20px auto;border-radius:10px;display:inline-block;width:auto;background-color:#000000;' href='https://logosocket.com/dashboard/orders'>View order &#8594; </a>
                        
                        <span style='font-size:15px;color:#606060;display:block;'>
                            Not sure why you are receiving this email? Please let us know @ <a style='color:white' href='mailto:help@logosocket.com'>help@logosocket.com</a>.
                        </span>
                        
                        <strong style='font-size:14px;margin:20px auto;display:block;'>
                            Do not hestate to <a style='color:#606060' href='mailto:support@logosocket.com'>contact support</a> if you need assistance.
                        </strong>
                        
                        <strong style='color:#ffffff;font-size:17px;margin:20px auto;display:block;'>
                            Best regards,<br/>Logosocket
                        </strong>
                    </div>"
                ,
            ];

            try	{
                $mail->IsSMTP();
                $mail->isHTML(true);
                $mail->SMTPDebug  = 0;
                $mail->SMTPAuth   = true;
                $mail->SMTPSecure = "ssl";
                $mail->Host       = "mail.logosocket.com";
                $mail->Username   ="order@logosocket.com";
                $mail->Password   ="host@_#l_sock";
                $mail->Port       = 465;
                $mail->AddAddress($payload->email);
                $mail->SetFrom("order@logosocket.com", "Logosocket");
                $mail->AddReplyTo("order@logosocket.com", "Logosocket");
                $mail->Subject    = $subjects[$type];
                $mail->Body 	  = $messages[$type];
                $mail->AltBody    = $messages[$type];

                if ($mail->Send()) {
                    return true;
                } else {
                    return false;
                }
            } catch(phpmailerException $ex) {                
                return $ex;
            }
        }
	}
	
?>