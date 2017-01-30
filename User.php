<?php
namespace UserClass;
class User
{
    private $email;
    private $password;
    public $standard = array("DefaultUser","P1234");
    public function __construct()
    {
        $this->setEmail($this->standard[0]);
        $this->setPassword($this->standard[1]);
    }
    function changePassword($oldpassword,$newpassword)
    {
        if ($oldpassword == $this->password)
        {
            $this->password = $newpassword;
            return "Success";
        }
        else{
            return $php_errormsg;
        }
    }
    function setEmail($setEmail){
        $this->email = $setEmail;
    }
    function getEmail(){
        return $this->email;
    }
    function setPassword($pass){
        $this->password = $pass;
    }
    function getPassword(){
        return $this->password;
    }
}