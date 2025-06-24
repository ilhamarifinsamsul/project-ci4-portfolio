<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreaePortfoliosTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'         => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type'      => 'VARCHAR',
                'constraint' => 255,
            ],
            'description' => [
                'type'     => 'TEXT',
                'null'   => true,
            ],
            'image' => [
                'type'      => 'VARCHAR',
                'constraint' => 255,
                'null'   => true,  
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
            'deleted_at DATETIME DEFAULT NULL',
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('portfolios');
    }

    public function down()
    {
        $this->forge->dropTable('portfolios', true);
    }
}
