<?php
//ham trung giang noi testmodel.php voi controller/home.php
class controller{
	protected $load = array();
	public function __construct(){
		$this->load = new Load();
	}
	public function model($model)
	{
		require_once "./app/models/".$model.".php";
		return new $model;
	}
	public function view($view, $data=[]){
		require_once "./app/views/".$view.".php";
	}
}
?>