<?php namespace App\Controllers;
// nama class harus sesuai dengan nama file
class OrangController extends BaseController
{
	public function index()
	{
		// memanggil file welcome_message di folder views
		// return view('welcome_message');
		// echo "Ini Controller Orang";
		$pager = \Config\Services::pager();
        $model = new \App\Models\OrangModels();

		$data = [
			'title' => 'View Orang',
			'users' => $model->paginate(10,'id_pagination'),
			'pager' => $model->pager
			// 'komik' => $this->OrangModels->getOrang(),
			// 'users' => $userModel


			// 'komik' => $this->komikModel->getKomik()
		];
		// dd($data);
		return view('view_orang', $data);
	}

	// public function about($nama = "", $umur = "0")
	// {
	// 	// memanggil file welcome_message di folder views
	// 	// return view('welcome_message');
	// 	// echo "halo $this->nama";
	// 	echo "halo $nama dari segmen url, saya berumur $umur";
	// }

	// public function about()
	// {
	// 	// memanggil file welcome_message di folder views
	// 	// return view('welcome_message');
	// 	// echo "halo $this->nama";
	// 	echo "halo dari segmen url";
	// }


	//--------------------------------------------------------------------

}
