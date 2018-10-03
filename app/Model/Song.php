<?php
App::uses('AppModel', 'Model');
class Song extends AppModel {
    public $name = "Song";
    public $hasAndBelongsToMany = array(
        'Category' =>
            array(
                'className' => 'Category',
                'joinTable' => 'category_song',
                'foreignKey' => 'song_id',
                'associationForeignKey' => 'category_id',
                'with' => 'CategorySong'
            ),
    );
    public $validate = array(
        'song_name' => array(
            'rule' => 'notBlank'
        )
    );
}

