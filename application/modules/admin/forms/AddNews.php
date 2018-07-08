<?php

class Admin_Form_AddNews extends Zend_Form
{
    public function init()
    {
        $this->setAttrib('enctype', 'multipart/form-data');
        $this->setEnctype(Zend_Form::ENCTYPE_MULTIPART);

        $this->addElement('text', 'title', array(
            'label' => 'Новина: ', 'class' => "form-control"
        ));
        $this->addElement('text', 'text', array(
            'label' => 'Текст: ', 'class' => "form-control"
        ));

    }
}

