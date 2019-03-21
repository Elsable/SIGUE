<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SpacesFixture
 *
 */
class SpacesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'name' => ['type' => 'string', 'length' => 150, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'capacity' => ['type' => 'smallinteger', 'length' => 5, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'location' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null],
        'observations' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null],
        'internet' => ['type' => 'boolean', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'board' => ['type' => 'boolean', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'projector' => ['type' => 'boolean', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'blind' => ['type' => 'boolean', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'speakers' => ['type' => 'boolean', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'type' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'active' => ['type' => 'boolean', 'length' => null, 'default' => 1, 'null' => false, 'comment' => null, 'precision' => null],
        'created' => ['type' => 'timestamp', 'length' => null, 'default' => 'now()', 'null' => false, 'comment' => null, 'precision' => null],
        'modified' => ['type' => 'timestamp', 'length' => null, 'default' => 'now()', 'null' => false, 'comment' => null, 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'spaces_name' => ['type' => 'unique', 'columns' => ['name'], 'length' => []],
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
                'name' => 'Lorem ipsum dolor sit amet',
                'capacity' => 1,
                'location' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'observations' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'internet' => 1,
                'board' => 1,
                'projector' => 1,
                'blind' => 1,
                'speakers' => 1,
                'type' => 'Lorem ipsum dolor sit amet',
                'active' => 1,
                'created' => 1552829236,
                'modified' => 1552829236
            ],
        ];
        parent::init();
    }
}
