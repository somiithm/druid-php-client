<?php
/**
 * Created by PhpStorm.
 * User: som
 * Date: 22/7/16
 * Time: 2:34 PM
 */

namespace Druid\ExtractionFunction;


class TimeFormatExtractionFunction extends ExtractionFunction
{
    public $type = "timeFormat";
    public $format;
    public function __construct($format, $timeZone = null, $locale = null)
    {
        $this->format = $format;
        if($timeZone !== null) $this->timeZone = $timeZone;
        if($locale !== null) $this->locale = $locale;
    }
}