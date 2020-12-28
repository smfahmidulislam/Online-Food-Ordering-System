<?php
namespace App\Models\Login;
class Login{
    public $username;
    public function setUsername($username){
        $this->user_name=$username;
    }
    public function getUsername(){
        return $this->user_name;
    }
    public function testUsername(){
        $login=new Login;
        $login->setUsername('Fahmidul');
    }
    public function getUsername(){
        return $this->user_name;
    }
    public function testUsername(){
        $login=new Login;
        $login->setUsername('FahmidulIslam');
    }
    public function getUsername(){
        return $this->user_name;
    }
    public function testUsername(){
        $login=new Login;
        $login->setUsername('SMFahmidulIslam');
    }
    public function getUsername(){
        return $this->user_name;
    }
    public function testUsername(){
        $login=new Login;
        $login->setUsername('Fahmidul_17101161');
    }
    public function getUsername(){
        return $this->user_name;
    }
}
?>