<?php namespace App\Controllers;
// nama class harus sesuai dengan nama file
class UsersController extends BaseController
{	

	public function index()
	{	
		$data = [
			'title' => 'User Login'
		];

		return view('Pages/login', $data);
	}

	public function login(){
		$username = $this->request->getVar('username');
		$password = $this->request->getVar('password');

		// cari data user
		$dataUser = $this->UserModels->getUser($username);
		if ($dataUser) {
			echo "data ada";
			// ambil passwordnya lalu bandingkan
			if ($password == $dataUser['password']) {
				echo "password benar";
				session()->setFlashdata('pesan','Sukses');
				return redirect()->to('/UsersController');
			}else{
				echo "password salah";
				// flashdata
				session()->setFlashdata('pesan','Password salah');
				return redirect()->to('/UsersController');
			}

		}else{
			echo "data tdk ada";
			session()->setFlashdata('pesan','Data tdk ada');
			return redirect()->to('/login');
		}

		
	}



	//--------------------------------------------------------------------

}
