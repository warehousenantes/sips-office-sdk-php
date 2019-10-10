# worldline/sips-office-sdk-php

This package provides a PHP implementation for the Sips Office JSON, Paypage JSON and Walletpage JSON API's.

> :warning: This library is written for Sips 2.0 and is not compatible with Sips 1.0.

![Github last commit](https://img.shields.io/github/last-commit/nicolasros/sips-office-sdk-php) \
![GitHub release (latest by date including pre-releases)](https://img.shields.io/github/v/release/nicolasros/sips-office-sdk-php?include_prereleases) \
![GitHub issues](https://img.shields.io/github/issues-raw/nicolasros/sips-office-sdk-php)
![GitHub closed issues](https://img.shields.io/github/issues-closed-raw/nicolasros/sips-office-sdk-php) \
![GitHub](https://img.shields.io/github/license/nicolasros/sips-office-sdk-php)

## Installation
The easiest way to install os through [Composer](http://getcomposer.org).
Use composer to install the latest version of the library.
```bash
composer require worldline/sips-office-sdk
```
After installing, don't forget to require composer's autoloader if needed.
```php
require_once 'vendor/autoloader.php';
```

## Usage
### Setup
First, set up the environment.
Depending on the API you wish to use, there is a *PaypageEnvironment*, *OfficeEnvironment* and *WalletEnvironment*. 
Each API can be used in production (*PROD*) and in test (*TEST*)
```php
$env = new PaypageEnvironment("PROD");
```
Then use this environment to set up the client.
```php
$client = new SipsClient($env, "merchantId", "secretKey", keyVersion);
```

### Use included functions.
#### doCardOrder
description
```php
example
```
#### doWalletOrder
description
```php
example
```
#### doGetBcmcIntent
description
```php
example
```
#### doGetBcmcQr
description
```php
example
```
#### doPaymentProviderFinalize
description
```php
example
```
#### doGetTransactionData
description
```php
example
```
#### doRefund
description
```php
example
```
#### doDuplicate
description
```php
example
```
#### doAddCard
description
```php
example
```
#### doGetWalletData
description
```php
example
```
#### doGetPaymentMean
description
```php
example
```
#### doDeletePaymentMean
description
```php
example
```
#### doSignoffWallet
description
```php
example
```

### Advanced requests.
blabla
### Additional functions.
#### getLastRequestAsJSON()
 blabla
 ```php
 voorbeeld
 ```
 #### getLastResponseAsJSON()
 blabla
 ```php
 voorbeeld
 ```