# Saga Serializers Bridge

## Table Of Contents
- [Requirements](#requirements)
- [About package](#about-package)
- [Installation](#installation)
- [Usage](#usage)
- [License](#license)

## Requirements  
- php: >= 7.1
- [phpsagas/orchestrator](https://github.com/phpsagas/orchestrator)
- symfony/serializer: ^4.0 | ^5.0

## About package
This component is the part of [phpsagas framework](https://github.com/phpsagas).  
The package contains implementation of saga serializers based on [symfony/serializer](https://packagist.org/packages/symfony/serializer).

## Installation
You can install the package using [Composer](https://getcomposer.org/):
```bash
composer require phpsagas/serializer-bridge
```

## Usage
You can use `MessagePayloadJsonSerializer` as `MessagePayloadSerializerInterface`, `SagaSerializer` as `SagaSerializerInterface` implementations.

## License
Saga serializers bridge is released under the [MIT license](LICENSE). 
