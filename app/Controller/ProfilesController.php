<?php
class ProfilesController extends AppController{
	public $uses = array('Feed','Tag','Tagconnect','User','Follow','Notification','Pin','Hashtag','Comment');
	public function profile(){
		//if($this->isExist($id_user)){
			$this->layout = "feed";	
		// 	$this->set('countFeed', $this->countFeed($id_user));
		// 	$this->set('fullName', $this->getFullName($id_user));
		// 	$this->set('userName',$this->getUserName($id_user));
		// 	$this->set('avatar', $this->getAvatar($id_user));
		// 	$this->set('feeds',$this->loadFeed($id_user));
		// 	$this->set('isMe', $this->isMe($id_user));
		// 	$this->set('isFollow',$this->isFollow($id_user));
		// 	$this->set('bio',$this->getBio($id_user));
		// 	$this->set('id_user', $id_user);
		// 	$this->set('countFollower',$this->countFollower($id_user));
		// 	$this->set('countFollowing',$this->countFollowing($id_user));
		// 	$this->set('pinFeeds',$this->loadPinFeed());
		// 	$username = $this->getUserName($id_user);
		// 	if($this->loadTagedFeed($username)){
		// 		$this->set('tagedFeeds',$this->loadTagedFeed($username));
		// 	}
		// }else{
		// 	$this->redirect(array(
		// 	'controller'=> 'Profiles',
		// 	'action' => 'profile/'.$this->Session->read('id_user')
		// 	));
		// }

	}
	public function logout(){
	}

