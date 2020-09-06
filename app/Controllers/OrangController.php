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

        // d($this->request->getVar('keyword'));

        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
        	$oro = $model->search($keyword);
        }else{
        	$oro = $model;
        }




        $currentPage = $this->request->getVar('page_orang') ? $this->request->getVar('page_orang') : 1;
        $perHalaman = 5;
		$data = [
			'title' => 'Daftar Orang',
			// 'users' => $model->paginate(6,'id_pagination'),
			'users' => $oro->paginate($perHalaman,'orang'),
			'pager' => $model->pager,
			'current_page' => $currentPage,
			'per_halaman' => $perHalaman
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
