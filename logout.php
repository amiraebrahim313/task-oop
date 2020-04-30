<?php
class Logout 
{
    $sess=new Session();
    $help=new Helpers();
    $sess->remove('user');
    $help->redirectTo('Index.php');
}