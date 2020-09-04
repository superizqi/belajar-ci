<?php namespace App\Controllers;

// use App\Models\KomikModels();

class Komik extends BaseController
{
	protected $komikModel;

	// public function __construct(){
	// 	$this->komikModel = new \App\Models\KomikModels();
	// }

	public function index()
	{	
		// $komik = $this->komikModel->findAll();

		$data = [
			'title' => 'Daftar Komik',
			'komik' => $this->komikModel->getKomik()
		];


		// cara manual konek db
		// $db = \Config\Database::connect();
		// $komik = $db->query("SELECT * FROM tb_komik");
		// // dd($komik);
		// foreach ($komik->getResultArray() as $row) {
		// 	d($row);
		// }
		// end cara manual konek db

		// $komikModel = new \App\Models\KomikModels();
		
		// dd($komik);

		// memanggil file welcome_message di folder views
		return view('komik/index',$data);
		// echo "hello world";
	}

	public function detail($slug){
		// echo $slug;
		// $komik = $this->komikModel->where(['slug' => $slug])->first();
		// $komik = $this->komikModel->getKomik($slug);
		$data = [
			'title' => 'Detail Komik',
			'komik' => $this->komikModel->getKomik($slug)

		];

		if (empty($data['komik'])) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException("Judul komik ".$slug."  tidak ditemukan");
		}

		return view('komik/detail', $data);
 

		// $data = ['data' => $komik];
		// dd($data);
		// $komik = $this->komikModel->findAll();
		

	}

	public function create(){
		$data = [
			'title' => 'Form Tambah Data Komik'];

		return view('komik/create',$data);
	}

	public function save(){
		// cara ambil data
		// dd($this->request->getVar());
		$slug = url_title($this->request->getVar('judul'),'-',true);

		$this->komikModel->save([
			'judul' => $this->request->getVar('judul'),
			'slug' => $slug,
			'penulis' => $this->request->getVar('penulis'),
			'penerbit' => $this->request->getVar('penerbit'),
			'sampul' => $this->request->getVar('sampul')
		]);

		// flashdata
		session()->setFlashdata('pesan','Data berhasil ditambahkan.');

		return redirect()->to('/komik');

	}

	public function delete($id){
		$this->komikModel->delete($id);
		// flashdata
		session()->setFlashdata('pesan','Data berhasil dihapus.');
		return redirect()->to('/komik');
	}

	public function edit($slug){
		$data = [
			'title' => 'Form Edit Data Komik',
			'komik' => $this->komikModel->getKomik($slug)
		];

		return view('komik/edit',$data);
	}

	public function update($id){
		// dd($this->request->getVar());

		$slug = url_title($this->request->getVar('judul'),'-',true);

		$this->komikModel->save([
			'id' => $id,
			'judul' => $this->request->getVar('judul'),
			'slug' => $slug,
			'penulis' => $this->request->getVar('penulis'),
			'penerbit' => $this->request->getVar('penerbit'),
			'sampul' => $this->request->getVar('sampul')
		]);

		// flashdata
		session()->setFlashdata('pesan','Data berhasil diubah.');

		return redirect()->to('/komik');

	}

	//--------------------------------------------------------------------

}
