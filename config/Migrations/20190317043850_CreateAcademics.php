<?php
use Migrations\AbstractMigration;

class CreateAcademics extends AbstractMigration
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
        $table = $this->table('academics');
        $table->addColumn('rfc_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('adscription_id', 'integer', [
            'default' => null,
            'limit' => 11,
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
        $table->addIndex('rfc_id',['unique'=>true]);
        $table->addForeignKey('rfc_id','users','id',['delete'=>'CASCADE','update'=>'CASCADE']);
        $table->addForeignKey('adscription_id','departments','id',['delete'=>'CASCADE','update'=>'CASCADE']);
        $table->create();
    }
}
