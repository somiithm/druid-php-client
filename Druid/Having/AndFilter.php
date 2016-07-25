<?php

/**
 * Created by PhpStorm.
 * User: som
 * Date: 25/7/16
 * Time: 5:26 PM
 */
namespace Druid\Having;

class AndFilter extends Having
{
    public $type = "and";
    public $havingSpecs;

    public function addHaving(Having $having){
        $this->havingSpecs[] = $having;
        return $this;
    }
}