<?php

/**
 * Created by PhpStorm.
 * User: som
 * Date: 21/7/16
 * Time: 4:50 PM
 */
namespace Druid\PostAggregator;

class ArithmeticPostAggregator extends PostAggregator
{
    const FN_DIVIDE = "/";
    const FN_MINUS = "-";
    const FN_PLUS = "+";
    const FN_MULTIPLY = "*";
    const FN_QUOTIENT = "quotient";

    protected $type = "arithmetic";

    public function __construct($outputName,$operation,$fields)
    {
        $this->fn = $operation;
        $this->fields = $fields;
        parent::__construct($outputName);
    }
}