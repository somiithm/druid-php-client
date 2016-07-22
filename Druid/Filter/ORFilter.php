<?php

/**
 * Created by PhpStorm.
 * User: som
 * Date: 21/7/16
 * Time: 3:58 PM
 */
namespace Druid\Filter;

class ORFilter extends LogicalFilter
{
    public $type = "or";
    public function setField2(Filter $filter){
        $this->fields[1] = $filter;
    }
}