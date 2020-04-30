<?php

class Register   {
    public function render(){
        $help=new Helpers();
        $help->redirectTO('register.php');
    }
    public function submit(){
        $sess=new Session();
        $form=new FormHandler();
        $sess->remove();
$username=$form->post('name'); 
$email=$form->post('email');
$password=$form->post('password');
$confirm_password=$form->post('confirm_password');
$checkbox=$form->post('checkbox');
if(!$username){
  
   $form->setError('name','name is required');
    
}
if (!$email){
   $form->setError('email','email is required');
}
if (!$password){
    $form->setError('password','password is required');
} 
$length=strlen($password);
if($length<8){
    $form->setError('password','minimum password is 8 char');
}
if ($confirm_password!= $password){
    $form->setError('confirm_password','confirm_password didnt match password');

}
if(!$confirm_password){
   $form->setError('confirm_password','confirm_password is required');
}
    

if(hasError()){
    $helps=new Helpers();
    $helps->redirectTO('register.php');
}elseif($checkbox){
    $help2=new Helpers();
    $help2->redirectTO('cookie.php');
        // require 'cookie.php';
    
}else {
  
    $sess->add('user',[
        'name'=>$username,
        'email'=>$email,
        'password'=>$password,

    ]);
     $help=new Helpers();
    $help->redirectTO('index.php');
}
    }}