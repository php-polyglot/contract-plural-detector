<?php

declare(strict_types=1);

namespace Polyglot\Contract\PluralDetector;

interface PluralDetector
{
    /**
     * @param mixed $number Recommend use float or int
     * @return string @see Polyglot\Contract\LocalePluralDetector\PluralCategory constants
     */
    public function detect($number): string;

    /**
     * @return iterable<string> @see Polyglot\Contract\LocalePluralDetector\PluralCategory constants
     */
    public function getAllowedCategories(): iterable;
}
