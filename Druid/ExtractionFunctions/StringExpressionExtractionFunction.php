<?php
/**
 * Created by PhpStorm.
 * User: som
 * Date: 22/7/16
 * Time: 3:17 PM
 */

namespace Druid\ExtractionFunction;


class StringExpressionExtractionFunction extends ExtractionFunction
{
    public $type = "stringFormat";
    public $format;
    public $nullHandling;
    public function __construct($format, $nullHandling = "nullString")
    {
        $this->format = $format;
        $this->nullHandling = $nullHandling;
    }
}