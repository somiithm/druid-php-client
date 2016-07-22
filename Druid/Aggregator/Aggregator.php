<?php

/**
 * Created by PhpStorm.
 * User: som
 * Date: 21/7/16
 * Time: 4:11 PM
 */
namespace Druid\Aggregator;

abstract class Aggregator
{
    public $type;
    public $name;
    public function __construct($outputName)
    {
        $this->name = $outputName;
    }
}