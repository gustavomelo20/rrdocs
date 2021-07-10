<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap {

	protected function initRoutes() {

		$routes['lead'] = array(
			'route' => '/lead',
			'controller' => 'indexController',
			'action' => 'leads'
		);

		$routes['home'] = array(
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'index'
		);
		
	

		$this->setRoutes($routes);
	}

}

?>