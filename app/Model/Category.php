<?php
App::uses('AppModel', 'Model');
class Category extends AppModel {
    public $name = "Category";
    public $hasAndBelongsToMany = array(
        'Film' =>
            array(
                'className' => 'Song',
                'joinTable' => 'category_song',
                'foreignKey' => 'category_id',
                'associationForeignKey' => 'song_id',
            )
    );
    public $hasAndBelongsToMany = array(
        'Video' =>
            array(
                'className' => 'Video',
                'joinTable' => 'category_video',
                'foreignKey' => 'category_id',
                'associationForeignKey' => 'video_id',
            )
    );
    public $validate = array(
        'category_name' => array(
            'rule' => 'notBlank'
        )
    );
}