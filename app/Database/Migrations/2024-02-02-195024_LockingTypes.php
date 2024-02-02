<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;




class LockingTypes extends Migration
{
    public function up()
    {
        // Table structure
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'lock_reason' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'is_active' => [
                'type'       => 'BOOLEAN',
                'default'    => true,
            ],
            'delete' => [
                'type'       => 'BOOLEAN',
                'default'    => false,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            // Add other fields as needed
        ]);

        // Primary key
        $this->forge->addPrimaryKey('id');

        // Create the table
        $this->forge->createTable('lockingtypes', true);
    }

    public function down()
    {
        // Drop the table
        $this->forge->dropTable('lockingtypes', true);
    }
}
