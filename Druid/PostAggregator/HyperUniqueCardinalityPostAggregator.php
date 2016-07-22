<?php

/**
 * Created by PhpStorm.
 * User: som
 * Date: 21/7/16
 * Time: 4:51 PM
 */
namespace Druid\PostAggregator;

class HyperUniqueCardinalityPostAggregator extends PostAggregator
{
    protected $type = "hyperUniqueCardinality";

    public function __construct($outputName,$fieldName)
    {
        $this->fieldName = $fieldName;
        parent::__construct($outputName);
    }
}