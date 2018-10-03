<?php
App::uses('AppModel', 'Model');
class CategorySong extends AppModel {
	public $name = 'CategorySong';
	public $useTable = 'category_song';
	public $hasMany = array(
        'Song' => array(
            'className' => 'Song',
            'foreignKey' => 'song_id'
        )
    );
}