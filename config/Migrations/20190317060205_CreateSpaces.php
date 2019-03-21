<?php
use Migrations\AbstractMigration;
use Phinx\Db\Adapter\PostgresAdapter;

class CreateSpaces extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('spaces');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 150,
            'null' => false,
        ]);
        $table->addColumn('capacity', 'integer', [
            'default' => null,
            'limit' => PostgresAdapter::INT_SMALL,
            'null' => false,
        ]);
        $table->addColumn('location', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('observations', 'text', [
            'null' => false,
        ]);
        $table->addColumn('internet', 'boolean', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('board', 'boolean', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('projector', 'boolean', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('blind', 'boolean', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('speakers', 'boolean', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('type', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('active', 'boolean', [
            'default' => true,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => 'CURRENT_TIMESTAMP',
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => 'CURRENT_TIMESTAMP',
            'null' => false,
        ]);
        $table->addIndex('name',['unique'=>true]);
        $table->create();
    }
}
