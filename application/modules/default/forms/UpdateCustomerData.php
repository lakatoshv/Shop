````<?php

class Form_UpdateCustomerData extends Zend_Form
{
    public function init()
    {
        $this->addElement('text', 'firstname', array(
            'class' => "form-control", 'id' => 'first-name', 'placeholder' => "Ім'я"
        ));
        $this->addElement('text', 'lastname', array(
            'class' => "form-control", 'id' => 'last-name', 'placeholder' => "Фамілія"
        ));
        $this->addElement('text', 'email', array(
            'class' => "form-control", 'id' => 'email', 'placeholder' => "Електронна пошта"
        ));
        $this->addElement('text', 'phoneNumber', array(
            'class' => "form-control", 'id' => 'phone-number', 'placeholder' => "Номер телефону"
        ));
        $this->addElement('text', 'profileImg', array(
            'class' => "form-control", 'id' => 'profile-img', 'placeholder' => "Аватар"
        ));
    }
}

