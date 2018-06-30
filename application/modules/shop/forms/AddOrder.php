<?php

class Shop_Form_AddOrder extends Zend_Form
{
    public function init()
    {

        $this->addElement('text', 'pib', array(
            'label' => "ПІБ:", 'class' => "form-control"
        ));

        $this->addElement('text', 'email', array(
            'label' => "Електронна пошта:", 'class' => "form-control"
        ));

        $this->addElement('text', 'tel', array(
            'label' => "Телефон:", 'class' => "form-control"
        ));

        $this->addElement('text', 'address', array(
            'label' => "Адреса доставки:", 'class' => "form-control"
        ));

        /*
        $mark = $this->createElement('select','mark');
        $mark->addMultiOptions(array(
            "0" => "0", "1" => "1", "2" => "2", "3" => "3", "4" => "4", "5" => "5"
        ));
        $type->setLabel('Тип товару:')
                ->setRequired(true);
        $type->class = "form-control";
        $this->addElement($type);
        */


        $this->addElement('textarea', 'note', array(
            'label' => 'Примітка: ', 'class' => "form-control"
        ));
    }
}

