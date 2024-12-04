<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Services;

use Nette\PhpGenerator\PsrPrinter;

class Printer extends PsrPrinter
{
    public int $linesBetweenProperties = 1;
}
