<?php
class Himaker_Controller_Action extends Zend_Controller_Action
{
	public function isPost(){
		return $this->getRequest()->isPost();
	}
	
	public function isGet(){
		return $this->getRequest()->isGet();
	}
	
	public function getParams(){
		return $this->getRequest()->getParams();
	}
	
	public function getParam($key,$default=null){
		return $this->getRequest()->getParam($key,$default);
	}
	
	public function disableLayout() 
	{
		$this->getFrontController()->setParam("noViewRenderer", true);
    	$this->_helper->layout()->disableLayout();
	}

 	public function init()
    {
    	
    }
    
    public function isLogged(){
    	
    	return Zend_Auth::getInstance()->hasIdentity();
    }
    
	public function anti_injection($sql){
		
		// remove palavras que contenham sintaxe sql
                /*
		$seg = preg_replace(sql_regcase("/(from|select|insert|delete|where|drop table|show tables|\*|--|\\\\)/"),"",$sql);
		$seg = trim($seg);//limpa espaços vazio
		$seg = strip_tags($seg);//tira tags html e php
		$seg = addslashes($seg);//Adiciona barras invertidas a uma string
		return $seg;
                */
                return $sql;
	}
}