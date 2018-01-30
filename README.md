
# Библиотека для работы с API Boxberry для PHP #

## Требования ##
* [PHP 5.4.1 or higher](http://www.php.net/)
* [CURL](http://php.net/manual/ru/book.curl.php)

## Документация ##
http://boxberry.ru/business_solutions/it_solutions/files/api_boxberry.pdf

## Подключение библиотеки и инициализация ##
```php
<?php
    require_once 'boxberry_api/src/autoload.php'; // или свой загрузчик, если есть

    define('API_KEY', '<Ключ АПИ>');

         $client = new \Boxberry\Client\Client();
         $client->setKey(API_KEY);
?>
```
## Использование ##

### Получение статусов отправления по номеру ###
```php
<?php
     ...
     $listStatusesRequest  = $client->getListStatuses();
     $listStatusesRequest->setImId('<Номер отправления>');
     try {
        $listStatusesCollection = $client->execute($listStatusesRequest);
     } catch (Exception $e) {

     }
?>
```
### Создание отправления ###
```php
<?php
     ...
     $parselCreate  = $client->getParselCreate();
     $parsel = new \Boxberry\Models\Parsel();
     /*
        Установка полей отправления из базы
     */
     $parselCreate->setParsel($parsel);

     try {
         $answer = $client->execute($parselCreate);
     } catch (Exception $e) {

     }
?>
```
### Получение списка городов ###
```php
<?php
     ...
    $listCities  = $client->getListCities();

    try {
        $listCitiesCollection = $client->execute($listCities);
    } catch (Exception $e) {

    }
?>
```
