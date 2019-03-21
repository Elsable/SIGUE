<?php
use Migrations\AbstractMigration;

class CreateUsers extends AbstractMigration
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
        $table = $this->table('users');
        $table->addColumn('username', 'string', [
            'default' => null,
            'limit' => 13,
            'null' => false,
        ]);
        $table->addColumn('firstname', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => false,
        ]);
        $table->addColumn('lastname', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => false,
        ]);
        $table->addColumn('motherlastname', 'string', [
            'limit' => 100,
            'null' => false,
            'null' => true,
        ]);
        $table->addColumn('email', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('telephone', 'string', [
            'default' => null,
            'limit' => 10,
            'null' => false,
        ]);
        $table->addColumn('active', 'boolean', [
            'default' => 'true',
            'null' => false,
        ]);
        $table->addColumn('password', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('fullname', 'string', [
            'default' => null,
            'limit' => 300,
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
        $table->addIndex(['username'],['unique'=>true]);
        $table->addIndex(['email'],['unique'=>true]);
        $table->create();
    }
}
