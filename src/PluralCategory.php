<?php

declare(strict_types=1);

namespace Polyglot\Contract\PluralDetector;

interface PluralCategory
{
    public const ZERO = 'zero';
    public const ONE = 'one';
    public const TWO = 'two';
    public const FEW = 'few';
    public const MANY = 'many';
    public const OTHER = 'other';
}
