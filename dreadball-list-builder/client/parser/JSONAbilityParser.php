<?php

namespace Tabletop\Dreadball\Client\Parser;

use Tabletop\Dreadball\Unit;

class JSONAbilityParser
{
    /**
     * A method used to test whether this class is autoloaded.
     *
     * @return bool
     *
     * @see \Tabletop\Dreadball\Test\DummyTest
     */
    public function parse($json)
    {
        $parsed = new Ability();

        $parsed->name = $json->name;

        return $parsed;
    }
}