<?php
	class FollowsController extends AppController{
		// public $uses = array('Feed','Tag','Tagconnect','User','Follow','Comment');
		// public function notification(){
		// 	$data = array();
		// 	$this->layout=null;
		// 	$notification_follow = $this->Follow->find('all', array(
		// 		'conditions' => array(
		// 		'Follow.id_follow' => $this->Session->read('id_user')
		// 	)));
		// 	$myFeed = $this->findMyFeed();
			
		// 	for($i=0;$i<count($myFeed);$i++){
		// 		$notification_comments = $this->Comment->find('all', array(
		// 			'conditions' => array(
		// 			'Comment.id_feed' => $myFeed[$i]['Feed']['id']
		// 		)));
		// 		for ($j=0; $j <count($notification_comments) ; $j++) { 
		// 			array_push($data, $notification_comments [$j]);
		// 		}
				
		// 	}
		// 	$data1 = array();
		// 	for($i=0;$i<count($notification_follow);$i++){
		// 		array_push($data1, $this->findUser($notification_follow[$i]['Follow']['id_user']));

		// 	}
		// 	for ($i=0; $i < count($data1); $i++) { 
		// 		array_push($data, $data1[$i][0]);
		// 	}

		// 	if($notification_follow){
		// 		$this->set('apis',$data);
		// 		$this->render('json');
		// 		// $this->view = '/Layouts/feed';
		// 		// $this->set('apis',$data);
		// 	}else{
		// 		return false;
		// 	}
		// }
		// function findUser($id_user){
		// 	$this->layout = null;
		// 	$findUser = $this->User->find('all', array(
		// 		'conditions' => array(
		// 		'User.id' => $id_user
		// 	)));
		// 	return $findUser;
		// }
		// function findMyFeed(){
		// 	$myFeed = $this->Feed->find('all', array(
		// 		'conditions' => array(
		// 		'Feed.id_user'=>$this->Session->read('id_user')
		// 	)));
		// 	if($myFeed){
		// 		return $myFeed;
		// 	}else{
		// 		return false;
		// 	}
		// }
		// function hasReadNoti(){
		// 	$hasRead = $this->Follow->find('all', array(
		// 		'conditions' => array(
		// 		'Follow.id_follow' => $this->Session->read('id_user'),
		// 		'Follow.status' => 0
		// 	)));
		// 	for($i=0;$i<count($hasRead);$i++){
		// 		$uploadData = new stdClass();
		// 		$uploadData->id = $hasRead[$i]['Follow']['id'];
		// 		$uploadData->status= 1;
		// 		$this->Follow->save($uploadData);
		// 	}
		// }
	}
?>