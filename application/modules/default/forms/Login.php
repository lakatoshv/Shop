<?php

class Form_Login extends Zend_Form
{
    public function init()
    {
        $this->addElement('password', 'password', array(
            'label' => "Пароль:", 'class' => "form-control", "id" => "inputPassword"
        ));

        $this->addElement('text', 'email', array(
            'label' => "Електронна пошта:", 'class' => "form-control", "id" => "inputEmail"
        ));

    }
}
