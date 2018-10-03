<?php
App::uses('AppModel', 'Model');
class Video extends AppModel {
    public $name = "Video";
    public $hasAndBelongsToMany = array(
        'Category' =>
            array(
                'className' => 'Category',
                'joinTable' => 'category_video',
                'foreignKey' => 'video_id',
                'associationForeignKey' => 'category_id',
                'with' => 'CategoryVideo'
            ),
    );
}