	public function send_edit_profile(){
		$this->layout= NULL;
		$uploadData = new stdClass();
		$uploadData->id = $this->Session->read('id_user');
		$uploadData->firstName = $this->request->data['firstName'];
		$uploadData->lastName = $this->request->data['lastName'];
		$uploadData->address = $this->request->data['address'];
		$uploadData->Bio = $this->request->data['Bio'];
		$uploadData->phone_number = $this->request->data['phone_number'];
		if($this->request->data['flag'] == 1){
			move_uploaded_file($_FILES['upload_input']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/cakephp/app/webroot/img/avatarUsers/' .$_FILES['upload_input']['name']);
			$uploadData->profilePic = $_FILES['upload_input']['name'];

			}else{
			}
		$this->User->save($uploadData);

		$data = $this->User->find('first', array(
				'conditions' => array(
				'User.id' => $this->Session->read('id_user'),
			)));

				$this->Session->write('profilePic',$data['User']['profilePic']);
				$this->Session->write('email',$data['User']['email']);
				$this->Session->write('username',$data['User']['username']);
				$this->Session->write('firstName',$data['User']['firstName']);
				$this->Session->write('lastName',$data['User']['lastName']);
				$this->Session->write('id_user',$data['User']['id']);
				$this->Session->write('intro',$data['User']['Bio']);
				$this->Session->write('address',$data['User']['address']);
				$this->Session->write('phone_number',$data['User']['phone_number']);
				$this->Session->write('gender',$data['User']['gender']);
		$this->set('apis',$data);
		$this->render('json');   
	}
	public function edit_profile(){
		$this->layout = "feed";
	}
	public function check_old_pass(){
		$this->layout = NULL;
		$data = $this->User->find("first", array('conditions'=>array('User.id' => $this->Session->read('id_user'))));
			if(md5($this->request->data['old_pass']) == $data['User']['password']){
				$data1 = "Old_Pass_True";
			} else {
				$data1 = "Old_Pass_False";
			}
		$this->set('apis',$data1);  
		$this->render('json');
	}

	public function change_pass(){
		$this->layout = NULL;
		$uploadData = new stdClass();
		$uploadData->id = $this->Session->read('id_user');
		$uploadData->password = md5($this->request->data['new_pass']);

		$this->User->save($uploadData);
		$this->Session->destroy();
		
		return $this->redirect(array(
			'controller'=> 'Users',
			'action' => 'login'));
	}
	function loadTagedFeed($username){
		$tagedFeed = $this->Hashtag->find('all', array(
				'conditions' => array(
				'Hashtag.username' => $username
			),'recursive' => 3));
		for($i=0;$i<count($tagedFeed);$i++){
			if($this->countComments($tagedFeed[$i]['Hashtag']['id_feed'])){
				array_push($tagedFeed[$i],$this->countComments($tagedFeed[$i]['Hashtag']['id_feed']) );
			}
		}
		return $tagedFeed;
	}
	function isFollow($id_user){
		$isFollow = $this->Follow->find('all', array(
				'conditions' => array(
				'Follow.id_user' => $this->Session->read('id_user'),
				'Follow.id_follow' => $id_user
			)));
		if($isFollow){
			return true;
		}else{
			return false;
		}
	}
	public function follow($id_user){
		if($this->isConnectionUserAndUser($id_user)){
			$follow = $this->Follow->find('all', array(
				'conditions' => array(
				'Follow.id_user' => $this->Session->read('id_user'),
				'Follow.id_follow' => $id_user
			)));
			$this->Follow->delete($follow[0]['Follow']['id']);
			$notification = $this->Notification->find('all', array(
				'conditions' => array(
				'Notification.id_user' => $this->Session->read('id_user'),
				'Notification.id_follow' => $id_user
			)));
			$this->Notification->delete($notification[0]['Notification']['id']);
		}else{
			$this->Follow->create();
			$this->Notification->create();
			$uploadData2 = new stdClass();
			$uploadData = new stdClass();
			$uploadData->id_user = $this->Session->read('id_user');
			$uploadData->id_follow = $id_user;
			$uploadData2->id_user = $this->Session->read('id_user');
			$uploadData2->id_follow = $id_user;
			$uploadData2->type = 1;
			$this->Notification->save($uploadData2);
			$this->Follow->save($uploadData);
		}
	}
	function loadPinFeed(){
		$pinFeed = $this->Pin->find('all', array('conditions'=>array('Pin.id_user'=>$this->Session->read('id_user')),'recursive' => 2));
		for($i=0;$i<count($pinFeed);$i++){
			if($this->countComments($pinFeed[$i]['Pin']['id_feed'])){
				array_push($pinFeed[$i],$this->countComments($pinFeed[$i]['Pin']['id_feed']) );
			}
		}
		return $pinFeed;
	}
	function isMe($id_user){
		if ($id_user == $this->Session->read('id_user')){
			return true;
		}else{
			return false;
		}
	}
	function getAvatar($id_user){
		$avatar = $this->User->find('all', array('conditions'=>array('User.id'=>$id_user)));
		$avatar = $avatar[0]['User']['profilePic'];
		return $avatar;
	}
	function countComments($id_feed){
		$countComments = $this->Comment->find('count', array('conditions'=>array('Comment.id_feed'=>$id_feed)));
		return $countComments;
	}
	function getBio($id_user){
		$bio = $this->User->find('all', array('conditions'=>array('User.id'=>$id_user)));
		$bio = $bio[0]['User']['Bio'];
		return $bio;
	}
	function loadFeed($id_user){
		$feeds = $this->Feed->find('all', array(
			'conditions'=>array('Feed.id_user'=>$id_user),
			//'order' => ('Feed.id ASC'),
			'recursive' => 1
		));
		for($i=0;$i<count($feeds);$i++){
			if($this->countComments($feeds[$i]['Feed']['id'])){
				array_push($feeds[$i],$this->countComments($feeds[$i]['Feed']['id']) );
			}
		}
		return $feeds;
	}
	function countFollower($id_user){
		$countFollower = $this->Follow->find('count', array('conditions'=>array('Follow.id_follow'=>$id_user)));
		return $countFollower;
	}
	function countFollowing($id_user){
		$countFollowing = $this->Follow->find('count', array('conditions'=>array('Follow.id_user'=>$id_user)));
		return $countFollowing;
	}
	function countFeed($id_user){
		$countFeed = $this->Feed->find('count', array('conditions'=>array('Feed.id_user'=>$id_user)));
		return $countFeed;
	}
	function getFullName($id_user){
		$fullName = $this->User->find('all', array('conditions'=>array('User.id'=>$id_user)));
		$fullName = $fullName[0]['User']['firstName'].' '.$fullName[0]['User']['lastName'];
		return $fullName;
	}
	function getUserName($id_user){
		$userName = $this->User->find('all', array('conditions'=>array('User.id'=>$id_user)));
		$userName = $userName[0]['User']['username'];
		return $userName;
	}
	function isExist($id_user){
		$isExist = $this->User->find('all', array('conditions'=>array('User.id'=>$id_user)));
		if($isExist){
			return true;
		}else{
			return false;
		}
	}
	function isConnectionUserAndUser($id_user){
		$check = $this->Follow->find('all', array(
			'conditions' => array(
			'Follow.id_user' => $this->Session->read('id_user'),
			'Follow.id_follow' => $id_user
		)));
		if($check){
			return true;
		}else{
			return false;
		}
	}
}
?>