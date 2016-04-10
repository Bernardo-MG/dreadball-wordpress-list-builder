<?php

namespace Wandrell\Tabletop\Dreadball\Test;

use Tabletop\Dreadball\Client\Parser\JSONAbilityParser;
use Tabletop\Dreadball\Unit\DefaultAbility;

class DummyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * A dummy test that calls a beacon method ensuring the class is autolaoded.
     *
     * @see https://github.com/cpliakas/php-project-starter/issues/19
     * @see https://github.com/cpliakas/php-project-starter/issues/21
     */
    public function testAutoload()
    {
        $parser = new JSONAbilityParser();
        $json = "{\"name\":\"ability_name\"}";
        // TODO: Use a mock
        $jsonResponse = new DefaultAbility("ability_name");

        $result = $parser->parse($jsonResponse);

        $this->assertEquals("ability_name", $result->getName());
    }
}