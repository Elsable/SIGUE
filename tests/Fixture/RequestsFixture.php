<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RequestsFixture
 *
 */
class RequestsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'academic_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'event' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'period' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'type' => ['type' => 'string', 'length' => 50, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'start_date' => ['type' => 'date', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'end_date' => ['type' => 'date', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'start_hour' => ['type' => 'time', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'end_hour' => ['type' => 'time', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'observations' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null],
        'monday' => ['type' => 'boolean', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'tuesday' => ['type' => 'boolean', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'wednesday' => ['type' => 'boolean', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'thursday' => ['type' => 'boolean', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'friday' => ['type' => 'boolean', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'saturday' => ['type' => 'boolean', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'space_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'vobo' => ['type' => 'boolean', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'vobo_register' => ['type' => 'timestamp', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'vobo_attendant_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'vobo_observations' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null],
        'aproved' => ['type' => 'boolean', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'aproved_register' => ['type' => 'timestamp', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'aproved_attendant_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'aproved_observations' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null],
        'cancelled' => ['type' => 'boolean', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'cancelled_register' => ['type' => 'timestamp', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'cancelled_attendant_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'cancelled_observations' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null],
        'created' => ['type' => 'timestamp', 'length' => null, 'default' => 'now()', 'null' => false, 'comment' => null, 'precision' => null],
        'modified' => ['type' => 'timestamp', 'length' => null, 'default' => 'now()', 'null' => false, 'comment' => null, 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'requests_academic_id_fkey' => ['type' => 'foreign', 'columns' => ['academic_id'], 'references' => ['academics', 'id'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
            'requests_aproved_attendant_id_fkey' => ['type' => 'foreign', 'columns' => ['aproved_attendant_id'], 'references' => ['users', 'id'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
            'requests_cancelled_attendant_id_fkey' => ['type' => 'foreign', 'columns' => ['cancelled_attendant_id'], 'references' => ['users', 'id'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
            'requests_space_id_fkey' => ['type' => 'foreign', 'columns' => ['space_id'], 'references' => ['spaces', 'id'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
            'requests_vobo_attendant_id_fkey' => ['type' => 'foreign', 'columns' => ['vobo_attendant_id'], 'references' => ['users', 'id'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
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
                'academic_id' => 1,
                'event' => 'Lorem ipsum dolor sit amet',
                'period' => 'Lorem ipsum dolor sit amet',
                'type' => 'Lorem ipsum dolor sit amet',
                'start_date' => '2019-03-18',
                'end_date' => '2019-03-18',
                'start_hour' => '18:45:00',
                'end_hour' => '18:45:00',
                'observations' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'monday' => 1,
                'tuesday' => 1,
                'wednesday' => 1,
                'thursday' => 1,
                'friday' => 1,
                'saturday' => 1,
                'space_id' => 1,
                'vobo' => 1,
                'vobo_register' => 1552934700,
                'vobo_attendant_id' => 1,
                'vobo_observations' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'aproved' => 1,
                'aproved_register' => 1552934700,
                'aproved_attendant_id' => 1,
                'aproved_observations' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'cancelled' => 1,
                'cancelled_register' => 1552934700,
                'cancelled_attendant_id' => 1,
                'cancelled_observations' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'created' => 1552934700,
                'modified' => 1552934700
            ],
        ];
        parent::init();
    }
}
