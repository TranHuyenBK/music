<?php
	class VideosController extends AppController{
		public $name = 'Videos';
		public $uses = array('Video');


		public function video(){
			$this->layout = 'master';
			$video = $this->Video->find('all');
			$this->set('videos', $video);
		}

		public function playlist_video(){
			$this->layout = 'master';
			$video = $this->Video->find('all');
			$this->set('videos', $video);
		}

		public function detail_video(){
			$this->layout = 'detail';
		}
	}