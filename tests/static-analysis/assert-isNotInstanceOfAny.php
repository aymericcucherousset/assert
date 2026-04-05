<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @param mixed $value
 * @param array<class-string> $classes
 */
function isNotInstanceOfAny($value, array $classes): mixed
{
    Assert::isNotInstanceOfAny($value, $classes);

    return $value;
}

/**
 * @param mixed $value
 * @param array<class-string> $classes
 */
function nullOrIsNotInstanceOfAny($value, array $classes): mixed
{
    Assert::nullOrIsNotInstanceOfAny($value, $classes);

    return $value;
}

/**
 * @param mixed $value
 * @param array<class-string> $classes
 */
function allIsNotInstanceOfAny($value, array $classes): mixed
{
    Assert::allIsNotInstanceOfAny($value, $classes);

    return $value;
}

/**
 * @param mixed $value
 * @param array<class-string> $classes
 */
function allNullOrIsNotInstanceOfAny($value, array $classes): mixed
{
    Assert::allNullOrIsNotInstanceOfAny($value, $classes);

    return $value;
}
