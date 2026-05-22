<?php
declare(strict_types=1);

namespace GDW\AddCodeStore\Helper;

final class GdwModuleMeta
{
    /** @return array{desc:string, config_path:string, config_anchor:string, repo_url:string, docs_url:string} */
    public static function getMeta(): array
    {
        return [
            'desc' => 'Agrega el codigo de website/store como clase en body y permite una clase personalizada.',
            'config_path' => 'adminhtml/system_config/edit/section/gdwweb',
            'config_anchor' => '#gdwweb_addcodestore-link',
            'repo_url' => 'https://github.com/josecruzchavez/GDW_AddCodeStore',
            'docs_url' => 'https://docs.gdw.mx/modulos/gdw_addcodestore',
        ];
    }
}