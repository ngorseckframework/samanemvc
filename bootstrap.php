<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager,
    Doctrine\ORM\Configuration;

require_once "vendor/autoload.php";
require "config/database.php";
/**
 * Dev Mode
 */
$cache = new \Doctrine\Common\Cache\ArrayCache;
/**
 * Prod Mode
 */
//$cache = new \Doctrine\Common\Cache\ApcCache;

$config = new Configuration;
$config->setMetadataCacheImpl($cache);
$driverImpl = $config->newDefaultAnnotationDriver(__DIR__."/src/entities/");
$config->setMetadataDriverImpl($driverImpl);
$config->setQueryCacheImpl($cache);
$config->setProxyDir(__DIR__.'/cache/proxies/');
$config->setProxyNamespace('Samane\Proxies');
/**
 * Dev Mode
 */
$config->setAutoGenerateProxyClasses(true);

/**
 * Prod Mode
 */
//$config->setAutoGenerateProxyClasses(false);

$entityManager = EntityManager::create($orm, $config);