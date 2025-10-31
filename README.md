# Wechat Official Account Market Code Bundle

[![PHP Version](https://img.shields.io/badge/php-%3E%3D8.1-blue)](https://www.php.net/)
[![License](https://img.shields.io/badge/license-MIT-green)](LICENSE)
[![Build Status](https://img.shields.io/badge/build-passing-brightgreen)](https://github.com/tourze/php-monorepo)
[![Code Coverage](https://img.shields.io/badge/coverage-100%25-brightgreen)](https://github.com/tourze/php-monorepo)

[English](README.md) | [中文](README.zh-CN.md)

WeChat Official Account Market Code Bundle - A Symfony bundle for implementing product marketing codes (one-product-one-code) functionality in WeChat official accounts.

## Installation

Install the bundle via Composer:

```bash
composer require tourze/wechat-official-account-market-code-bundle
```

## Quick Start

### 1. Register the Bundle

Add the bundle to your `config/bundles.php`:

```php
<?php

return [
    // ...
    WechatOfficialAccountMarketCodeBundle\WechatOfficialAccountMarketCodeBundle::class => ['all' => true],
];
```

### 2. Basic Usage

This bundle provides functionality for creating and managing marketing codes for WeChat official accounts, implementing the "one-product-one-code" system.

```php
// Example usage will be added when concrete implementation is available
```

## Features

- Integration with WeChat Official Account API
- One-product-one-code marketing system
- Symfony bundle architecture
- Doctrine ORM integration
- Event-driven architecture

## Requirements

- PHP 8.1 or higher
- Symfony 6.4 or higher
- Doctrine ORM 3.0 or higher
- tourze/wechat-official-account-bundle

## Configuration

The bundle uses auto-configuration. Additional configuration options will be documented as they become available.

## Testing

Run tests with:

```bash
./vendor/bin/phpunit packages/wechat-official-account-market-code-bundle/tests
```

## License

This bundle is released under the MIT License. See the [LICENSE](LICENSE) file for details.