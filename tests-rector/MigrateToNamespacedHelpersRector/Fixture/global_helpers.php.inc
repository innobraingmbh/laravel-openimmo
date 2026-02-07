<?php

declare(strict_types=1);

use Innobrain\OpenImmo\Dtos\OpenImmo;

$openImmo = new OpenImmo;
$provider = getProvider($openImmo);
$areas = getAreas($openImmo);
$geo = getGeo($openImmo);
-----
<?php

declare(strict_types=1);

use function Innobrain\OpenImmo\Helpers\getProvider;
use function Innobrain\OpenImmo\Helpers\getAreas;
use function Innobrain\OpenImmo\Helpers\getGeo;
use Innobrain\OpenImmo\Dtos\OpenImmo;

$openImmo = new OpenImmo;
$provider = getProvider($openImmo);
$areas = getAreas($openImmo);
$geo = getGeo($openImmo);
