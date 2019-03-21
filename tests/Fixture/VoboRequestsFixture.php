<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VoboRequestsFixture
 *
 */
class VoboRequestsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'attendant_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'request_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'aproved_request' => ['type' => 'boolean', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'date_aproved_request' => ['type' => 'timestamp', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'observations' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null],
        'created' => ['type' => 'timestamp', 'length' => null, 'default' => 'now()', 'null' => false, 'comment' => null, 'precision' => null],
        'modified' => ['type' => 'timestamp', 'length' => null, 'default' => 'now()', 'null' => false, 'comment' => null, 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'vobo_requests_attendant_id_fkey' => ['type' => 'foreign', 'columns' => ['attendant_id'], 'references' => ['users', 'id'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
            'vobo_requests_request_id_fkey' => ['type' => 'foreign', 'columns' => ['request_id'], 'references' => ['requests', 'id'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
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
                'attendant_id' => 1,
                'request_id' => 1,
                'aproved_request' => 1,
                'date_aproved_request' => 1552859468,
                'observations' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'created' => 1552859468,
                'modified' => 1552859468
            ],
        ];
        parent::init();
    }
}
