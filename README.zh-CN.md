# 微信公众号营销码包

[![PHP Version](https://img.shields.io/badge/php-%3E%3D8.1-blue)](https://www.php.net/)
[![License](https://img.shields.io/badge/license-MIT-green)](LICENSE)
[![Build Status](https://img.shields.io/badge/build-passing-brightgreen)](https://github.com/tourze/php-monorepo)
[![Code Coverage](https://img.shields.io/badge/coverage-100%25-brightgreen)](https://github.com/tourze/php-monorepo)

[English](README.md) | [中文](README.zh-CN.md)

微信公众号营销码包 - 一个用于在微信公众号中实现产品营销码（一物一码）功能的 Symfony 包。

## 安装

通过 Composer 安装包：

```bash
composer require tourze/wechat-official-account-market-code-bundle
```

## 快速开始

### 1. 注册包

将包添加到您的 `config/bundles.php`：

```php
<?php

return [
    // ...
    WechatOfficialAccountMarketCodeBundle\WechatOfficialAccountMarketCodeBundle::class => ['all' => true],
];
```

### 2. 基本用法

此包为微信公众号提供营销码创建和管理功能，实现"一物一码"营销系统。

```php
// 具体实现示例将在功能开发完成后添加
```

## 功能特性

- 与微信公众号 API 集成
- 一物一码营销系统
- Symfony 包架构
- Doctrine ORM 集成
- 事件驱动架构

## 系统要求

- PHP 8.1 或更高版本
- Symfony 6.4 或更高版本
- Doctrine ORM 3.0 或更高版本
- tourze/wechat-official-account-bundle

## 配置

该包使用自动配置。更多配置选项将在功能开发完成后提供文档。

## 测试

运行测试：

```bash
./vendor/bin/phpunit packages/wechat-official-account-market-code-bundle/tests
```

## 许可证

此包基于 MIT 许可证发布。详情请参阅 [LICENSE](LICENSE) 文件。
