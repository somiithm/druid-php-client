<?php

/**
 * Created by PhpStorm.
 * User: som
 * Date: 21/7/16
 * Time: 3:48 PM
 */
namespace Druid\Filter;

class RegexFilter extends Filter
{
    public $type= "regex";

    public function __construct($dimension,$pattern){
        $this->dimension = $dimension;
        $this->pattern = $pattern;
    }
}