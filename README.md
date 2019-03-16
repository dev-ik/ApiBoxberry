# Библиотека для работы с API Boxberry для PHP #

## Требования ##
* [PHP 5.4.1 or higher](http://www.php.net/)
* [CURL](http://php.net/manual/ru/book.curl.php)

## Документация ##
http://boxberry.ru/business_solutions/it_solutions/files/api_boxberry.pdf

## Подключение библиотеки и инициализация ##
```php
<?php
   ...
    require_once 'boxberry_api/autoload.php';
    $client = new \Boxberry\Client\Client();
    $client->setKey('<Ключ АПИ>');
    ...
?>
```
## Использование ##

### Получение статусов отправления по номеру ###
```php
<?php
     ...
     $listStatusesRequest  = $client->getListStatuses();
     $listStatusesRequest->setImId('<Номер отправления>');
     $listStatusesCollection = $client->execute($listStatusesRequest);
     ...
?>
```
### Создание отправления ###
```php
<?php
     ...
     $parselCreate  = $client->getParselCreate();
     $parsel = new \Boxberry\Models\Parsel();
     /*
        Установка полей отправления
     */
     $parselCreate->setParsel($parsel);
     $response = $client->execute($parselCreate);
     ...
?>
```
### Получение списка городов ###
```php
<?php
    ...
    $listCities  = $client->getListCities();
    $listCitiesCollection = $client->execute($listCities);
    ...
?>
```
