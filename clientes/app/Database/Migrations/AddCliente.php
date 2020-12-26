<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddBlog extends Migration
{

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'INT',
                                'constraint'     => 5,
                                'unsigned'       => true,
                                'auto_increment' => true,
                        ],
                        'nombre'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100',
                        ],
                        'apellido'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100',
                        ],
                        'celular' => [
                                'type'           => 'INT',
                                'contraint'      => '100',
                        ],
                        'correo'       => [
                            'type'           => 'VARCHAR',
                            'constraint'     => '100',
                        ],
                        'edad'       => [
                            'type'           => 'INT',
                            'constraint'     => '100',
                        ],
                        'genero'       => [
                            'type'           => 'VARCHAR',
                            'constraint'     => '100',
                        ],
                ]);
                $this->forge->addKey('id', true);
                $this->forge->createTable('t_clientes');
        }

        public function down()
        {
                $this->forge->dropTable('t_clientes');
        }
}