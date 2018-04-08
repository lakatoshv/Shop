<?php

class Form_Login extends Zend_Form
{
    public function init()
    {
        $username = $this->createElement('text','email');
        $username->setLabel('Емейл: *')
                ->setRequired(true);
                
        $password = $this->createElement('password','password');
        $password->setLabel('Пароль: *')
                ->setRequired(true);
                
        $signin = $this->createElement('submit','signin');
        $signin->setLabel('Ввійти')
                ->setIgnore(true);
                
        $this->addElements(array(
                        $username,
                        $password,
                        $signin,
        ));
    }
}
