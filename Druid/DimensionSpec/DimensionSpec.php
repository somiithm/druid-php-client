<?php

/**
 * Created by PhpStorm.
 * User: som
 * Date: 22/7/16
 * Time: 2:14 PM
 */
namespace Druid\DimensionSpec;

class DimensionSpec
{
    public $type = "default";
    public $dimension;
    public $outputName;
    public function __construct($dimension, $outputName)
    {
        $this->dimension = $dimension;
        $this->outputName = $outputName;
    }
}