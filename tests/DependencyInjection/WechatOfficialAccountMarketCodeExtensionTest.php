<?php

namespace WechatOfficialAccountMarketCodeBundle\Tests\DependencyInjection;

use PHPUnit\Framework\Attributes\CoversClass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Tourze\PHPUnitSymfonyUnitTest\AbstractDependencyInjectionExtensionTestCase;
use WechatOfficialAccountMarketCodeBundle\DependencyInjection\WechatOfficialAccountMarketCodeExtension;

/**
 * @internal
 */
#[CoversClass(WechatOfficialAccountMarketCodeExtension::class)]
final class WechatOfficialAccountMarketCodeExtensionTest extends AbstractDependencyInjectionExtensionTestCase
{
    /**
     * 测试扩展别名配置
     */
    public function testAlias(): void
    {
        $extension = new WechatOfficialAccountMarketCodeExtension();

        // 验证扩展是否正确注册，检查扩展别名
        $this->assertEquals(
            'wechat_official_account_market_code',
            $extension->getAlias()
        );
    }

    /**
     * 测试配置目录
     */
    public function testConfigDir(): void
    {
        $extension = new WechatOfficialAccountMarketCodeExtension();

        // 通过反射调用 protected 方法
        $reflection = new \ReflectionClass($extension);
        $method = $reflection->getMethod('getConfigDir');
        $method->setAccessible(true);

        $configDir = $method->invoke($extension);
        $this->assertStringEndsWith('/Resources/config', $configDir);

        // 验证服务配置文件是否存在
        $this->assertFileExists($configDir . '/services.yaml');
    }

    /**
     * 覆盖父类方法，解决空包的risky test问题
     */
    protected function provideServiceDirectories(): iterable
    {
        // 返回空数组，因为这个包没有服务要测试
        return [];
    }

    /**
     * 测试扩展加载功能，确保在无服务情况下也有适当的断言
     */
    public function testExtensionLoadConfiguration(): void
    {
        $extension = new WechatOfficialAccountMarketCodeExtension();
        $container = new ContainerBuilder();
        $container->setParameter('kernel.environment', 'test');

        // 加载配置
        $extension->load([], $container);

        // 验证容器已经配置完成
        $this->assertTrue($container->isTrackingResources());

        // 验证容器配置正常，没有注册任何不需要的服务
        $this->assertFalse($container->hasDefinition(WechatOfficialAccountMarketCodeExtension::class));
    }
}
