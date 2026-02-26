<?php

declare(strict_types=1);

namespace Innobrain\OpenImmo\Services;

use Illuminate\Support\Collection;
use InvalidArgumentException;

class TranslationService
{
    protected Collection $classes;

    protected Collection $attributes;

    protected Collection $properties;

    protected Collection $constants;

    protected Collection $stubs;

    public function __construct()
    {
        $this->loadFiles();

        $this->stubs = collect([
            'classes' => collect(),
            'attributes' => collect(),
            'properties' => collect(),
            'constants' => collect(),
        ]);
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
        $file = $this->readTranslationFile('classes.csv');

        $this->classes = $this->loadFile($file);
    }

    protected function loadAttributes(): void
    {
        $file = $this->readTranslationFile('attributes.csv');

        $this->attributes = $this->loadFile($file);
    }

    protected function loadProperties(): void
    {
        $file = $this->readTranslationFile('properties.csv');

        $this->properties = $this->loadFile($file);
    }

    protected function loadConstants(): void
    {
        $file = $this->readTranslationFile('constants.csv');

        $this->constants = $this->loadFile($file);
    }

    protected function readTranslationFile(string $filename): string
    {
        $path = storage_path('app/TranslationMapping/'.$filename);

        if (! file_exists($path)) {
            return '';
        }

        return (string) file_get_contents($path);
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
        if ($this->stubs->get('classes')->has($key)) {
            return (string) $this->stubs->get('classes')->get($key);
        }

        /** @var string|null $value */
        $value = $this->classes->get($key);

        throw_if($value === null, InvalidArgumentException::class, 'Unknown class key: '.$key);

        return $value;
    }

    public function translateAttribute(string $key): string
    {
        if ($this->stubs->get('attributes')->has($key)) {
            return (string) $this->stubs->get('attributes')->get($key);
        }

        /** @var string|null $value */
        $value = $this->attributes->get($key);

        throw_if($value === null, InvalidArgumentException::class, 'Unknown attribute key: '.$key);

        return $value;
    }

    public function translateProperty(string $key): string
    {
        if ($key === '') {
            return '';
        }

        if ($this->stubs->get('properties')->has($key)) {
            return (string) $this->stubs->get('properties')->get($key);
        }

        /** @var string|null $value */
        $value = $this->properties->get($key);

        throw_if($value === null, InvalidArgumentException::class, 'Unknown property key: '.$key);

        return $value;
    }

    public function translateConstant(string $key): string
    {
        if ($this->stubs->get('constants')->has($key)) {
            return (string) $this->stubs->get('constants')->get($key);
        }

        /** @var string|null $value */
        $value = $this->constants->get($key);

        return $value ?? $key;
    }

    public function fake(array $data): self
    {
        $this->stubs = collect([
            'classes' => collect(data_get($data, 'classes', [])),
            'attributes' => collect(data_get($data, 'attributes', [])),
            'properties' => collect(data_get($data, 'properties', [])),
            'constants' => collect(data_get($data, 'constants', [])),
        ]);

        return $this;
    }

    public function addFakeClass(string $key, ?string $value = null): self
    {
        if (func_num_args() === 1) {
            $value = $key;
        }

        $this->stubs->get('classes')->put($key, $value);

        return $this;
    }

    public function addFakeAttribute(string $key, ?string $value = null): self
    {
        if (func_num_args() === 1) {
            $value = $key;
        }

        $this->stubs->get('attributes')->put($key, $value);

        return $this;
    }

    public function addFakeProperty(string $key, ?string $value = null): self
    {
        if (func_num_args() === 1) {
            $value = $key;
        }

        $this->stubs->get('properties')->put($key, $value);

        return $this;
    }

    public function addFakeConstant(string $key, ?string $value = null): self
    {
        if (func_num_args() === 1) {
            $value = $key;
        }

        $this->stubs->get('constants')->put($key, $value);

        return $this;
    }
}
