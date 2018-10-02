<?php

class Form_Registration extends Zend_Form
{
    public function init()
    {
        $this->addElement('text','firstname', array(
            'placeholder' => "Імʼя:", 'class' => "form-control"
        ));
        $this->addElement('text','lastname', array(
            'placeholder' => "Прізвище:", 'class' => "form-control"
        ));
        $this->addElement('text', 'email', array(
            'placeholder' => "Електронна пошта:", 'class' => "form-control"
        ));
        $this->addElement('password', 'password', array(
            'placeholder' => "Пароль:", 'class' => "form-control"
        ));
        $this->addElement('password','confirmPassword', array(
            'placeholder' => 'Підтвердіть пароль:', 'class' => "form-control"
        ));
        $this->addElement('text','city', array(
            'placeholder' => 'Місце проживання:', 'class' => "form-control"
        ));
    }
}

