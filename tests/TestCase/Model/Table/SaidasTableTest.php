<?php

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SaidasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SaidasTable Test Case
 */
class SaidasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SaidasTable
     */
    public $Saidas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Saidas',
        'app.Compradors',
        'app.Tipos',
        'app.FormaPagamentos',
        'app.Users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Saidas') ? [] : ['className' => SaidasTable::class];
        $this->Saidas = TableRegistry::getTableLocator()->get('Saidas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Saidas);

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
