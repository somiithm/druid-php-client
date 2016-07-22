<?php
/**
 * Created by PhpStorm.
 * User: som
 * Date: 21/7/16
 * Time: 3:22 PM
 */

namespace Druid;


class TimeSeriesQuery extends Druid
{
    public $queryType = "timeseries";

    public function __construct($dataSource,$granularity,array $intervals,array $aggregators , $filter)
    {
        $this->intervals = $intervals;
        $this->granularity = $granularity;
        $this->aggregations = $aggregators;
        $this->filter = $filter;
        parent::__construct($dataSource);
    }

    public function setDescending(){
        $this->descending = "true";
        return $this;
    }

    public function setPostAggregator(array $postAggregations){
        $this->postAggregations = $postAggregations;
        return $this;
    }
}