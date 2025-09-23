<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Services;

use Illuminate\Support\Manager;
use Innobrain\OpenImmo\Converters\Concerns\ConverterInterface;
use Innobrain\OpenImmo\Converters\EnterpriseConverter;
use Innobrain\OpenImmo\Dtos\OpenImmo;
use Innobrain\OpenImmo\Enums\ConverterDriver;

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

    public function setOpenImmo(OpenImmo $openImmo): ConverterInterface
    {
        return $this->driver()->setOpenImmo($openImmo);
    }
}
