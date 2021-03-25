<?php
class Load{
	public function __construct()
	{
		
	}
	public function view($view, $data=[])
	{
		include_once "./app/views/blocks/".$view.".php";
	}
}
?>