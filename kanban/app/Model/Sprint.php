<?php
App::uses('AppModel', 'Model');
/**
 * Sprint Model
 *
 * @property Story $Story
 */
class Sprint extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
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
		'date_from' => [
			'rule' => ['date'],
			'message' => "Date from field's format must be 'Y-m-d'.",
		],
		'date_to' => [
			'rule' => ['date'],
			'message' => "Date to field's format must be 'Y-m-d'.",
		],
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Story' => array(
			'className' => 'Story',
			'foreignKey' => 'sprint_id',
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

}
