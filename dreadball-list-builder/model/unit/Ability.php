<?php
namespace Tabletop\Dreadball\Unit;

interface Ability
{

    public function getName();

}

class  DefaultAbility implements Ability
{

    public $_name;

    public function __construct($name) {
        $this->_name = $name;
    }

    public function getName(){
        return $this->_name;
    }

}