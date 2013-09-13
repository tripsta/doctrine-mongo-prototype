<?php

require 'vendor/doctrine/common/lib/Doctrine/Common/ClassLoader.php';

use Doctrine\Common\ClassLoader,
    Doctrine\Common\Annotations\AnnotationReader,
    Doctrine\ODM\MongoDB\DocumentManager,
    Doctrine\MongoDB\Connection,
    Doctrine\ODM\MongoDB\Configuration,
    Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver,
    Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

// ODM Classes
$classLoader = new ClassLoader('Doctrine\ODM\MongoDB\Mapping\Annotations', 'vendor/doctrine/mongodb-odm/lib');
$classLoader->register();

// ODM Classes
$classLoader = new ClassLoader('Doctrine\ODM\MongoDB', 'vendor/doctrine/mongodb-odm/lib');
$classLoader->register();


// Annotations Classes
$classLoader = new ClassLoader('Doctrine\Common\Annotations', 'vendor/doctrine/annotations/lib');
$classLoader->register();

// Annotations Classes
$classLoader = new ClassLoader('Doctrine\Common\Lexer', 'vendor/doctrine/lexer/lib');
$classLoader->register();

// Common Classes
$classLoader = new ClassLoader('Doctrine\Common', 'vendor/doctrine/common/lib');
$classLoader->register();

// MongoDB Classes
$classLoader = new ClassLoader('Doctrine\MongoDB', 'vendor/doctrine/mongodb/lib');
$classLoader->register();


// Document classes
$classLoader = new ClassLoader('Documents', __DIR__);
$classLoader->register();

$config = new Configuration();
$config->setProxyDir(__DIR__ . '/cache');
$config->setProxyNamespace('Proxies');

$config->setHydratorDir(__DIR__ . '/cache');
$config->setHydratorNamespace('Hydrators');

$reader = new AnnotationReader();
$config->setMetadataDriverImpl(new AnnotationDriver($reader, __DIR__ . '/Documents'));

$dm = DocumentManager::create(new Connection(), $config);

AnnotationDriver::registerAnnotationClasses();
