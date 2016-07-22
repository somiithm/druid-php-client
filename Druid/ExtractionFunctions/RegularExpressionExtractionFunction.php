<?php
/**
 * Created by PhpStorm.
 * User: som
 * Date: 22/7/16
 * Time: 2:24 PM
 */

namespace Druid\ExtractionFunction;


class RegularExpressionExtractionFunction extends RegexExtractionFunction
{
    public $type = "regex";
    public $replaceMissingValue;
    public $replaceMissingValueWith;

    public function __construct($expr, $replaceMissingValue = false, $replaceMissingValueWith = null)
    {
        $this->replaceMissingValue = $replaceMissingValue;
        $this->replaceMissingValueWith = $replaceMissingValueWith;
        parent::__construct($expr);
    }
}