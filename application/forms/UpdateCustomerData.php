<?php

class Application_Form_UpdateCustomerData extends Zend_Form
{
    public function init()
    {
        Zend_Session::start();
        $session = new Zend_Session_Namespace('Customer');

        $firstname = $this->createElement('text','firstname');
        $firstname->setLabel('Імʼя:')->setValue($session->firstname)
                    ->setRequired(true);
                    
        $lastname = $this->createElement('text','lastname');
        $lastname->setLabel('Прізвище:')->setValue($session->lastname)
                    ->setRequired(true);

        $password = $this->createElement('password','password');
        $password->setLabel('Пароль: *')
                ->setRequired(true);

                
        $confirmPassword = $this->createElement('password','confirmPassword');
        $confirmPassword->setLabel('Підтвердіть пароль: *')
                ->setRequired(true);

        $email = $this->createElement('text','email');
        $email->setLabel('Емайл: *')->setValue($session->email)
                ->setRequired(true);

        $city = $this->createElement('text','city');
        $city->setLabel('Місце проживання: *')->setValue($session->city)
                ->setRequired(true);


        $register = $this->createElement('submit','register');
        $register->setLabel('Змінити дані')
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

