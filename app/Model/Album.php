<?php 
	App::uses('AppModel', 'Model');
	class Album extends AppModel {
		public $name = "Album";
	    // public $hasAndBelongsToMany = array(
	    //     'Album' =>
	    //         array(
	    //             'className' => 'Album',
	    //             'joinTable' => 'album_song',
	    //             'foreignKey' => 'album_id',
	    //             'associationForeignKey' => 'song_id',
	    //         )
	    // );
	    // public $hasAndBelongsToMany = array(
	    //     'Album' =>
	    //         array(
	    //             'className' => 'Album',
	    //             'joinTable' => 'album_video',
	    //             'foreignKey' => 'album_id',
	    //             'associationForeignKey' => 'video_id',
	    //         )
	    // );
	    public $validate = array(
	        'category_name' => array(
	            'rule' => 'notBlank'
	        )
	    );

	}