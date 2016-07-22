<?php

/**
 * Created by PhpStorm.
 * User: som
 * Date: 21/7/16
 * Time: 3:52 PM
 */
namespace Druid\Filter;

abstract class LogicalFilter extends Filter
{
    public $fields;
    public function __construct()
    {
        $this->fields = [];
    }

    public function setField1(Filter $filter){
        $this->fields[0] = $filter;
    }
}