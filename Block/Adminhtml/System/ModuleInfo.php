<?php
namespace GDW\AddCodeStore\Block\Adminhtml\System;

use GDW\Core\Helper\Data;
use Magento\Config\Block\System\Config\Form\Fieldset;
use Magento\Framework\Data\Form\Element\AbstractElement;

class ModuleInfo extends Fieldset
{
    const MODULE_NAME = 'GDW_AddCodeStore';
    const MODULE_CODE = 'GDW_AddCodeStore';
    
    protected $helpData;

    public function __construct(Data $helpData) {
        $this->helpData = $helpData;
    }

    public function render(AbstractElement $element)
    {
        $name = self::MODULE_NAME;
        $version = self::MODULE_CODE;
        $desc = $this->getDesc();

        return $this->helpData->getInfo($name,$version,$desc);
    }

    public function getDesc()
    {
        return 'agregar el código de tienda en la etiqueta BODY.';
    }
}