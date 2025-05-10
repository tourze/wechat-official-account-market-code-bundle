<?php

namespace WechatOfficialAccountMarketCodeBundle\Tests\Integration;

use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;
use WechatOfficialAccountMarketCodeBundle\WechatOfficialAccountMarketCodeBundle;

class IntegrationTestKernel extends Kernel
{
    public function registerBundles(): iterable
    {
        return [
            new FrameworkBundle(),
            new WechatOfficialAccountMarketCodeBundle(),
        ];
    }

    public function registerContainerConfiguration(LoaderInterface $loader): void
    {
        $loader->load(__DIR__ . '/config/config.yaml');
    }
    
    public function getCacheDir(): string
    {
        return sys_get_temp_dir().'/'.md5(__DIR__).'/cache/'.$this->environment;
    }
    
    public function getLogDir(): string
    {
        return sys_get_temp_dir().'/'.md5(__DIR__).'/logs';
    }
} 