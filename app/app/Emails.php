<?php

namespace App;

use Mail;

class Emails
{
    public static function email_registration_user($email, $data){
        Mail::send('emails.email_user',  $data, function($message) use ($email){
            $message->from('pollaworldcupcolombia@gmail.com', 'PollaWorldCupColombia.com Registro');
            $message->to($email)
                     ->subject('PollaWorldCupColombia.com Registro');
        });
    }

    public static function email_registration_admin( $data){
        Mail::send('emails.email_admin',  $data, function($message){
            $message->from('pollaworldcupcolombia@gmail.com', 'PollaWorldCupColombia.com Registro');
            $message->to('pollaworldcupcolombia@gmail.com')
                     ->subject('PollaWorldCupColombia.com Registro');
        });
    }

    public static function email_registration_user_approved($email, $data){
        Mail::send('emails.email_user_approved',  $data, function($message) use ($email){
            $message->from('pollaworldcupcolombia@gmail.com', 'PollaWorldCupColombia.com Polla Aceptada');
            $message->to($email)
                     ->subject('PollaWorldCupColombia.com Polla Aceptada');
        });
    }

    public static function email_forgot_password($email, $data){
        Mail::send('emails.email_user_forgot',  $data, function($message) use ($email){
            $message->from('pollaworldcupcolombia@gmail.com', 'PollaWorldCupColombia.com Recordar Contraseña');
            $message->to($email)
                     ->subject('PollaWorldCupColombia.com Recordar Contraseña');
        });
    }
}
