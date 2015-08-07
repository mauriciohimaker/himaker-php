<?php

class Default_NovoController extends Zend_Controller_Action
{

    /**
     * Tela Inicial
     */
    public function indexAction()
    {
        $this->view->texto = 'aaa'; 
    }
    
}

