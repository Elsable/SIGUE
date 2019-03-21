<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BorrowsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BorrowsTable Test Case
 */
class BorrowsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BorrowsTable
     */
    public $Borrows;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Borrows',
        'app.Resources',
        'app.Academics',
        'app.Users',
        'app.AprovedRequests',
        'app.DevolutionAttendants'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Borrows') ? [] : ['className' => BorrowsTable::class];
        $this->Borrows = TableRegistry::getTableLocator()->get('Borrows', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Borrows);

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
