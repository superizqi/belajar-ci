<?php namespace App\Models;

use CodeIgniter\Model;

class OrangModels extends Model
{
	protected $table      = 'orang';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // ini kasih tau yang bisa diisi oleh kita
    protected $allowedFields = ['nama','alamat'];

    // public function getKomik($slug = false){
    // 	if($slug == false){
    // 		return $this->findAll();
    // 	}

    // 	return $this->where(['slug' => $slug])->first();
    // }

    public function getOrang(){
            return $this->findAll();
    }


}