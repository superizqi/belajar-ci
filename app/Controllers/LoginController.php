<?php namespace App\Controllers;

class LoginController extends BaseController
{
	public function login($id = "empty", $password = "empty")
	{
		// memanggil file welcome_message di folder views
		$data = [
			'id' => $id,
			'password' => $password

		];
		return view('Pages/login',$data);
		// echo "hello world";
	}

	public function index()
	{
		// memanggil file welcome_message di folder views
		// return view('welcome_message');
		echo "hello world";
	}


	//--------------------------------------------------------------------

}
