<?php
/**
 * Created by PhpStorm.
 * User: som
 * Date: 22/7/16
 * Time: 2:30 PM
 */

namespace Druid\ExtractionFunction;


class SubstringExtractionFunction extends ExtractionFunction
{
    public $type = "substring";
    public $index;

    public function __construct($index,$length = null)
    {
        $this->index = $index;
        if($length !==  null) $this->length = $length;
    }
}