<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class OfficeTable extends Migration
{
    public function up()
    {
        $fields = [
            
        'name' => [
            'type' => 'VARCHAR',
            'constraint' => 255,
            'null' => false,
        ],
        'code' => [
            'type' => 'VARCHAR',
            'constraint' => 255,
            'null' => false,

        ],
        'email' => [
            'type' => 'VARCHAR',
            'constraint' => 255,
            'null' => false,
        ],
        'created_at' => [
            'type' => 'TIMESTAMP',
            'null' => false,
        ],
        'updated_at' => [
            'type' => 'TIMESTAMP',
            'null' => true,
        ]
        ];

        $this->forge->addField($fields);
        $this->forge->addPrimaryKey('id', true);
        $this->forge->createTable('offices');
        //
    }

    public function down()
    {
        $this->forge->dropTable('offices');
    }
}
