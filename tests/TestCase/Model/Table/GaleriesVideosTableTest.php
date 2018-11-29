<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GaleriesVideosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GaleriesVideosTable Test Case
 */
class GaleriesVideosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GaleriesVideosTable
     */
    public $GaleriesVideos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.galeries_videos',
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
        $config = TableRegistry::getTableLocator()->exists('GaleriesVideos') ? [] : ['className' => GaleriesVideosTable::class];
        $this->GaleriesVideos = TableRegistry::getTableLocator()->get('GaleriesVideos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GaleriesVideos);

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
