<?php namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Home | Web Programming',
			'tes' => ['satu','dua','tiga']
		];
		// memanggil file welcome_message di folder views
		// return view('welcome_message');
		// echo "hello world";
		// return view('Pages/home');
		// cari file home di folder fiews
		// echo view('layout/header', $data);
		// echo view('Pages/home');
		// echo view('layout/footer');
		return view('pages/home',$data);
	}
	
	public function about()
	{	
		$data = [
			'title' => 'About | Web Programming'
		];
		return view('pages/about',$data);
		// echo view('layout/header', $data);
		// echo view('Pages/about');
		// echo view('layout/footer');
	}

	public function contact(){
		$data = [
			'title' => 'Contact Us',
			'alamat' => [
				[
				'tipe' => 'rumah',
				'kota' => 'bandung'
			 	],
			 	[
			 	'tipe' => 'kantor',
			 	'kota' => 'jakarta'
			 	]
			]
		];

		return view('pages/contact',$data);
		// echo "hello world";
	}

	//--------------------------------------------------------------------

}
