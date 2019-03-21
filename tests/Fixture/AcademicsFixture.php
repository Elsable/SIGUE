<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AcademicsFixture
 *
 */
class AcademicsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'rfc_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'adscription_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'created' => ['type' => 'timestamp', 'length' => null, 'default' => 'now()', 'null' => false, 'comment' => null, 'precision' => null],
        'modified' => ['type' => 'timestamp', 'length' => null, 'default' => 'now()', 'null' => false, 'comment' => null, 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'academics_rfc_id' => ['type' => 'unique', 'columns' => ['rfc_id'], 'length' => []],
            'academics_adscription_id_fkey' => ['type' => 'foreign', 'columns' => ['adscription_id'], 'references' => ['departments', 'id'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
            'academics_rfc_id_fkey' => ['type' => 'foreign', 'columns' => ['rfc_id'], 'references' => ['users', 'id'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'rfc_id' => 1,
                'adscription_id' => 1,
                'created' => 1552798113,
                'modified' => 1552798113
            ],
        ];
        parent::init();
    }
}
