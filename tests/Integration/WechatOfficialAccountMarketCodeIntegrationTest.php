<?php

namespace WechatOfficialAccountMarketCodeBundle\Tests\Integration;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use WechatOfficialAccountMarketCodeBundle\WechatOfficialAccountMarketCodeBundle;

class WechatOfficialAccountMarketCodeIntegrationTest extends KernelTestCase
{
    protected static function getKernelClass(): string
    {
        return IntegrationTestKernel::class;
    }

    /**
     * 测试内核能够正确启动并加载Bundle
     */
    public function testKernelBoot(): void
    {
        $kernel = self::bootKernel();
        
        // 确保Bundle已注册
        $bundles = $kernel->getBundles();
        $bundleNames = array_map(fn($bundle) => get_class($bundle), $bundles);
        $this->assertContains(WechatOfficialAccountMarketCodeBundle::class, $bundleNames);
    }

    /**
     * 测试Bundle配置能够正确加载
     */
    public function testBundleConfiguration(): void
    {
        $kernel = self::bootKernel();
        $container = $kernel->getContainer();
        
        // 检查容器参数
        $this->assertTrue($container->hasParameter('kernel.bundles'));
        
        // 确保Bundle已注册到内核
        $bundlesParam = $container->getParameter('kernel.bundles');
        $this->assertArrayHasKey('WechatOfficialAccountMarketCodeBundle', $bundlesParam);
    }
} 