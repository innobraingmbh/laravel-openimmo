<?php

declare(strict_types=1);

use Katalam\OpenImmo\Facades\CodeGenUtil;
use Nette\PhpGenerator\Property;

it('can add description', function () {
    $property = new Property('foo');
    $property->setComment('foobar makes the world go round');

    CodeGenUtil::addDescriptionPart($property, 'really!');

    expect($property->getComment())
        ->toBe('foobar makes the world go round'.PHP_EOL.'really!');
});

it('cannot have empty description', function () {
    $property = new Property('foo');
    $property->setComment('   ');

    CodeGenUtil::addDescriptionPart($property, 'foobar');

    expect($property->getComment())
        ->toBe('foobar');
});

it('cannot add empty description', function () {
    $property = new Property('foo');
    $property->setComment('foo bar');

    CodeGenUtil::addDescriptionPart($property, '   ');

    expect($property->getComment())
        ->toBe('foo bar');
});
