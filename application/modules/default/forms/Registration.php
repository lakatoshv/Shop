<?php

class Form_Registration extends Zend_Form
{
    public function init()
    {
        $firstname = $this->createElement('text','firstname');
        $firstname->setLabel('Імʼя:')
                    ->setRequired(true);
                    
        $lastname = $this->createElement('text','lastname');
        $lastname->setLabel('Прізвище:')
                    ->setRequired(false);

        $password = $this->createElement('password','password');
        $password->setLabel('Пароль: *')
                ->setRequired(true);

                
        $confirmPassword = $this->createElement('password','confirmPassword');
        $confirmPassword->setLabel('Підтвердіть пароль: *')
                ->setRequired(true);

        $email = $this->createElement('text','email');
        $email->setLabel('Емайл: *')
                ->setRequired(true);

        $city = $this->createElement('text','city');
        $city->setLabel('Місце проживання: *')
                ->setRequired(false);

        $register = $this->createElement('submit','register');
        $register->setLabel('Зареєструватись')
                ->setIgnore(true);
                
        $this->addElements(array(
                        $firstname,
                        $lastname,
                        $password,
                        $confirmPassword,
                        $email,
                        $city,
                        $register
        ));
    }
}

