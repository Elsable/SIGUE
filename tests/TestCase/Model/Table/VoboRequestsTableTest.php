<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VoboRequestsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VoboRequestsTable Test Case
 */
class VoboRequestsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VoboRequestsTable
     */
    public $VoboRequests;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.VoboRequests',
        'app.Users',
        'app.Requests'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('VoboRequests') ? [] : ['className' => VoboRequestsTable::class];
        $this->VoboRequests = TableRegistry::getTableLocator()->get('VoboRequests', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->VoboRequests);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
