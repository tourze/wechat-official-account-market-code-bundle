<?php

namespace WechatOfficialAccountMarketCodeBundle\Tests\Unit;

use PHPUnit\Framework\TestCase;
use WechatOfficialAccountMarketCodeBundle\DependencyInjection\WechatOfficialAccountMarketCodeExtension;
use WechatOfficialAccountMarketCodeBundle\WechatOfficialAccountMarketCodeBundle;

class WechatOfficialAccountMarketCodeBundleTest extends TestCase
{
    /**
     * 测试Bundle可以正确实例化
     */
    public function testBundleInstantiation(): void
    {
        $bundle = new WechatOfficialAccountMarketCodeBundle();
        $this->assertInstanceOf(WechatOfficialAccountMarketCodeBundle::class, $bundle);
    }

    /**
     * 测试Bundle可以返回正确的容器扩展
     */
    public function testGetContainerExtension(): void
    {
        $bundle = new WechatOfficialAccountMarketCodeBundle();
        $extension = $bundle->getContainerExtension();
        
        // 确保返回的扩展是正确的类型
        $this->assertInstanceOf(WechatOfficialAccountMarketCodeExtension::class, $extension);
        
        // 确保扩展别名正确
        $this->assertEquals('wechat_official_account_market_code', $extension->getAlias());
    }
} 