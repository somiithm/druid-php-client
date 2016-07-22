<?php

/**
 * Created by PhpStorm.
 * User: som
 * Date: 21/7/16
 * Time: 4:45 PM
 */
namespace  Druid\Aggregator;

class CardinalityAggregator extends FieldBasedAggregator
{
    public $type = "cardinality";

    public function __construct($aggregationMetric, $outputName)
    {
        parent::__construct($aggregationMetric, $outputName);
    }

    public function setByRow(){
        $this->byRow = true;
    }
}