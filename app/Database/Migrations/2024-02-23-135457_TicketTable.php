<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TicketTable extends Migration
{
    public function up()
    {
        $fields = [
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'first_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false
            ],
            'last_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false
                
            ],
            'office_id' => [
                'type' => 'INT',
                'unsigned' => true,
                'constraint' => 11,
                'null' => false
            ],
            'state' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false
            ],
            'severity' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false
            ],
            'description' => [
                'type' => 'text',
                'null' => false
            ],
            'remarks' => [
                'type' => 'text',
                'null' => true
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
                'null' => false
            ],
            'updated_at' => [
                'type' => 'TIMESTAMP',
                'null' => true
            ],
        ];

        $this->forge->addField($fields);
        $this->forge->addPrimaryKey('id');
        $this->forge->addFOreignKey('office_id', 'officetable', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('tickettable');
        //
    }

    public function down()
    {
        $this->forge->dropTable('tickettable');
    }
}
