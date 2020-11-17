<?php

namespace controllers;

use Ubiquity\orm\DAO;
use models\Organization;

/**
 * Controller OrgaController
 *
 * @route("/orgas/","automated"=>true)
 */
class OrgaController extends ControllerBase {
	public function index() {
		$this->jquery->getHref ( "a", null, [ 
				"hasLoader" => false,
				"historize" => false
		] );
		$this->jquery->renderDefaultView ( [ 
				"orga" => DAO::getAll ( Organization::class )
		] );
	}

	/**
	 *
	 * @get("{id}")
	 *
	 * @param int $id
	 */
	public function orga($id) {
		$orga = DAO::getById ( Organization::class, $id );
		$this->loadDefaultView ( compact ( "orga" ) );
	}
}
