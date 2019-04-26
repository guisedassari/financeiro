<?php

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReceitasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReceitasTable Test Case
 */
class ReceitasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ReceitasTable
     */
    public $Receitas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Receitas',
        'app.FormaPagamentos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Receitas') ? [] : ['className' => ReceitasTable::class];
        $this->Receitas = TableRegistry::getTableLocator()->get('Receitas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Receitas);

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
