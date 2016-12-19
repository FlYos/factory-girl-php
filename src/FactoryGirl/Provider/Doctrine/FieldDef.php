<?php

namespace FactoryGirl\Provider\Doctrine;
use Faker\Factory;

/**
 * Contains static methods to define fields as sequences, references etc.
 */
class FieldDef
{
    /**
     * Defines a field to `get()` a named entity from the factory.
     *
     * The normal semantics of `get()` apply.
     * Normally this means that the field gets a fresh instance of the named
     * entity. If a singleton has been defined, `get()` will return that.
     *
     * @param string $name The name of the entity to get.
     * @return callable
     */
    public static function reference($name)
    {
        return function(FixtureFactory $factory) use ($name) {
            return $factory->get($name);
        };
    }

    /**
     * @param string $locale
     *
     * @return \Faker\Generator
     */
    public static function faker($locale = Factory::DEFAULT_LOCALE)
    {
        return Factory::create($locale);
    }
}