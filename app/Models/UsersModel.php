<?php namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
	protected $table      = 'users';
	// private   $_table = "users";
    protected $primaryKey = 'user_id';
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // ini kasih tau yang bisa diisi oleh kita
    protected $allowedFields = ['username','password','last_login'];

    public function getUser($username){
    	return $this->where(['username' => $username])->first();
    }

}


// public function doLogin(){
    //  $post = $this->input->post();

    //  // cari user
    //  $this->db->where('username', $post['username']);
    //  $user = $this->db->get($this->_table)->row();

    //  // jika user terdaftar
    //  if ($user) {
    //      // periksa password
    //      $isPasswordTrue = password_verify($post["password"], $user->password);

    //      if($isPasswordTrue){ 
    //             // login sukses yay!
    //             $this->session->set_userdata(['user_logged' => $user]);
    //             $this->_updateLastLogin($user->user_id);
    //             return true;
    //         }

    //  }

    //  // login gagal
    //  return false;
    // }

    // public function isNotLogin(){
    //     return $this->session->userdata('user_logged') === null;
    // }

    // private function _updateLastLogin($user_id){
    //     $sql = "UPDATE {$this->_table} SET last_login=now() WHERE user_id={$user_id}";
    //     $this->db->query($sql);
    // }

    // public function getOrang(){
    //         return $this->findAll();
    // }