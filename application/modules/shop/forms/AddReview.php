<?php

class Shop_Form_AddReview extends Zend_Form
{
    public function init()
    {

        $this->addElement('hidden', 'product_id', array(
            'class' => "form-control"
        ));

        $this->addElement('text', 'author', array(
            'label' => "Автор:", 'class' => "form-control"
        ));

        $this->addElement('hidden', 'mark', array(
            'class' => "form-control"
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

        $this->addElement('textarea', 'good_review', array(
            'label' => 'Переваги: ', 'class' => "form-control"
        ));
        $this->addElement('textarea', 'bad_review', array(
            'label' => 'Недоліки: ', 'class' => "form-control"
        ));
        $this->addElement('textarea', 'comment', array(
            'label' => 'Коментар: ', 'class' => "form-control"
        ));
    }
}

