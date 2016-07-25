<?php
/**
 * Created by PhpStorm.
 * User: som
 * Date: 21/7/16
 * Time: 3:22 PM
 */

namespace Druid;


class TimeSeriesQuery extends AggregationQueries
{
    public $queryType = "timeseries";
    public $filter;

    public function __construct($dataSource,$granularity,array $intervals,array $aggregators , $filter)
    {
        $this->filter = $filter;
        parent::__construct($dataSource,$granularity,$aggregators,$intervals);
    }

    public function setDescending(){
        $this->descending = "true";
        return $this;
    }

    public static function build($dataSource,$granularity,array $intervals,array $aggregators , $filter){
        return new TimeSeriesQuery($dataSource,$granularity,$intervals,$aggregators , $filter);
    }
}