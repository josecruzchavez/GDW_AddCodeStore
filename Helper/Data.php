<?php
namespace GDW\AddCodeStore\Helper;

use GDW\Core\Helper\Data as AbstractHelper;

class Data extends AbstractHelper
{
	const GDW_MODULE_CODE = 'gdw/web_addcodestore/';

	public function isEnabled(?int $storeId = null): bool
	{
		return (bool)$this->getConfigValue(self::GDW_MODULE_CODE . 'enable', $storeId);
	}

	public function getCustomClass(?int $storeId = null): string
	{
		$value = $this->getConfigValue(self::GDW_MODULE_CODE . 'custom_class', $storeId);

		return is_string($value) ? trim($value) : '';
	}
}