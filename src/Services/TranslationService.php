<?php

declare(strict_types=1);

namespace Katalam\OpenImmo\Services;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use InvalidArgumentException;

class TranslationService
{
    protected Collection $classes;

    protected Collection $attributes;

    protected Collection $properties;

    protected Collection $constants;

    public function __construct()
    {
        $this->loadFiles();
    }

    public function loadFiles(): void
    {
        $this->loadClasses();
        $this->loadAttributes();
        $this->loadProperties();
        $this->loadConstants();
    }

    protected function loadClasses(): void
    {
        $file = Storage::get('TranslationMapping/classes.csv');

        $this->classes = $this->loadFile($file);
    }

    protected function loadAttributes(): void
    {
        $file = Storage::get('TranslationMapping/attributes.csv');

        $this->attributes = $this->loadFile($file);
    }

    protected function loadProperties(): void
    {
        $file = Storage::get('TranslationMapping/properties.csv');

        $this->properties = $this->loadFile($file);
    }

    protected function loadConstants(): void
    {
        $file = Storage::get('TranslationMapping/constants.csv');

        $this->constants = $this->loadFile($file);
    }

    protected function loadFile(string $fileContent): Collection
    {
        return collect(explode("\n", $fileContent))
            ->map(fn (string $line) => explode(',', $line))
            ->filter(fn (array $line) => count($line) === 2)
            ->mapWithKeys(fn (array $line) => [$line[0] => $line[1]]);
    }

    public function translateClass(string $key): string
    {
        /** @var string|null $value */
        $value = $this->classes->get($key);

        if ($value === null) {
            throw new InvalidArgumentException('Unknown key: '.$key);
        }

        return $value;
    }

    public function translateAttribute(string $key): string
    {
        /** @var string|null $value */
        $value = $this->attributes->get($key);

        if ($value === null) {
            throw new InvalidArgumentException('Unknown key: '.$key);
        }

        return $value;
    }

    public function translateProperty(string $key): string
    {
        if ($key === '') {
            return '';
        }

        /** @var string|null $value */
        $value = $this->properties->get($key);

        if ($value === null) {
            throw new InvalidArgumentException('Unknown key: '.$key);
        }

        return $value;
    }

    public function translateConstant(string $key): string
    {
        /** @var string|null $value */
        $value = $this->constants->get($key);

        return $value ?? $key;
    }
}
