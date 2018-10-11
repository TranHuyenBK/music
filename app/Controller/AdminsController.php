<?php

App::uses('AppController', 'Controller');

class AdminsController extends AppController{

    public function index(){

    }

    public function login(){

    }

    public function register(){
        
    }

    function sanitizeFormPassword($inputText){
		$inputText = strip_tags($inputText);
		return $inputText;
	}

	function sanitizeFormLastName($inputText){
        $inputText = strip_tags($inputText);
        $adLastName = $inputText[0];
        for ($i=0; $i<strlen($inputText); $i++) {
            if($inputText[$i] == " " && $inputText[$i+1] != " "){
                $adLastName = $adLastName . $inputText[$i+1];
            }
        }
        $adLastName = strtoupper(str_replace(" ", "", $adLastName));
        $chk_adName = $this->find('first', array(
            'fields' => array('admins.id'),
            'conditions' => array('admins.name' => $chk_adName['name'] . '%')
        ));
        if(!empty($chk_adName)) {
            $numAdd = $adLastName.count($chk_adName, 1);
            $adLastName = $adLastName . $numAdd;
        }
		return $adLastName;
    }

    function sanitizeFormFirstName($inputText){
		$inputText = strip_tags($inputText);
		$inputText = str_replace(" ", "", $inputText);
		$inputText = ucfirst(strtolower($inputText));
		return $inputText;
    }
    
    function sanitizeFormEmail($inputText){
		$inputText = strip_tags($inputText);
		$inputText = str_replace(" ", "", $inputText);
		return $inputText;
    }

    function isUniqueAdEmail($adEmail) {
        $adEmail = $this->find('first', array(
            'fields' => array('admins.id'),
            'conditions' => array('admins.email' => $adEmail['email'])
        ));
        if(!empty($adEmail))
			array_push($this->errorArray, "This email has already been in use!");
			return;
    }
    
	function confirmPassword($pw, $pw2){
		if($pw != $pw2){
			array_push($this->errorArray, "Your passwords don't match");
			return;
		}
		if(preg_match('/[^A-Za-z0-9]/', $pw)){
			array_push($this->errorArray, "Your password can only contain numbers and letters");
			return;
        }
        if(preg_match('/([a-zA-Z0-9])+([0-9]{1,})+([a-zA-Z0-9])+([A-Z]{1,}+([a-zA-Z0-9]))/i', $pw)){
			array_push($this->errorArray, "Your password must be included at least one upper character and one number");
			return;
        }
		if(strlen($pw) > 30 || strlen($pw) < 5){
			array_push($this->errorArray, "Your password must be between 5 and 30 charaters");
			return;
		}
	}
    
    public function dashboard(){

    }

    public function users(){

    }

    public function pictures(){

    }

    public function tags(){

    }

    public function reports(){

    }

    public function account(){

    }

}

?>