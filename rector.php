<?php

declare(strict_types=1);

use Rector\CodeQuality\Rector\Class_\InlineConstructorDefaultToPropertyRector;
use Rector\Config\RectorConfig;
use Rector\Php83\Rector\ClassMethod\AddOverrideAttributeToOverriddenMethodsRector;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ])
    ->withRules([
        InlineConstructorDefaultToPropertyRector::class,
    ])
    ->withSkip([
        AddOverrideAttributeToOverriddenMethodsRector::class,
    ])
    ->withPhpSets(
        php83: true
    )
    ->withPreparedSets(
        deadCode: true,
        codeQuality: true,
        earlyReturn: true,
        typeDeclarations: true,
        privatization: true,
    );
