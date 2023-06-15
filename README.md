
# Getting Started with Swagger Petstore

## Introduction

This is a sample server Petstore server.  You can find out more about Swagger at [http://swagger.io](http://swagger.io) or on [irc.freenode.net, #swagger](http://swagger.io/irc/).  For this sample, you can use the api key `special-key` to test the authorization filters.

Find out more about Swagger: [http://swagger.io](http://swagger.io)

## Install the Package

Run the following command to install the package and automatically add the dependency to your composer.json file:

```php
composer require "apimatic/repo-test-sdk:1.0.7"
```

Or add it to the composer.json file manually as given below:

```php
"require": {
    "apimatic/repo-test-sdk": "1.0.7"
}
```

You can also view the package at:
https://packagist.org/packages/apimatic/repo-test-sdk#1.0.7

## Initialize the API Client

**_Note:_** Documentation for the client can be found [here.](https://www.github.com/sdks-io/php/tree/1.0.7/doc/client.md)

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| `environment` | Environment | The API environment. <br> **Default: `Environment.PRODUCTION`** |
| `timeout` | `int` | Timeout for API calls in seconds.<br>*Default*: `0` |
| `enableRetries` | `bool` | Whether to enable retries and backoff feature.<br>*Default*: `false` |
| `numberOfRetries` | `int` | The number of retries to make.<br>*Default*: `0` |
| `retryInterval` | `float` | The retry time interval between the endpoint calls.<br>*Default*: `1` |
| `backOffFactor` | `float` | Exponential backoff factor to increase interval between retries.<br>*Default*: `2` |
| `maximumRetryWaitTime` | `int` | The maximum wait time in seconds for overall retrying requests.<br>*Default*: `0` |
| `retryOnTimeout` | `bool` | Whether to retry on request timeout.<br>*Default*: `true` |
| `httpStatusCodesToRetry` | `array` | Http status codes to retry against.<br>*Default*: `408, 413, 429, 500, 502, 503, 504, 521, 522, 524` |
| `httpMethodsToRetry` | `array` | Http methods to retry against.<br>*Default*: `'GET', 'PUT'` |
| `password` | `string` |  |

The API client can be initialized as follows:

```php
$client = SwaggerPetstoreClientBuilder::init()
    ->password('Password')
    ->environment('production')
    ->build();
```

## Authorization

This API uses `Custom Authentication`.

## List of APIs

* [Pet](https://www.github.com/sdks-io/php/tree/1.0.7/doc/controllers/pet.md)
* [Store](https://www.github.com/sdks-io/php/tree/1.0.7/doc/controllers/store.md)
* [User](https://www.github.com/sdks-io/php/tree/1.0.7/doc/controllers/user.md)

## Classes Documentation

* [Utility Classes](https://www.github.com/sdks-io/php/tree/1.0.7/doc/utility-classes.md)
* [ApiException](https://www.github.com/sdks-io/php/tree/1.0.7/doc/api-exception.md)
* [HttpRequest](https://www.github.com/sdks-io/php/tree/1.0.7/doc/http-request.md)
* [HttpResponse](https://www.github.com/sdks-io/php/tree/1.0.7/doc/http-response.md)

