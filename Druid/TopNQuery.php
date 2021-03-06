<?php
/**
 * Created by PhpStorm.
 * User: som
 * Date: 22/7/16
 * Time: 3:50 PM
 */

namespace Druid;


class TopNQuery extends AggregationQueries
{
    public $queryType = "topN";
    public $dimension;
    public $intervals;
    public $granularity;
    public $aggregations;
    public $threshold;
    public $metric;

    public function __construct($dataSource, $dimension, $intervals, $granularity, $aggregations,$threshold, $metric)
    {
        $this->dimension = $dimension;
        $this->threshold = $threshold;
        $this->metric = $metric;
        parent::__construct($dataSource,$granularity,$aggregations,$intervals);
    }

    public function addPostAggregation($postAggregation){
        if(!isset($this->postAggregations)) $this->postAggregations = [];
        $this->postAggregations[] = $postAggregation;
        return $this;
    }

    public function addFilter($filter){
        $this->filter = $filter;
        return $this;
    }

    public static function build($dataSource, $dimension, $intervals, $granularity, $aggregations,$threshold, $metric){
        return new TopNQuery($dataSource, $dimension, $intervals, $granularity, $aggregations,$threshold, $metric);
    }
}