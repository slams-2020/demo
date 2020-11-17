<?php

namespace controllers\crud\datas;

use Ubiquity\controllers\crud\CRUDDatas;

/**
 * Class UserControllerDatas
 */
class UserControllerDatas extends CRUDDatas {
	/**
	 *
	 * {@inheritdoc}
	 * @see \Ubiquity\controllers\crud\CRUDDatas::_getInstancesFilter()
	 */
	public function _getInstancesFilter($model) {
		return "idOrganization=2";
	}

	/**
	 *
	 * {@inheritdoc}
	 * @see \Ubiquity\controllers\crud\CRUDDatas::getFieldNames()
	 */
	public function getFieldNames($model) {
		// TODO Auto-generated method stub
		return [ 
				"organization",
				"firstname",
				"lastname",
				"email"
		];
	}

	// use override/implement Methods
}
