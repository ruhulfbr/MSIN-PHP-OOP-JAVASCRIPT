<?php

include "model/model.php";
	class Controller {
		public $model;
		function __construct(){
			$this->model = new Model();
		}
		public function home(){
			$result = $this->model->GetStudent();

			include "view/home.php";
		}
	}

?>