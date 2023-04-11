<?php
namespace GDW\AddCodeStore\Block\Adminhtml\System;

use GDW\Core\Block\Adminhtml\System\Core\ModuleInfo as Fieldset;

class ModuleInfo extends Fieldset
{
    const GDW_MODULE_CODE = 'GDW_AddCodeStore';

    public function getDesc()
    {
        return 'Agregar el código de tienda en la etiqueta BODY.';
    }
}