<?php


abstract class PagesController
{
	
	public function __construct(){
		
	}

	public function home()
	{
		echo json_encode(
		        array("message" => "This is the home page")
		    );

	}

	public abstract function listAll();
	public abstract function getOne();
	public abstract function search();
}