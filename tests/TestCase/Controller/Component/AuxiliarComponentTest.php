<?php

namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\AuxiliarComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\AuxiliarComponent Test Case
 */
class AuxiliarComponentTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Controller\Component\AuxiliarComponent
     */
    public $Auxiliar;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->Auxiliar = new AuxiliarComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Auxiliar);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
