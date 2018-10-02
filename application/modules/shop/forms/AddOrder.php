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

        $this->addElement('text', 'phone', array(
            'label' => "Телефон:", 'class' => "form-control"
        ));

        $this->addElement('text', 'address', array(
            'label' => "Адреса доставки:", 'class' => "form-control"
        ));
        $this->addElement('radio', 'delivery_type', array(
            "class" => "form-check-input",
            'multiOptions'=>array(
                'По пошті' => 'По пошті',
                "Кур'єрська доставка" => "Кур'єрська доставка",
                'Самовивіз' => 'Самовивіз',
            ),
        ));
        $this->addElement('radio', 'pay_type', array(
            "class" => "form-check-input",
            "label" => "Тип оплати:",
            'multiOptions'=>array(
                'Карткою' => 'Карткою',
                "Готівкою при отриманні" => "Готівкою при отриманні",
            ),
        ));


        $this->addElement('textarea', 'note', array(
            'label' => 'Примітка: ', 'class' => "form-control"
        ));
    }
}

