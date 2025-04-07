<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Services;

use Illuminate\Support\Manager;
use Katalam\OpenImmo\Converters\Concerns\ConverterInterface;
use Katalam\OpenImmo\Converters\EnterpriseConverter;
use Katalam\OpenImmo\Dtos\OpenImmo;
use Katalam\OpenImmo\Enums\ConverterDriver;

class FormatConverterService extends Manager implements ConverterInterface
{
    public function convert(OpenImmo $openImmo)
    {
        return $this->driver()->convert($openImmo);
    }

    public function createEnterpriseDriver(): EnterpriseConverter
    {
        return new EnterpriseConverter;
    }

    /**
     * @param  string|null|ConverterDriver  $driver
     */
    public function driver($driver = null): mixed
    {
        if ($driver instanceof ConverterDriver) {
            return parent::driver($driver->value);
        }

        return parent::driver($driver);
    }

    public function getDefaultDriver(): string
    {
        return ConverterDriver::Enterprise->value;
    }
}
