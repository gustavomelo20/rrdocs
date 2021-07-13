<?php

namespace App\Controllers;
use MF\Controller\Action;
use MF\Model\Container;

class IndexController extends Action 
{


	public function index() 
	{

		$this->render('index');
	}
	public function obrigado() 
	{

		$this->render('obrigado');
	}
	public function leads() 
	{

        $lead = Container::getModel('Lead');
        
		$lead->_set('nome', $_POST['nome']);
		$lead->_set('email', $_POST['email']);
		$lead->_set('id_cliente', $_POST['id_cliente']);
		$lead->_set('id_lp', $_POST['id_lp']);
        
	    if($_POST['id_lp'] == ''){
        
			echo 'ID do formulario invalido ou não foi definido  - 
			      essa função espera um id , defina em um input 
				  hidden com o value="id" :int';

			die();	
		}
		$lead->salvar();
		header('Location: obrigado');
	}

}

