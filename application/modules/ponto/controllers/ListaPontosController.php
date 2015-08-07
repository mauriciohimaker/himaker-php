<?php

class Ponto_ListaPontosController extends Zend_Controller_Action
{

    /**
     * Tela Inicial
     */
    public function indexAction()
    {
        
        #<!-- DataTables CSS -->
        $this->view->headLink()->offsetSetStylesheet(100, $this->view->baseUrl().'/plugin/default/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css');
        
        #<!-- DataTables Responsive CSS -->
        $this->view->headLink()->offsetSetStylesheet(101, $this->view->baseUrl().'/plugin/default/datatables-responsive/css/dataTables.responsive.css');
        
        #<!-- DataTables JavaScript -->
        $this->view->headScript()->offsetSetFile(101, $this->view->baseUrl().'/plugin/default/datatables/media/js/jquery.dataTables.min.js');
        $this->view->headScript()->offsetSetFile(102, $this->view->baseUrl().'/plugin/default/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js');
        
        $script = "
        $(document).ready(function() {
            $('#dataTables-pontos').DataTable({
                    \"responsive\": true,
                    \"pageLength\": 50,
                    \"language\": {
                        \"url\": \"".$this->view->baseUrl()."/plugin/default/datatables/DataTables-Portuguese-Brasil.json\"
                    }
            });
        });";
        
        $this->view->headScript()->offsetSetScript(103, $script, $type = 'text/javascript', $attrs = array());
                
        
    }
    
}

