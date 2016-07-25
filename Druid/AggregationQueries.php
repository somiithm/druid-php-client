<?php
/**
 * Created by PhpStorm.
 * User: som
 * Date: 22/7/16
 * Time: 5:46 PM
 */

namespace Druid;


abstract class AggregationQueries extends Druid
{
    public $intervals;
    public $granularity;
    public $aggregations;

    public function __construct($dataSource, $granularity, $aggregations, $intervals)
    {
        if(is_array($intervals)) $this->intervals = $intervals;
        else $this->intervals = array($intervals);

        $this->granularity = $granularity;

        if(is_array($aggregations)) $this->aggregations = $aggregations;
        else $this->aggregations = array($aggregations);

        parent::__construct($dataSource);
    }

    public function addPostAggregation($postAggregation){
        if(!isset($this->postAggregations)) $this->postAggregations = [];
        $this->postAggregations[] = $postAggregation;
        return $this;
    }

    public function context(Context $context){
        $this->context = $context;
        return $this;
    }
}