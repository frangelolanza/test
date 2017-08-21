<?php
App::uses('AppModel', 'Model');
/**
 * Story Model
 *
 * @property Story $ParentStory
 * @property Sprint $Sprint
 * @property Story $ChildStory
 */
class Story extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = [
		'name' => [
			'notempty' => [
				'rule' => ['notempty'],
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			],
		],
		'sprint_id' => [
			'numeric' => [
				'rule' => ['numeric'],
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			],
		],
		'priority' => [
			'rule' => ['custom', '/p[01234]/'],
			'message' => 'Priority must be  p0, p1, ..., or p4.',
		],
		'status' => [
			'rule' => ['inList', ['not started', 'in progress', 'completed', 'blocked']],
			'message' => "Status must be 'not started', 'in progress', 'completed' or 'blocked'.",
		],
		'estimate' => [
			'rule' => ['numeric'],
			'message' => 'Estimate must be a number.',
			'allowEmpty' => true,
		],
		'record' => [
			'rule' => ['numeric'],
			'message' => 'Record must be a number.',
			'allowEmpty' => true,
		],
	];

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'ParentStory' => array(
			'className' => 'Story',
			'foreignKey' => 'parent_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Sprint' => array(
			'className' => 'Sprint',
			'foreignKey' => 'sprint_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'ChildStory' => array(
			'className' => 'Story',
			'foreignKey' => 'parent_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
	
/**
 * Saves a story.
 *
 * 'Order' field's value is automatically added.
 *
 * @param array $data
 * @return boolean true if success
 */
    public function add($data) {
        if (!isset($data['Story']['sprint_id'])) return false;

        $max_order = $this->getMaxOrder($data['Story']['sprint_id']);
        $input = array_merge($data, array('Story' => array('order' => ($max_order + 1))));
        return $this->save($input) ? true : false;
    }

/**
 * Returns max order number in the sprint.
 *
 * @param int $sprint_id
 * @return int max order (false if not found)
 */
    public function getMaxOrder($sprint_id) {
        $result = $this->find('first', array(
            'conditions' => array(
                'Story.sprint_id' => $sprint_id
            ),
            'fields' => array('MAX(Story.order) AS max_order')
            ));

        return isset($result[0]['max_order']) ? (int) $result[0]['max_order'] : false;
    }

/**
 * Swaps the order of two rows.
 *
 * @param int $story_id1
 * @param int $story_id2
 * @return bool
 */
    public function swap($story_id1, $story_id2) {
        $story1 = $this->findById($story_id1);
        $story2 = $this->findById($story_id2);

        if (!$story1 || !$story2 || !isset($story1['Story']['order']) || !isset($story2['Story']['order'])) {
            return false;
        }

        $order1 = $story1['Story']['order'];
        $order2 = $story2['Story']['order'];

        $data = array(
            array('Story' => array('id' => $story_id1, 'order' => $order2)),
            array('Story' => array('id' => $story_id2, 'order' => $order1)),
        );

        return $this->saveMany($data, array('atomic' => true));
    }

}
