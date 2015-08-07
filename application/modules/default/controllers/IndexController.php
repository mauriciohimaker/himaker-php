<?php

class Default_IndexController extends Zend_Controller_Action
{

    /**
     * Tela Inicial
     */
    public function indexAction()
    {
     $this->view->texto = 'aaa'; 
    }
    
}

