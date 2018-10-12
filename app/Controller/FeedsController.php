<?php
class FeedsController extends AppController{
	public $uses = array('Feed','Tag','Tagconnect','User_pic');
	public function index(){
		$this->layout = "feed";
	}
	public function home_content(){
		$this->layout = NULL;
	}
	public function image_detail($id_feed){
		
	}

	public function isLike($id_feed){
		
	}
	public function postFeed(){
	
	}
	public function findUserAndTag(){
		
	}

	function isConnectionUserAndFeed($id_feed){
		
	}
	function filter_hashtags($string) {


	}

	function checkTagExist($tag){
		
	}

	function findIdTag($tag){
	
	}
}
?>