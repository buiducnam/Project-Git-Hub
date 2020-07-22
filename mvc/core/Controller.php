<?php 
class Controller{

	//Lop dung chung de goi model
	public function model($model){
		require_once "./mvc/models/".$model.".php";
		return new $model;
	}

	//Lop dung chung de goi View
	public function view($view, $data=[]){
		require_once "./mvc/views/".$view.".php";
	}
}
 ?>
