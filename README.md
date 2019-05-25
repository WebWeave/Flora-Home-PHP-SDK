# Flora@Home rest api PHP SDK

PHP Client for the Flora@Home rest api

## Installation
This project can easily be installed through Composer.

```
composer require webweave/floraathome-php-sdk
```

## Usage
You need to have an api key, you can get this from your flora@home account.

### Example

```php
use Flora\SDK\Connection;
use Flora\SDK\Flora;

$connection = new Connection('your apikey');
$flora = new Flora($connection);

//Get full product list
$flora->Products()->getProducts();
```
