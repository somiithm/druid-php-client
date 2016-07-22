<?php
/**
 * Created by PhpStorm.
 * User: som
 * Date: 22/7/16
 * Time: 2:59 PM
 */

namespace Druid\ExtractionFunction;


class CascadeExtractionFunction extends ExtractionFunction
{
    public $type = "cascade";
    public $extractionFns;

    public function __construct(array $extractionFns)
    {
        $this->extractionFns = $extractionFns;
    }

    public function addExtractionFn($extractionFn){
        $this->extractionFns[] = $extractionFn;
        return $this;
    }
}