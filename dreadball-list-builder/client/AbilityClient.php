<?php
/**
 * Created by PhpStorm.
 * User: Bernardo
 * Date: 02/01/2016
 * Time: 18:15
 */

namespace Tabletop\Dreadball\Client;

use Tabletop\Dreadball\Client\Parser\JSONAbilityParser;
use Httpful\Request;

class AbilityClient
{

    private $parser;
    public $uri;

    public function __construct($uriWS)
    {
        $this->uri = $uriWS;
        $this->parser=new JSONAbilityParser();
    }

    public function all(){
        $response = Request::get($this->uri)->expectsJson()->send();

        $abilities = array();
        foreach ($response->body as &$json) {
            $ability = $this->parser->parse($json);
            $abilities[] = $ability;
        }

        return $abilities;
    }
}