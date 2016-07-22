<?php

/**
 * Created by PhpStorm.
 * User: som
 * Date: 21/7/16
 * Time: 3:46 PM
 */
namespace Druid\Filter;


class SelectorFilter extends Filter
{
    public $type = "selector";

    public function __construct($dimension,$value){
        $this->dimension = $dimension;
        $this->value = $value;
    }
}