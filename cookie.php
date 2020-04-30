<?php
//  require 'register_page.php';
$cookie_name='store';
  $cookie_value=cookie_add('user',[
      'name'=>$username,
      'email'=>$email,
      'password'=>$password,
  ]);
setcookie( $cookie_name,$cookie_value,time()+(84600*30),'/');
function cookie_add($key,$value){
    $_COOKIE[$key]=$value;
}

redirectTo ('welcome.php');