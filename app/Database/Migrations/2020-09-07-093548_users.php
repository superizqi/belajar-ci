<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
	public function up()
	{
		 $this->forge->addField([
                        'user_id'          => [
                                'type'           => 'INT',
                                'constraint'     => 11,
                                // kalo sign bisa negatif
                                'unsigned'       => true,
                                'auto_increment' => true,
                        ],
                        'username'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '64',
                                'null'           => false,
                        ],
                        'password' => [
                                'type'           => 'VARCHAR',
                                'null'           => false,
                                'constraint'     => '255',
                        ],
                        'created_at' => [
                                'type' => 'DATETIME',
                                'null' => TRUE
                        ],
                        'updated_at' => [
                                'type' => 'DATETIME',
                                'null' => TRUE
                        ],
                        'last_login' => [
                                'type' => 'DATETIME',
                                'null' => TRUE
                        ]
                ]);
                // kasih tau primarykeynya
                $this->forge->addKey('user_id', true);
                // kasih tau nama tabelnya
                $this->forge->createTable('users');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('orang');
	}
}
