<?php

namespace Brukhanda\Lava;

use ReflectionClass;
use ReflectionProperty;

abstract class DTO
{

    public function __construct(array $parameters = [])
    {
        var_dump($parameters);
        $class = new ReflectionClass(static::class);

        foreach ($class->getProperties(ReflectionProperty::IS_PUBLIC) as $reflectionProperty){
            $property = $reflectionProperty->getName();
            $this->{$property} = $parameters[$property];
        }
    }

}
