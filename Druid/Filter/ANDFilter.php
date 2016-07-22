<?php

/**
 * Created by PhpStorm.
 * User: som
 * Date: 21/7/16
 * Time: 3:56 PM
 */
namespace Druid\Filter;

class ANDFilter extends LogicalFilter
{
    public $type = "and";

    public function setField2(Filter $filter){
        $this->fields[1] = $filter;
    }
}