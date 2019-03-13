<?php
use Migrations\AbstractMigration;

class CreateUsersTable extends AbstractMigration
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
	    $table=$this->table('users');
	    
	    $table->addColumn('firstname','string')
	    ->addColumn('lastname','string')
	    ->addColumn('motherlastname','string')
	    ->addColumn('email','string')
	    ->addColumn('telephone','string')
	    ->addColumn('username','string')
	    ->addColumn('enable','boolean')
	    ->addColumn('password','string')
	    ->create();

    }
}
