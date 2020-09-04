<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		// memanggil file welcome_message di folder views
		return view('welcome_message');
		// echo "hello world";
	}

	public function coba()
	{
		// memanggil file welcome_message di folder views
		// return view('welcome_message');
		echo "hello world";
	}


	//--------------------------------------------------------------------

}
