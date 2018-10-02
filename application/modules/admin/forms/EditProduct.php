<?php

class Admin_Form_EditProduct extends Zend_Form
{
    public function init()
    {
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

        $categoriesTbl = new Shop_Model_DbTable_Type();
        //SELECT DISTINCT type FROM category
        $typesList = $categoriesTbl->fetchAll();
        $id = 0;
        foreach ($typesList as $key => $value) {
            $type->addMultiOptions(array(
                $value["type"]."" => $value["title"].""
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

        $gallery_img = $this->createElement('file','gallery_img[]');
        // ensure only 1 file
        $gallery_img->addValidator('Count', false, 1);
        // limit to 100K
        $gallery_img->addValidator('Size', false, 10240000);
        // only JPEG, PNG, and GIFs
        $gallery_img->addValidator('Extension', false, 'jpg,jpeg,png,gif');
        $gallery_img->setLabel('Картинка:');
        $gallery_img->class = "form-control";
        $this->addElement($gallery_img);

        $this->addElement('text', 'img_name', array(
            'label' => 'Назва картинки: ', 'class' => "form-control"
        ));
        $this->addElement('text', 'img_url', array(
            'label' => 'URL-адреса: ', 'class' => "form-control"
        ));

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

