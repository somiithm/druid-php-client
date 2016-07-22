<?php
/**
 * Created by PhpStorm.
 * User: som
 * Date: 22/7/16
 * Time: 5:15 PM
 */

namespace Druid;


class TimeBoundaryQuery extends Druid
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
}