<?php
namespace GDW\AddCodeStore\Block\Adminhtml\System;

use GDW\Core\Helper\Data;
use Magento\Config\Block\System\Config\Form\Fieldset;
use Magento\Framework\Data\Form\Element\AbstractElement;

class ModuleInfoFull extends Fieldset
{
    const MODULE_NAME = 'GDW_AddCodeStore';
    const MODULE_CODE = 'GDW_AddCodeStore';
    
    protected $helpData;

    public function __construct(Data $helpData) 
    {
        $this->helpData = $helpData;
    }

    public function render(AbstractElement $element)
    {
        $name = self::MODULE_NAME;
        $version = self::MODULE_CODE;
        $desc = $this->getDescFull();       
        $link = $this->helpData->getAdminUrl().'system_config/edit/section/gdwaddcodestore/#gdwaddcodestore_general-link';
        return $this->helpData->getInfoFull($name, $version, $desc, $link);
    }

    public function getDescFull()
    {
        $html = 
<<<HTML
    <p>Si esta activo el módulo, se mostarrá el código del sitio web y de la tienda en la etiqueta BODY del front.</p>
    <p>También se agregará la case declarada por tienda.</p>
HTML;
        return $html;
    }
}