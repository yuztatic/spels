<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class OfficeSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
            'code' => 'RJ',
            'name' => 'RJ',
            'email' => 'rj@rj.com',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
            'code' => 'SP',
            'name' => 'SP',
            'email' => 'sp@sp.com',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
            'code' => 'MG',
            'name' => 'MG',
            'email' => 'mg@mg.com',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'code'=>'PGSO',
                'name'=>'PGSO',
                'email'=>'pgso@pgso.com',
                'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s'),

            ]


            ];


            $this->db->table('OfficeTable')->insertBatch($data);
    }
}
