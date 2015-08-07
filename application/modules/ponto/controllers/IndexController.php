<?php

class Ponto_IndexController extends Zend_Controller_Action
{

    /**
     * Tela Inicial
     */
    public function indexAction()
    {
        #<!--Timeline-->
        $this->view->headLink()->offsetSetStylesheet(100, $this->view->baseUrl().'/css/ponto/timeline.css');
        #<!--Morris Chart-->
        $this->view->headLink()->offsetSetStylesheet(101, $this->view->baseUrl().'/plugin/ponto/morrisjs/morris.css');
        
        #<!-- Morris Charts JavaScript -->
        $this->view->headScript()->offsetSetFile(100, $this->view->baseUrl().'/plugin/ponto/raphael/raphael-min.js');
        $this->view->headScript()->offsetSetFile(101, $this->view->baseUrl().'/plugin/ponto/morrisjs/morris.min.js');
        $this->view->headScript()->offsetSetFile(102, $this->view->baseUrl().'/plugin/ponto/morris-data.js');
    }
    
}

