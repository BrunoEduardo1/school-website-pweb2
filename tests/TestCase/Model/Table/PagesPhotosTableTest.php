<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PagesPhotosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PagesPhotosTable Test Case
 */
class PagesPhotosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PagesPhotosTable
     */
    public $PagesPhotos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pages_photos',
        'app.pages'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PagesPhotos') ? [] : ['className' => PagesPhotosTable::class];
        $this->PagesPhotos = TableRegistry::getTableLocator()->get('PagesPhotos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PagesPhotos);

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
