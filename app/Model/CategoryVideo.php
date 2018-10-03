<?php
App::uses('AppModel', 'Model');
class CategoryVideo extends AppModel {
	public $name = 'CategoryVideo';
	public $useTable = 'category_video';
	public $hasMany = array(
        'Video' => array(
            'className' => 'Video',
            'foreignKey' => 'video_id'
        )
    );
}