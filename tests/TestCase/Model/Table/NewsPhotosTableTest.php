<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NewsPhotosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NewsPhotosTable Test Case
 */
class NewsPhotosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NewsPhotosTable
     */
    public $NewsPhotos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.news_photos',
        'app.news'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('NewsPhotos') ? [] : ['className' => NewsPhotosTable::class];
        $this->NewsPhotos = TableRegistry::getTableLocator()->get('NewsPhotos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->NewsPhotos);

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
