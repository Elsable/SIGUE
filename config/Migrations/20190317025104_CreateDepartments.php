<?php
use Migrations\AbstractMigration;

class CreateDepartments extends AbstractMigration
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
        $table = $this->table('departments');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('coordinator_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('active', 'boolean', [
            'default' => 'true',
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
        $table->addIndex(['name'],['unique'=>true]);
        $table->addIndex(['coordinator_id'],['unique'=>true]);
        $table->addForeignKey('coordinator_id','users','id',['delete'=>'CASCADE', 'update'=>'CASCADE']);
        $table->create();
    }
}
