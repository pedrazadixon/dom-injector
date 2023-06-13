<?php

use Migrations\AbstractMigration;

class CreateElementsTable extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('elements');
        $table->addColumn('title', 'string', ['limit' => 255, 'null' => true,]);
        $table->addColumn('uuid', 'string', ['limit' => 32, 'null' => true,]);
        $table->addColumn('html', 'text', ['null' => true,]);
        $table->addColumn('css', 'text', ['null' => true,]);
        $table->addColumn('js', 'text', ['null' => true,]);

        $table->addIndex(['uuid']);

        $table->create();
    }
}
