<?php

namespace Acme\Controller;

use Acme\Validation\Validator as validator;
//use Acme\controller\BaseController  as BaseController;

class RegisterController extends  BaseController
{

    public function  getShowRegisterPage(){

   //echo  $this->twig->render('register.html');
        echo $this->blade->render("register");
}

   public function   postShowRegisterPage(){
       $validator_data = [
           "first_name" => "min:3",
           "last_name" => "min:3",
           "email" => "email",
           "vemail" => "equalto:email",
           "password" => "password:3",
           "vpassword" => "equalto:password"
       ];

       $validator = new validator();
       $error = $validator->isValid($validator_data);
      // echo $this->twig->render("register.html", array( "errors" => $error  ) );
       echo $this->blade->render("register");


   }
    public function  getShowLoginPage(){

        echo $this->blade->render("login");
    }

}