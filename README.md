# GDW AddCodeStore para Magento 2
Este módulo tiene la finalidad de agregar el código de tienda y sitio web a la etiqueta BODY, el objetivo es poder diferenciar las tiendas.

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

### Expresiones de Gratitud

* Comenta a otros sobre este proyecto 📢
* [Invítame una cerveza 🍺](https://www.paypal.me/gestiondigitalweb). 
* Da las gracias públicamente. 
