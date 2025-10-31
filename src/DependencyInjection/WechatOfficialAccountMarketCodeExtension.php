<?php

declare(strict_types=1);

namespace WechatOfficialAccountMarketCodeBundle\DependencyInjection;

use Tourze\SymfonyDependencyServiceLoader\AutoExtension;

/**
 * 微信公众号一物一码营销推广Bundle的依赖注入扩展
 */
class WechatOfficialAccountMarketCodeExtension extends AutoExtension
{
    /**
     * 获取配置文件目录路径
     */
    protected function getConfigDir(): string
    {
        return __DIR__ . '/../Resources/config';
    }
}
