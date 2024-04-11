<?php

declare(strict_types=1);

use BenjaminHaeberli\PhpSkeleton\Example;

it('foo', function () {
    $example = new Example();

    $result = $example->foo();

    expect($result)->toBe('bar');
});
