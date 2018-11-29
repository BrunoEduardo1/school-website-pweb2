<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GaleriesPhotosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GaleriesPhotosTable Test Case
 */
class GaleriesPhotosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GaleriesPhotosTable
     */
    public $GaleriesPhotos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.galeries_photos',
        'app.galeries'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('GaleriesPhotos') ? [] : ['className' => GaleriesPhotosTable::class];
        $this->GaleriesPhotos = TableRegistry::getTableLocator()->get('GaleriesPhotos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GaleriesPhotos);

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
