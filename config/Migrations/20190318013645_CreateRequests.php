<?php
use Migrations\AbstractMigration;

class CreateRequests extends AbstractMigration
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
        $table = $this->table('requests');
        $table->addColumn('academic_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('event', 'string', [
            'default' => null,
            'limit'=>255,
            'null' => false,
        ]);
        $table->addColumn('period', 'string', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('type', 'string', [
            'default' => null,
            'limit'=>50,
            'null' => false,
        ]);
        $table->addColumn('start_date', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('end_date', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('start_hour', 'time', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('end_hour', 'time', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('observations', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('monday', 'boolean', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('tuesday', 'boolean', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('wednesday', 'boolean', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('thursday', 'boolean', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('friday', 'boolean', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('saturday', 'boolean', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('space_id', 'integer', [
            'default' => null,
            'null' => true,
        ]);        
        // columnas para gestionar el visto bueno
        $table->addColumn('vobo', 'boolean', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('vobo_register', 'datetime', [
            'default' => null,
            'limit' => 11,
            'null' => true,
        ]);
        $table->addColumn('vobo_attendant_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
        ]);
        $table->addColumn('vobo_observations', 'text', [
            'default' => null,
            'null' => true,
        ]);

        // columnas para gestionar la reserva
        $table->addColumn('aproved', 'boolean', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('aproved_register', 'datetime', [
            'default' => null,
            'limit' => 11,
            'null' => true,
        ]);
        $table->addColumn('aproved_attendant_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
        ]);
        $table->addColumn('aproved_observations', 'text', [
            'default' => null,
            'null' => true,
        ]);

        // columnas para gestionar cancelaciones
        $table->addColumn('cancelled', 'boolean', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('cancelled_register', 'datetime', [
            'default' => null,
            'limit' => 11,
            'null' => true,
        ]);
        $table->addColumn('cancelled_attendant_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
        ]);
        $table->addColumn('cancelled_observations', 'text', [
            'default' => null,
            'null' => true,
        ]);
        
        // campos obligatorios para el manejo del framework
        $table->addColumn('created', 'datetime', [
            'default' => 'CURRENT_TIMESTAMP',
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => 'CURRENT_TIMESTAMP',
            'null' => false,
        ]);
        $table->addForeignKey('academic_id','academics','id',['delete'=>'CASCADE','update'=>'CASCADE']);
        $table->addForeignKey('vobo_attendant_id','users','id',['delete'=>'CASCADE','update'=>'CASCADE']);
        $table->addForeignKey('aproved_attendant_id','users','id',['delete'=>'CASCADE','update'=>'CASCADE']);
        $table->addForeignKey('cancelled_attendant_id','users','id',['delete'=>'CASCADE','update'=>'CASCADE']);
        $table->addForeignKey('space_id','spaces','id',['delete'=>'CASCADE','update'=>'CASCADE']);
        $table->create();
    }
}
