<?php
use Migrations\AbstractMigration;

class InsertUser extends AbstractMigration
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

        // inserting only one row
        $singleRow = [
            'username'=>'superadmin',
            'firstname'  => 'Administrador',
            'lastname'=> 'SIGE',
            'email'=>'sige.psicologia@gmail.com',
            'telephone'=>'0000000000',
            'active'=>1,
            'password'=>'$2y$12$JsvxV8WpZqQu/3Cccyh/A.bONofjnOvqslBGd572GXzxsnaACu6NW',
            'fullname'=>'Administrador de SIGE'
        ];

        $table = $this->table('users');
        $table->insert($singleRow);
        $table->saveData();
    }
}
