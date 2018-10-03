<?php
App::uses('AppModel', 'Model');
class AlbumSong extends AnotherClass
{
		public $name = 'AlbumSong';
		public $useTable = 'album_song';
		public $hasMany = array(
	        'Album' => array(
	            'className' => 'Album',
	            'foreignKey' => 'album_id'
	        )
	    );
	
}