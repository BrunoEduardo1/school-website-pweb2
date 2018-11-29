<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GaleriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GaleriesTable Test Case
 */
class GaleriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GaleriesTable
     */
    public $Galeries;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.galeries',
        'app.galeries_photos',
        'app.galeries_videos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Galeries') ? [] : ['className' => GaleriesTable::class];
        $this->Galeries = TableRegistry::getTableLocator()->get('Galeries', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Galeries);

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
}
