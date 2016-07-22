<?php
/**
 * Created by PhpStorm.
 * User: som
 * Date: 22/7/16
 * Time: 4:14 PM
 */

namespace Druid;



class GroupByQuery extends Druid
{
    public $queryType = "groupBy";
    public $dimension;
    public $granularity;
    public $aggregations;
    public $intervals;

    public function __construct($dataSource, $dimension, $granularity, $aggregations, $intervals)
    {
        $this->dimension = $dimension;
        $this->granularity = $granularity;
        $this->aggregations = $aggregations;
        $this->intervals = $intervals;
        parent::__construct($dataSource);
    }

    public function addLimitSpec($limitSpec){
        $this->limitSpec = $limitSpec;
        return $this;
    }

    public function addFilter($filter){
        $this->filter = $filter;
        return $this;
    }

    public function addPostAggregation($postAggregation){
        if(!isset($this->postAggregations)) $this->postAggregations = [];
        $this->postAggregations[] = $postAggregation;
        return $this;
    }

    public function addHaving($having){
        //TODO
    }

    public function addContext($context){
        //TODO
    }
}