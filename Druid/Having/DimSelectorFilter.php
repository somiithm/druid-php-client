<?php

/**
 * Created by PhpStorm.
 * User: som
 * Date: 25/7/16
 * Time: 5:21 PM
 */
namespace Druid\Having;

class DimSelectorFilter extends Having
{
    public $type = "dimSelector";
    public $dimension;
    public $value;

    public function __construct($dimension, $value)
    {
        $this->dimension = $dimension;
        $this->value = $value;
    }
}