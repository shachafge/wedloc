<?php

require_once('init.php');

class Session{
    private $signed_in;
    private $user_email;



    public function __construct(){
        //session_start();
        $this->check_login();
    }

    private function check_login(){
        if (isset($_SESSION['user_email'])){
            $this->user_email=$_SESSION['user_email'];
            $this->signed_in=true;
        }
        else{
            unset($this->user_email);
            $this->signed_in=false;
        }
    }

    public function login($user){
        if($user){
            $this->user_email=$user->get_email();
            $_SESSION['user_email']=$user->get_email();
            $this->signed_in=true;
        }
    }


    public function logout(){
        echo 'logout';
        unset($_SESSION['user_email']);
        unset($this->user_email);
        $this->signed_in=false;

    }

    public function get_signed_in(){
        return $this->signed_in;
    }
    public function get_user_email(){
        return $this->user_email;
    }

}
$session=new Session();



?>