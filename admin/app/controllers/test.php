<?php
class test extends Controller{
	static function test1(){
		$test = $this->model("ListnameModel");
		$this->view("test",[
			"test2"=>$test->showList(),
		]);
	}
}
?>