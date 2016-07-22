<?php

/**
 * Created by PhpStorm.
 * User: som
 * Date: 21/7/16
 * Time: 4:49 PM
 */
namespace Druid\PostAggregator;

class ConstantPostAggregator extends PostAggregator
{
    protected $type = "constant";

    public function __construct($outputName,$value)
    {
        $this->value = $value;
        parent::__construct($outputName);
    }
}