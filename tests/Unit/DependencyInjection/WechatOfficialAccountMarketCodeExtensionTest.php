<?php

namespace WechatOfficialAccountMarketCodeBundle\Tests\Unit\DependencyInjection;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use WechatOfficialAccountMarketCodeBundle\DependencyInjection\WechatOfficialAccountMarketCodeExtension;

class WechatOfficialAccountMarketCodeExtensionTest extends TestCase
{
    private WechatOfficialAccountMarketCodeExtension $extension;
    private ContainerBuilder $container;

    protected function setUp(): void
    {
        $this->extension = new WechatOfficialAccountMarketCodeExtension();
        $this->container = new ContainerBuilder();
    }

    /**
     * 测试扩展加载配置并注册服务
     */
    public function testLoad(): void
    {
        $this->extension->load([], $this->container);
        
        // 验证扩展是否正确注册，检查扩展别名
        $this->assertEquals(
            'wechat_official_account_market_code', 
            $this->extension->getAlias()
        );
        
        // 验证服务配置文件是否已加载
        $fileLocator = new FileLocator(__DIR__ . '/../../../src/Resources/config');
        $this->assertTrue(file_exists($fileLocator->locate('services.yaml')));
    }

    /**
     * 测试扩展使用空配置时能否正常工作
     */
    public function testLoadWithEmptyConfigs(): void
    {
        // 使用空配置加载扩展
        $this->extension->load([], $this->container);
        
        // 验证别名是否正确设置
        $this->assertEquals(
            'wechat_official_account_market_code', 
            $this->extension->getAlias()
        );
    }
} 