<?php
namespace Framework\Modules\Mailer;

class Mailer
{

    static function sendAtMail($mailto, $mailfrom, $namefrom, $replyto, $subject, $body)
    {
        $headers = "From: =?utf-8?b?".base64_encode($namefrom)."?= <$mailfrom>\r\n";
        $headers .= "Reply-To: $replyto\r\n";
        $headers .= "Subject: =?utf-8?b?" . base64_encode($subject) . "?=\r\n";
        $headers .= "Date: " . date("r") . "\r\n";
        $headers .= "X-Mailer: zm php script\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "List-Unsubscribe: <https://www.makc.ru/services/unsubscribe/>\r\n";
        $headers .= "Content-Type: multipart/alternative;\r\n";
        $baseboundary = "------------" . strtoupper(md5(uniqid(rand(), true)));
        $headers .= "  boundary=\"$baseboundary\"\r\n";

        $message  =  "--$baseboundary\r\n";
        $message .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
        $message .= "--$baseboundary\r\n";
        $newboundary = "------------" . strtoupper(md5(uniqid(rand(), true)));
        $message .= "Content-Type: multipart/related;\r\n";
        $message .= "  boundary=\"$newboundary\"\r\n\r\n\r\n";
        $message .= "--$newboundary\r\n";
        $message .= "Content-Type: text/html; charset=utf-8\r\n";
        $message .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
        $message .= $body . "\r\n\r\n";

        $message.="--$newboundary--\r\n\r\n";
        $message.="--$baseboundary--\r\n";

        return mail($mailto, "=?utf-8?b?" . base64_encode($subject) . "?=", $message , $headers);
    }

    static function users(){
        return array(
//            'apetrunin@makc.ru',
//            'ELitvinova@makc.ru ',
//            'vkurochkin@makc.ru',
            'durosov@makc.ru',
        );
    }

}