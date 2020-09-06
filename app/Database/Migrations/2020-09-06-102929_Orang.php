<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Orang extends Migration
{
	public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'INT',
                                'constraint'     => 11,
                                // kalo sign bisa negatif
                                'unsigned'       => true,
                                'auto_increment' => true,
                        ],
                        'nama'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '255',
                        ],
                        'alamat' => [
                                'type'           => 'VARCHAR',
                                // 'null'           => true,
                                'constraint'     => '255',
                        ],
                        'created_at' => [
                                'type' => 'DATETIME',
                                'null' => TRUE
                        ],
                        'updated_at' => [
                                'type' => 'DATETIME',
                                'null' => TRUE
                        ]
                ]);
                // kasih tau primarykeynya
                $this->forge->addKey('id', true);
                // kasih tau nama tabelnya
                $this->forge->createTable('orang');
        }

        public function down()
        {
                $this->forge->dropTable('orang');
        }

        // faker bisa generate otomatis
}
