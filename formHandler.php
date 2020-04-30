<?php
// page function
Class FormHandler extends Session {

    $sess=new Session();
    public function setError(string $name, string $errorMessage)
    {
        $formErrorsKey = 'form_errors'; 
        $errors =$sess->get($formErrorsKey); 
    
        if (!$errors) {
            $errors = [];
        }
    
        $errors[$name] = $message;
    
        $sess->add($formErrorsKey, $errors);
    }

    public function hasError( $name)
    {
        return $sess->has('form_errors')===true;
    }

    public function getError(string $key) 
    {
        $errors =$sess->get('form_errors');
        if (! $errors) return '';
    
        if (! isset($errors[$name])) {
            return '';
        } else {
            return $errors[$name];
        }
    }

    public function clearErrors()
    {
      $sess->remove('form_errors');
    }


    public function Post()
    {
        if(isset($_POST[$key])){
          
            return$_POST[$key];
        }
        return null;
        }


        function user($key)
{
    $user =$sess-> get('user');

    if (! $user) return '';

    if (! isset($user[$key])) return '';

    return $user[$key];
}
    }
