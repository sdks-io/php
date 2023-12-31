# Pet

Everything about your Pets

Find out more: [http://swagger.io](http://swagger.io)

```php
$petController = $client->getPetController();
```

## Class Name

`PetController`

## Methods

* [Upload File](../../doc/controllers/pet.md#upload-file)
* [Inpet](../../doc/controllers/pet.md#inpet)
* [Update an Pet](../../doc/controllers/pet.md#update-an-pet)
* [Find Pet in the Status](../../doc/controllers/pet.md#find-pet-in-the-status)
* [Find Pets an Tags](../../doc/controllers/pet.md#find-pets-an-tags)
* [Get Pet by Id](../../doc/controllers/pet.md#get-pet-by-id)
* [Update Pet With Form](../../doc/controllers/pet.md#update-pet-with-form)
* [Delete Pet](../../doc/controllers/pet.md#delete-pet)


# Upload File

uploads an image

```php
function uploadFile(int $petId, ?string $additionalMetadata = null, ?FileWrapper $file = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `petId` | `int` | Template, Required | ID of pet to update |
| `additionalMetadata` | `?string` | Form, Optional | Additional data to pass to server |
| `file` | `?FileWrapper` | Form, Optional | file to upload |

## Response Type

[`ApiResponse`](../../doc/models/api-response.md)

## Example Usage

```php
$petId = 152;

$result = $petController->uploadFile($petId);
```


# Inpet

Add a new pet to the store

```php
function inpet(Pet $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`Pet`](../../doc/models/pet.md) | Body, Required | Pet object that needs to be added to the store |

## Response Type

`void`

## Example Usage

```php
$body = PetBuilder::init(
    'name6',
    [
        'photoUrls1'
    ]
)->build();

$petController->inpet($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 405 | Invalid input | `ApiException` |


# Update an Pet

Update an existing pet

```php
function updateAnPet(Pet $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`Pet`](../../doc/models/pet.md) | Body, Required | Pet object that needs to be added to the store |

## Response Type

`void`

## Example Usage

```php
$body = PetBuilder::init(
    'name6',
    [
        'photoUrls1'
    ]
)->build();

$petController->updateAnPet($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Invalid ID supplied | `ApiException` |
| 404 | Pet not found | `ApiException` |
| 405 | Validation exception | `ApiException` |


# Find Pet in the Status

Multiple status values can be provided with comma separated strings

```php
function findPetInTheStatus(array $status): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `status` | [`string[] (Status2Enum)`](../../doc/models/status-2-enum.md) | Query, Required | Status values that need to be considered for filter |

## Response Type

[`Pet[]`](../../doc/models/pet.md)

## Example Usage

```php
$status = [
    Status2Enum::PENDING,
    Status2Enum::SOLD,
    Status2Enum::AVAILABLE
];

$result = $petController->findPetInTheStatus($status);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Invalid status value | `ApiException` |


# Find Pets an Tags

**This endpoint is deprecated.**

Multiple tags can be provided with comma separated strings. Use tag1, tag2, tag3 for testing.

```php
function findPetsAnTags(array $tags): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `tags` | `string[]` | Query, Required | Tags to filter by |

## Response Type

[`Pet[]`](../../doc/models/pet.md)

## Example Usage

```php
$tags = [
    'tags5',
    'tags6'
];

$result = $petController->findPetsAnTags($tags);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Invalid tag value | `ApiException` |


# Get Pet by Id

Returns a single pet

```php
function getPetById(int $petId): Pet
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `petId` | `int` | Template, Required | ID of pet to return |

## Response Type

[`Pet`](../../doc/models/pet.md)

## Example Usage

```php
$petId = 152;

$result = $petController->getPetById($petId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Invalid ID supplied | `ApiException` |
| 404 | Pet not found | `ApiException` |


# Update Pet With Form

Updates a pet in the store with form data

```php
function updatePetWithForm(int $petId, ?string $name = null, ?string $status = null): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `petId` | `int` | Template, Required | ID of pet that needs to be updated |
| `name` | `?string` | Form, Optional | Updated name of the pet |
| `status` | `?string` | Form, Optional | Updated status of the pet |

## Response Type

`void`

## Example Usage

```php
$petId = 152;

$petController->updatePetWithForm($petId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 405 | Invalid input | `ApiException` |


# Delete Pet

Deletes a pet

```php
function deletePet(int $petId, ?string $apiKey = null): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `petId` | `int` | Template, Required | Pet id to delete |
| `apiKey` | `?string` | Header, Optional | - |

## Response Type

`void`

## Example Usage

```php
$petId = 152;

$petController->deletePet($petId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Invalid ID supplied | `ApiException` |
| 404 | Pet not found | `ApiException` |

