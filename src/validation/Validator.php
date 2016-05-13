<?php namespace Acme\Validation;

use Respect\Validation\Validator as valid;

class Validator
{
    public  function isValid($validation_data){

        $error = [];

        foreach ($validation_data as $name => $value){

            if(isset($_REQUEST[$name])){
                $exploded = explode(":", $value);

                switch($exploded[0]){

                    case "min":
                            $min = $exploded[1];
                            if(valid::stringType()->notEmpty()->length($min)->validate($_REQUEST[$name]) == false){
                                $error[] = $name ." must be ". $min . " characters long";
                            }

                        break;
                    case "email":
                            if(valid::email()->notEmpty()->validate($_REQUEST[$name]) == false){
                                $error[] = " must be a valid email example@gmail.com";
                            }
                        break;
                    case "equalto":
                        $val = $exploded[1];
                        if(valid::notEmpty()->equals($_REQUEST[$name])->validate($_REQUEST[$exploded[1]]) == false){
                            $error[] = $val . "  does npt match"  ;
                        }
                        break;
                    case "password":
                        $min = $exploded[1];
                        if(valid::stringType()->notEmpty()->length($min)->validate($_REQUEST[$name]) == false){
                            $error[] = $name ." must be ". $min . " characters long";
                        }
                    default:
                        //nothing to setl'
                }
            }else{
                 $error[] = "no value entered";
            }
        }
        return $error;
    }
}
