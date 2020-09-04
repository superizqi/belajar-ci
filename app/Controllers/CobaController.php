<?php namespace App\Controllers;
// nama class harus sesuai dengan nama file
class CobaController extends BaseController
{
	public function index()
	{
		// memanggil file welcome_message di folder views
		// return view('welcome_message');
		echo "Ini Controller Coba Method Index";
	}

	public function about($nama = "", $umur = "0")
	{
		// memanggil file welcome_message di folder views
		// return view('welcome_message');
		// echo "halo $this->nama";
		echo "halo $nama dari segmen url, saya berumur $umur";
	}

	// public function about()
	// {
	// 	// memanggil file welcome_message di folder views
	// 	// return view('welcome_message');
	// 	// echo "halo $this->nama";
	// 	echo "halo dari segmen url";
	// }


	//--------------------------------------------------------------------

}
