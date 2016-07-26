<?php
/**
 * Created by PhpStorm.
 * User: som
 * Date: 22/7/16
 * Time: 5:15 PM
 */

namespace Druid;


class TimeBoundaryQuery extends Query
{
    public $queryType = "timeBoundary";

    public function __construct($dataSource, $bound = null)
    {
        parent::__construct($dataSource);
    }

    public function addBound($bound){
        $this->bound = $bound;
        return $this;
    }

    public function addContext($context){
        $this->context = $context;
    }

    public static function build($dataSource, $bound = null){
        return new TimeBoundaryQuery($dataSource, $bound);
    }
}