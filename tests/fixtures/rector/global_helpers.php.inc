<?php

declare(strict_types=1);

use Innobrain\OpenImmo\Dtos\OpenImmo;

$openImmo = new OpenImmo;
$provider = getProvider($openImmo);
$areas = getAreas($openImmo);
$geo = getGeo($openImmo);
