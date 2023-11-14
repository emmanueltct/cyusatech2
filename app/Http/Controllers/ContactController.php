<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\contactMail;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Mail;

class ContactController extends Controller
{
    //
    public function sendEmail(request $request){
    /*
        $detail=[
            "name"=>$request->firstname." ".$request->lastname,
            "telephone"=>$request->phone,
            "email"=>$request->email,
            "subject"=>$request->subject,
            "message"=>$request->message
        ];





        Mail::to('emmanuelmunezero@gmail.com')->send(new contactMail($detail));
        return back()->with('message_sent','your message has been sent successfully and our Team will contact you back on provided email'); 
  

*/

     require base_path("vendor/autoload.php");
        $mail = new PHPMailer(true);     // Passing `true` enables exceptions

        try {

            // Email server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';             //  smtp host
            $mail->SMTPAuth = true;
            $mail->Username = 'emmanuelmunezero@gmail.com';   //  sender username
            $mail->Password = 'TCTita2015';       // sender password
            $mail->SMTPSecure = 'tls';                  // encryption - ssl/tls
            $mail->Port = 587;                          // port - 587/465
            $mail->setFrom($request->email, $request->firstname." ".$request->lastname);
            $mail->addAddress('cypriengp@gmail.com');
            

            $mail->addReplyTo($request->email, 'CYUSA TECHNOLOGY');

        /*
            if(isset($_FILES['emailAttachments'])) {
                for ($i=0; $i < count($_FILES['emailAttachments']['tmp_name']); $i++) {
                    $mail->addAttachment($_FILES['emailAttachments']['tmp_name'][$i], $_FILES['emailAttachments']['name'][$i]);
                }
            }
        */

            $mail->isHTML(true);                // Set email content format to HTML

            $mail->Subject = $request->subject;
            $mail->Body    = $request->message;

            // $mail->AltBody = plain text version of email body;

            if( !$mail->send() ) {
                return back()->with("message_sent", "Email not sent.")->withErrors($mail->ErrorInfo);
            }
            
            else {
                return back()->with("message_sent", "Email has been sent.");
            }

        } catch (Exception $e) {
             return back()->with('message_sent','Message could not be sent.'.$e);
        }

}

  }