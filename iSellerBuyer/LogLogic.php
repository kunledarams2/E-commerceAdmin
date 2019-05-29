

<?php

include("Mysqlcongf.php");



class loginUser{

    var $username;
    var $password;

    function __constructor($usernamr, $password){
        $this->username=$username;
        $this->password=$password;
    }

    function checkUser(){

    }
}

if($_REQUEST["LOG IN"]){

    $loginDetails=new loginUser($_POST["username"], $_POST["password"]);
    $loginDetails->checkUser();
}
?>