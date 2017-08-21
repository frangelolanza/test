<?php
App::uses('Story', 'Model');
App::uses('MyCakeTestCase', 'Lib');

/**
 * Story Test Case
 *
 */
class StoryTest extends CakeTestCase {

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = array(
        'app.story',
        'app.sprint'
    );

    /**
     * @var Story
     */
    protected $Story;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp() {
        parent::setUp();
        $this->Story = ClassRegistry::init('Story');
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown() {
        unset($this->Story);
        parent::tearDown();
    }

    /**
     * @covers Story::add
     */
    public function testAdd() {
        $data = array(
            'Story' => array(
                'sprint_id' => 0
            )
        );
        $this->assertTrue($this->Story->add($data));
    }

    /**
     * @covers Story::add
     */
    public function testAddFailsWithInvalidInput() {
        $data = array(
            'IN' => array('VA' => 'LID')
        );
        $this->assertFalse($this->Story->add($data));
    }


    /**
     * @covers Story::getMaxOrder
     */
    public function testGetMaxOrder() {
        $this->assertSame(1, $this->Story->getMaxOrder(1));
    }

    /**
     * @covers Story::swap
     */
    public function testSwap() {
        $this->assertTrue($this->Story->swap(1, 2));

        $data1 = $this->Story->findById(1, array('order'));
        $this->assertEquals(2, $data1['Story']['order']);

        $data2 = $this->Story->findById(2, array('order'));
        $this->assertEquals(1, $data2['Story']['order']);
    }

    public function forTestSwapFailsIfBothOrEachIdIsNotFound() {
        return array(
            array(1, 100000000),
            array(100000000, 1),
            array(100000000, 100000001),
        );
    }

    /**
     * @covers Story::swap
     * @dataProvider forTestSwapFailsIfBothOrEachIdIsNotFound
     */
    public function testSwapFailsIfBothOrEachIdIsNotFound($story_id1, $story_id2) {
        $this->assertFalse($this->Story->swap($story_id1, $story_id2));
    }

}
