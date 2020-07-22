<?php
class App{
		// http://localhost/Demo_mvc/home/sayhi/1/2/3/4
		protected $controller = "SinhVien";
		protected $action = "SayHi";
		protected $params = [];

		function __construct(){
			// Array ( [0] => home [1] => sayhi [2] => 1 [3] => 2 [4] => 3 )
			$arr = $this->UrlProcess();

			// xu li Controller
			if (file_exists("./mvc/controllers/".$arr[0].".php")) {
				$this->controller = $arr[0];
				unset($arr[0]);
			}
			require_once "./mvc/controllers/".$this->controller.".php";
			$this->controller = new $this->controller;

			// Xu li Action
			if (isset($arr[1])) {
				if (method_exists($this->controller, $arr[1])) {
					$this->action = $arr[1];
				}
				unset($arr[1]);
			}

			// Xu li params
			$this->params = $arr?array_values($arr):[];
			call_user_func_array([$this->controller, $this->action], $this->params);
		}

		function UrlProcess(){
			// home/sayhi/1/2/3/4
			if ( isset($_GET["url"]) ) {
			 // cat theo dau / va loai bo khoang chan
			return	explode("/", filter_var(trim($_GET["url"], "/")));
			}
		}
}
?>