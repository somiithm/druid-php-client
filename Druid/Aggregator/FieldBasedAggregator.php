<?php

/**
 * Created by PhpStorm.
 * User: som
 * Date: 21/7/16
 * Time: 4:24 PM
 */
namespace Druid\Aggregator;

abstract class FieldBasedAggregator extends Aggregator
{
    public $fieldName;

    public function __construct($aggregationMetric, $outputName)
    {
        $this->fieldName = $aggregationMetric;
        parent::__construct($outputName);
    }
}