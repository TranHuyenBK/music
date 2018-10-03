<?php
App::uses('AppModel', 'Model');
class AlbumVideo extends AnotherClass
{
		public $name = 'AlbumVideo';
		public $useTable = 'album_video';
		public $hasMany = array(
	        'Album' => array(
	            'className' => 'Album',
	            'foreignKey' => 'album_id'
	        )
	    );
	
}