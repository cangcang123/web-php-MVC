<?php
class homelistpro extends Controller{
	static function showlist(){
		$list = $this->model("ListproModel");
		$this->view("homelistpro",[
			"show"=>$list->showList(),
		]);
	}
} 
?>