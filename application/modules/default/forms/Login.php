<?php
/**
 * Classe de formulario
 *
 * @autor Recigio Poffo
 * @utf8force ãéçís
 */
class Default_Form_Login extends Zend_Form
{

    public function __construct()
    {
        $view = $this->getView();

        parent::__construct();

        // Set form name
        $this->setName("Login");
        $this->setEnctype(Zend_Form::METHOD_POST);
        $this->setMethod("post");
        $this->setAction("login");
        $this->setAttrib("class","")
	    ->setAttrib("style","padding:0; margin:0;");

        $login = new Zend_Form_Element_Text("login");
        $login->setAttrib("title","Login (obrigatório)")
        ->setAttrib("required", "required")
        ->setAttrib("placeholder", "Digite seu e-mail")
        ->setAttrib("class"," form-control form-login-crosp-label")
        ->setAttrib("style","");
        $login->setFilters(array("StringTrim"));
        $login->setValidators(array("NotEmpty"));
        //$login->setLabel('Login');
        $login->removeDecorator('label');

        $senha = new Zend_Form_Element_Password("senha");
        $senha->setAttrib("title","Senha (obrigatório)")
        ->setAttrib("style","")
        ->setAttrib("required", "required")
        ->setAttrib("placeholder", "Digite sua senha")
        ->setAttrib("class"," form-control form-login-crosp-label")
        ->setAttrib("style","width:90%; margin-left: 5%;");
        $senha->setFilters(array("StringTrim"));
        $senha->setValidators(array("NotEmpty"));
        //$senha->setLabel('Senha');

        $submit = new Zend_Form_Element_Submit("logar");
        $submit->setAttrib("class", "btn btn-primary form-login-crosp-label")
        ->setAttrib("style","");
        $submit->setValue("Salvar");
        $submit->removeDecorator('label');

        $this->addElements(array($login,$senha,$submit));
        $this->addDisplayGroup(array("login","senha","logar"),"formulario");
    }


}