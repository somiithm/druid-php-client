<?php
/**
 * Created by PhpStorm.
 * User: som
 * Date: 22/7/16
 * Time: 2:44 PM
 */

namespace Druid\ExtractionFunction;


class LookupExtractionFunction extends ExtractionFunction
{
    public $type = "lookup";
    public $lookup;
    public $retainMissingValue;
    public $replaceMissingValueWith;
    public $injective;
    public $optimize;

    public function __construct($lookup,$retainMissingValue = false, $replaceMissingValueWith = null, $injective = false, $optimize = true )
    {
        $this->lookup = $lookup;
        $this->retainMissingValue = $retainMissingValue;
        $this->replaceMissingValueWith = $replaceMissingValueWith;
        $this->injective = $injective;
        $this->optimize = $optimize;
    }
}