<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

class PagesController
{

	public function home()
	{
		echo "Welcome to the Home Page!";

	}

}