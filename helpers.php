<?php
class Helpers{
    public function redirectTo(string $path){
        header("location: $path"); 
    }
}