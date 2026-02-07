<?php

declare(strict_types=1);

use function Innobrain\OpenImmo\Helpers\getProvider;
use Innobrain\OpenImmo\Dtos\OpenImmo;

$openImmo = new OpenImmo;
$provider = getProvider($openImmo);
