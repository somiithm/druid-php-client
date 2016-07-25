<?php

/**
 * Created by PhpStorm.
 * User: som
 * Date: 25/7/16
 * Time: 5:16 PM
 */
namespace Druid\Having;

abstract class NumericFilter extends Having
{
    public $aggregation;
    public $value;

    public function __construct($aggregation, $value)
    {
        $this->aggregation = $aggregation;
        $this->value = $value;
    }
}