<?php

class Admin_Form_AddProduct extends Zend_Form
{
    public function init()
    {
        /*

        $minidescription = $this->createElement('text','minidescription');
        $minidescription->setLabel('Короткий опис:')
                    ->setRequired(false);

                
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
                        $name,
                        $price,
                        $minidescription,
                        $password,
                        $confirmPassword,
                        $email,
                        $city,
                        $register
        ));
        */
        $this->addElement('text', 'name', array(
            'label' => 'Назва товару: ', 'class' => "form-control"
        ));
        $this->addElement('text', 'price', array(
            'label' => 'Ціна: ', 'class' => "form-control"
        ));
        $this->addElement('textarea', 'minidescription', array(
            'label' => 'Короткий опис: ', 'class' => "form-control"
        ));
        $this->addElement('textarea', 'description', array(
            'label' => 'Опис: ', 'class' => "form-control"
        ));

        $type = $this->createElement('select','type');

        $categoriesTbl = new Shop_Model_DbTable_Categories();
        //SELECT DISTINCT type FROM category
        $typesList = $categoriesTbl->selectDistinct("type");
        $id = 0;
        foreach ($typesList as $key => $value) {
            $type->addMultiOptions(array(
                $value["type"]."" => $value["type"].""
            ));
            $id++;
        }

        $type->setLabel('Тип товару:')
                ->setRequired(true);
        $type->class = "form-control";
        $this->addElement($type);

        $category = $this->createElement('select','category');

        $categoriesTbl = new Shop_Model_DbTable_Categories();
        //SELECT DISTINCT type FROM category
        $brandsList = $categoriesTbl->selectDistinct("brand");
        $id = 0;
        foreach ($brandsList as $key => $value) {
            $category->addMultiOptions(array(
                $value["brand"]."" => $value["brand"].""
            ));
            $id++;
        }

        $category->setLabel('Виробник:')
                ->setRequired(true);
        $category->class = "form-control";
        $this->addElement($category);

        /*
        $this->setEnctype(Zend_Form::ENCTYPE_MULTIPART);
        $image = new Zend_Form_Element_File('image');
        $image->setLabel('Upload an image:');
        //$image->setDestination(BASE_PATH . '/data/uploads')->setRequired(true);
        // ensure only 1 file
        $image->addValidator('Count', false, 1);
        // limit to 100K
        $image->addValidator('Size', false, 102400);
        // only JPEG, PNG, and GIFs
        $image->addValidator('Extension', false, 'jpg,png,gif');
        $this->addElement($image);
        //$image->setRequired(true);
        //$image->addValidator('extension',true,array('gif','messages'=>array(Zend_Validate_File_Extension::NOT_FOUND=>'not a gif image'))); 
        */
        $this->addElement('textarea', 'minicharacteristic', array(
            'label' => 'Короткі характеристики: ', 'class' => "form-control"
        ));
        $this->addElement('textarea', 'characterstic', array(
            'label' => 'Характеристики: ', 'class' => "form-control"
        ));
    }
}

