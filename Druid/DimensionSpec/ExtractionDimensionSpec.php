<?php
/**
 * Created by PhpStorm.
 * User: som
 * Date: 22/7/16
 * Time: 2:16 PM
 */

namespace Druid\DimensionSpec;


class ExtractionDimensionSpec extends DimensionSpec
{
    public $type = "extraction";
    public $extractionFn;

    public function __construct($dimension, $outputName, $extractionFn)
    {
        $this->extractionFn = $extractionFn;
        parent::__construct($dimension, $outputName);
    }
}