<?php
/**
 * Created by PhpStorm.
 * User: som
 * Date: 22/7/16
 * Time: 2:22 PM
 */

namespace Druid\ExtractionFunction;


abstract class RegexExtractionFunction extends ExtractionFunction
{
    public $expr;
    public function __construct($expr)
    {
        $this->expr = $expr;
    }
}