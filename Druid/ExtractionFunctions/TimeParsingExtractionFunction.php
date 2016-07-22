<?php
/**
 * Created by PhpStorm.
 * User: som
 * Date: 22/7/16
 * Time: 2:38 PM
 */

namespace Druid\ExtractionFunction;


class TimeParsingExtractionFunction extends ExtractionFunction
{
    public $type = "time";
    public $timeFormat;
    public $resultFormat;

    public function __construct($timeFormat, $resultFormat)
    {
        $this->timeFormat = $timeFormat;
        $this->resultFormat = $resultFormat;
    }
}