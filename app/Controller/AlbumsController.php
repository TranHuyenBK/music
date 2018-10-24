<?php
	class AlbumsController extends AppController{
		public $name = 'Albums';
		// public $helpers = array('Form', 'Html');
		// public $helpers = array('Form', 'Html', 'Paginator');
		public $uses = array('Album');
		
		public function album(){
			$this->layout = 'master';
		}

	}