<?php 
class Session  
{
    public function get($key){
        if(isset($_SESSION[$key])){
            return $_SESSION[$key];
        }else{
            return '';
        }
    }

   public function set($key,$value){
    $_SESSION[$key]=$value;}
    
   public function has($key){
            return isset($_SESSION[$key]);
        }
  
   public function destroy($key){
    unset($_SESSION);
    session_destroy();
   }

     public function remove($key){
         unset($_SESSION[$key]);
     }





}