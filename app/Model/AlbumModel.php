<?php 
	App::uses('AppModel', 'Model');
	class Album extends AppModel {
		public $name = "Album";
	    public $hasAndBelongsToMany = array(
	        'Album' =>
	            array(
	                'className' => 'Album',
	                'joinTable' => 'album_song',
	                'foreignKey' => 'category_id',
	                'associationForeignKey' => 'film_id',
	            )
	    );
	    public $validate = array(
	        'category_name' => array(
	            'rule' => 'notBlank'
	        )
	    );

	}