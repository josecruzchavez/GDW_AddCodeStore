![gdw_opengraph](https://gestiondigitalweb.com/github_assets/gdw_addcodestore/gdw_add_code_store.jpg)

# GDW AddCodeStore para Magento 2
Este módulo tiene la finalidad de agregar el código de tienda y sitio web a la etiqueta BODY, el objetivo es poder diferenciar las tiendas.

## Compatibilidad
✓ Magento 2.3.x, ✓ Magento 2.4.x
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