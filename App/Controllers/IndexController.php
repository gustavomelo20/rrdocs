<?php

namespace App\Controllers;
use MF\Controller\Action;
use MF\Model\Container;

class IndexController extends Action 
{


	public function index() {

		$this->render('index');
	}
	public function leads() {

        $lead = Container::getModel('Lead');
        
		$lead->_set('nome', $_POST['nome']);
		$lead->_set('email', $_POST['email']);
		$lead->salvar();
		$this->render('obrigado');
	}

}

