<?php

namespace controllers\crud\viewers;

use Ubiquity\controllers\crud\viewers\ModelViewer;

/**
 * Class UserControllerViewer
 */
class UserControllerViewer extends ModelViewer {
	/**
	 *
	 * {@inheritdoc}
	 * @see \Ubiquity\controllers\crud\viewers\ModelViewer::recordsPerPage()
	 */
	public function recordsPerPage($model, $totalCount = 0) {
		if ($totalCount > 20)
			return 200;
		return;
	}
	public function isModal($objects, $model) {
		return false;
	}

	/**
	 *
	 * {@inheritdoc}
	 * @see \Ubiquity\controllers\crud\viewers\ModelViewer::getCaptions()
	 */
	public function getCaptions($captions, $className) {
		// TODO Auto-generated method stub
		return [ 
				'Prénom',
				'Nom',
				'Email'
		];
	}

	/**
	 *
	 * {@inheritdoc}
	 * @see \Ubiquity\controllers\crud\viewers\ModelViewer::getGroupByFields()
	 */
	public function getGroupByFields() {
		return [ 
				0
		];
	}

	/**
	 *
	 * {@inheritdoc}
	 * @see \Ubiquity\controllers\crud\viewers\ModelViewer::getModelDataTable()
	 */
	public function getModelDataTable($instances, $model, $totalCount, $page = 1) {
		$dt = parent::getModelDataTable ( $instances, $model, $totalCount, $page );
		$dt->fieldAsLabel ( 'email', 'mail', [ 
				'color' => 'teal'
		] );

		$dt->setValueFunction ( 'firstname', function ($v, $instance) {
			return "<b>$v</b>";
		} );

		$dt->fieldAsHeader ( 'organization' );
	}
	protected function getDataTableRowButtons() {
		return [ 
				"display",
				"edit",
				"delete"
		];
	}
}
