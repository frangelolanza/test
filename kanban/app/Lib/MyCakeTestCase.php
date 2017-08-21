<?php
App::import('Vendor', 'Phactory/Sql/Phactory');
App::uses('DboSource', 'Model/Datasource');

/**
 * Description of MyCakeTestCase
 *
 * @author SCI01310
 */
class MyCakeTestCase extends CakeTestCase {

    /**
     * @var Phactory
     */
    protected $_phactory;

    /**
     * @var PDO
     */
    protected $_pdo;

    public function setUp() {
        parent::setUp();
        $dbo = ConnectionManager::getDataSource('test');

        $this->_pdo = $dbo->getConnection();
        $this->_phactory = new \Phactory\Sql\Phactory($this->_pdo);
    }

    public function tearDown() {
        parent::tearDown();
        unset($this->_pdo);
    }

}
