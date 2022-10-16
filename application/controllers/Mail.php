<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mail extends CI_Controller {


    public function __construct() {
        parent::__construct();
    }

    public function _remap($method, $param = array()) {
        switch ($method) {
            case "sendmail":
                $this->sendmail();
                break;
            default :
                $this->sendmail();
                break;
        }
    }
   public function sendmail() {
       try {
            $to_mail_id = "xxxx@gmail.com";// to mail id
            $subject = "this is sample mail's subject";// mail subject
            $body = "this is sample mail's body";// mail body
            $mail_server = "mail.xxxx.xxxx";// mail server
            $mail_server_port = "587";// mail server port no
            $mail_server_user_name = "xxxx";// mail server username
            $mail_server_password = "xxxx";// mail server password
            $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => $mail_server,
                'smtp_port' => $mail_server_port,
                'smtp_user' => $mail_server_user_name,
                'smtp_pass' => $mail_server_password,
                'mailtype' => 'html',
                'charset' => 'iso-8859-1',
                'wordwrap' => TRUE
            );
            $this->load->library('email');
            $this->email->initialize($config);
            $this->email->set_newline("\r\n");
            $this->email->from($mail_server_user_name);
            $this->email->set_newline("\r\n");
            $this->email->to($to_mail_id);
            $this->email->subject($subject);
            $this->email->message($body);
            if($this->email->send()){
                echo "Mail successfully sent";
            }else{
                echo "Mail not sent";
            }
       } catch (Exception $exc) {
           echo $exc->getTraceAsString();
       }
    }
}
?>
