<?php  
class UsersController extends AppController {

	public function index(){
		$this->layout = 'admin';
		echo "normal";
	}

	public function admin_index(){
		echo "admin";
	}
}
?>