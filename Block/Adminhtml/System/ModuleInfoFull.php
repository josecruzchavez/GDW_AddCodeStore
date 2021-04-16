<?php
namespace GDW\AddCodeStore\Block\Adminhtml\System;

use GDW\Core\Block\Adminhtml\System\Core\ModuleInfoFull as Fieldset;

class ModuleInfoFull extends Fieldset
{
    const GDW_MODULE_CODE = 'GDW_AddCodeStore';
    const GDW_MODULE_LINK = 'adminhtml/system_config/edit/section/gdwaddcodestore';
    const GDW_MODULE_LINK_SECC = '#gdwaddcodestore_general-link';

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