<?php

declare(strict_types=1);

use Innobrain\OpenImmo\Dtos\OpenImmo;

$openImmo = new OpenImmo;
$provider = getProvider($openImmo);
$result = array_map(fn ($item) => $item, []);
$geo = getGeo($openImmo);
$json = json_encode($provider);
-----
<?php

declare(strict_types=1);

use function Innobrain\OpenImmo\Helpers\getProvider;
use function Innobrain\OpenImmo\Helpers\getGeo;
use Innobrain\OpenImmo\Dtos\OpenImmo;

$openImmo = new OpenImmo;
$provider = getProvider($openImmo);
$result = array_map(fn ($item) => $item, []);
$geo = getGeo($openImmo);
$json = json_encode($provider);
