<?php 

class Validation {

    public static function validateName($name) {
      if(!preg_match('/[A-Z][a-z]* [A-Z][a-z]*/', $name)):
        return true;
      else:
        return false; 
      endif;
    }

    public static function validateEmail($email) {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
            return true;
          else:
            return false; 
          endif;
    }

}