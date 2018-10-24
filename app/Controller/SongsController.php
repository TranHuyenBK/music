<?php
	class SongsController extends AppController{
		public $name = 'Songs';
		public $helpers = array('Form', 'Html');
		public $helpers = array('Form', 'Html', 'Paginator');
		public $uses = array('Song');

		public function playlist_song(){
			$this->layout = 'master';
			$tracks = $this->Song->find('all');
			$this->set('tracks', $tracks);
		}

		public function detail_song(){
			$this->layout = 'master';
		}

	}