<?php
/**
 * Created by PhpStorm.
 * User: som
 * Date: 22/7/16
 * Time: 4:14 PM
 */

namespace Druid;



class GroupByQuery extends AggregationQueries
{
    public $queryType = "groupBy";
    public $dimension;
    public $granularity;
    public $aggregations;
    public $intervals;

    public function __construct($dataSource, $dimension, $granularity, $aggregations, $intervals)
    {
        $this->dimension = $dimension;
        parent::__construct($dataSource,$granularity,$aggregations,$intervals);
    }

    public function addLimitSpec($limitSpec){
        $this->limitSpec = $limitSpec;
        return $this;
    }

    public function addFilter($filter){
        $this->filter = $filter;
        return $this;
    }



    public function having($having){
        $this->having = $having;
        return $this;
    }

    public static function build($dataSource, $dimension, $granularity, $aggregations, $intervals){
        return new GroupByQuery($dataSource, $dimension, $granularity, $aggregations, $intervals);
    }
}