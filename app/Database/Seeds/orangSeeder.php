<?php 

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

class orangSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                // $data = [
                // 	[
                //         'nama' 		 => 'rizqi',
                //         'alamat'   	 => 'purwokerto',
                //         'created_at' => Time::now(),
                //         'updated_at' => Time::now()
                // 	],
                // 	[
                //         'nama' 		 => 'prima',
                //         'alamat'   	 => 'purwokerto',
                //         'created_at' => Time::now(),
                //         'updated_at' => Time::now()
                // 	],
                // 	[
                //         'nama' 		 => 'hariadhy',
                //         'alamat'   	 => 'purwokerto',
                //         'created_at' => Time::now(),
                //         'updated_at' => Time::now()
                // 	]

                // ];

        		// bisa sesuai negara

        		$faker = \Faker\Factory::create('id_ID');

        		// $data = [
        		// 	'nama' => $faker->name,
        		// 	'alamat' => $faker->address,
        		// 	'created_at' => Time::createFromTimestamp($faker->unixTime()),
          //           'updated_at' => Time::now()
        		// ];

                // ada 2 cara dibawah	
                // Simple Queries
                // values sesuai nama key di $data
                // $this->db->query("INSERT INTO orang (nama, alamat,created_at,updated_at) VALUES(:nama:, :alamat:,:created_at:,:updated_at:)",
                //         $data
                // );

				for($i = 0; $i < 100; $i++) {
	        		$data = [
	        			'nama' => $faker->name,
	        			'alamat' => $faker->address,
	        			'created_at' => Time::createFromTimestamp($faker->unixTime()),
	                    'updated_at' => Time::now()
	        		];
	        		$this->db->table('orang')->insert($data);
				} 

                // Using Query Builder
                // insert cuma satu data
                // $this->db->table('orang')->insert($data);
                // $this->db->table('orang')->insertBatch($data);

        }
}