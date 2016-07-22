<?php
/**
 * Created by PhpStorm.
 * User: som
 * Date: 22/7/16
 * Time: 3:22 PM
 */

namespace Druid\ExtractionFunction;


class UpperLowerExtractionFunction extends ExtractionFunction
{
    public function __construct($isUpper = true, $locale = null)
    {
        $this->type = $isUpper === true ? "upper" : "lower";
        if($locale !== null) $this->locale = $locale;
    }
}