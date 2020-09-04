<?php namespace App\Models;

use CodeIgniter\Model;

class KomikModels extends Model
{
	protected $table      = 'tb_komik';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // ini kasih tau yang bisa diisi oleh kita
    protected $allowedFields = ['judul','slug','penulis','penerbit','sampul'];

    public function getKomik($slug = false){
    	if($slug == false){
    		return $this->findAll();
    	}

    	return $this->where(['slug' => $slug])->first();
    }



    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    // protected $allowedFields = ['name', 'email'];

    // protected $useTimestamps = true;
    
    // protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
}