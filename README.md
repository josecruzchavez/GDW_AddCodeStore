![gdw_opengraph](https://medios.gdw.mx/github_assets/gdw_addcodestore/gdw_add_code_store.jpg)

# GDW AddCodeStore para Magento 2
[![Latest Stable Version](https://img.shields.io/packagist/v/gdw/addcodestore?style=for-the-badge)](https://packagist.org/packages/gdw/addcodestore) [![PHP Version Require](https://img.shields.io/packagist/dependency-v/gdw/addcodestore/php?style=for-the-badge)](https://packagist.org/packages/gdw/addcodestore) [![Magento Framework Require](https://img.shields.io/packagist/dependency-v/gdw/addcodestore/magento%2Fframework?style=for-the-badge)](https://packagist.org/packages/gdw/addcodestore) [![License](https://img.shields.io/packagist/l/gdw/addcodestore?style=for-the-badge)](https://packagist.org/packages/gdw/addcodestore)





Este módulo tiene la finalidad de agregar el código de tienda y sitio web a la etiqueta BODY, el objetivo es poder diferenciar las tiendas.

## Compatibilidad
✓ Magento 2.4.4+ (rama 4.4.x)
<br/>

###### Ejecuta los siguientes comandos en la ruta base de Magento.

### Instalación

```
composer require gdw/addcodestore

php bin/magento module:enable GDW_AddCodeStore
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy
php bin/magento cache:flush
```

### Actualización

```
composer update gdw/addcodestore

php bin/magento module:enable GDW_AddCodeStore
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy
php bin/magento cache:flush
```

### Eliminación

```
php bin/magento module:disbale GDW_AddCodeStore
composer remove gdw/addcodestore
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy
php bin/magento cache:flush
```

### Expresiones de gratitud

* 📢 Comenta a otros sobre este proyecto.
* 👨🏽‍💻 Da las gracias públicamente.
* [🍺 Invítame una cerveza.](https://www.paypal.me/gestiondigitalweb)

### Otros enlaces
* [Sitio web](https://gdw.com/?utm_source=github&utm_medium=gdw&utm_campaign=core&utm_id=link)
* [Listado de Módulos](https://gdw.mx/modulos/)
* [Facebook](https://www.facebook.com/GestionDigitalWeb)
* [Youtube](https://www.youtube.com/c/Gestiondigitalweb)


### Documentación

- [https://docs.gdw.mx/modulos/gdw_addcodestore](https://docs.gdw.mx/modulos/gdw_addcodestore)

### Changelog
Consulta el changelog del módulo en:

- [https://docs.gdw.mx/modulos/gdw_addcodestore/changelog](https://docs.gdw.mx/modulos/gdw_addcodestore/changelog)
