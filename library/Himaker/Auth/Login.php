<?php

include_once 'FileMaker/FileMaker.php';

class Himaker_Auth_Login implements  Zend_Auth_Adapter_Interface {

	/**
	 * Parametros da aplicação
	 */
	private $params;
	
	/**
	 * Construtora da classe 
	 * @param $params parametros
	 */
	public function __construct($params){

		$this->params = $params;
	}
	
	/**
	 * Método que autentica o usuário
	 * 
	 * (non-PHPdoc)
	 * @see library/Zend/Auth/Adapter/Zend_Auth_Adapter_Interface#authenticate()
	 */
	public function authenticate(){
                $auto = $this->logar($this->params);
                if($auto != null){
                    if($auto['status'] == 'ok'){
                        $identity = $auto['dados'];
                        return new Zend_Auth_Result(Zend_Auth_Result::SUCCESS,$identity,array());
                    }else{
                        return new Zend_Auth_Result(Zend_Auth_Result::FAILURE,null,array($auto['status']));
                    }
		}else{
                    return new Zend_Auth_Result(Zend_Auth_Result::FAILURE,null,array());
		}

	}
	
	/**
	 * Método privado que tenta logar o usuário
	 * 
	 * @param $params parametros
	 * @return Zend_Auth_Result ou void
	 */
	private function logar($params){
                $usuario = new Intranet_Model_Db_Usuario();
		$dados  = $usuario->logar($params);
                if(isset($dados)){  
                    return $dados;
                    
		}
		
	}

    }