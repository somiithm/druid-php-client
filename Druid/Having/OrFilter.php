<?php

/**
 * Created by PhpStorm.
 * User: som
 * Date: 25/7/16
 * Time: 5:28 PM
 */
namespace Druid\Having;

class OrFilter extends Having
{
    public $type = "or";
    public $havingSpecs;

    public function addHaving(Having $having){
        $this->havingSpecs[] = $having;
        return $this;
    }
}