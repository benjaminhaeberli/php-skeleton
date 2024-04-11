<?php

declare(strict_types=1);

use BenjaminHaeberli\PhpSkeleton\Example;
use Tests\TestCase;

uses(TestCase::class);

it('foo', function (): void {
    $example = new Example();

    $result = $example->foo();

    expect($result)->toBe('bar');
});
