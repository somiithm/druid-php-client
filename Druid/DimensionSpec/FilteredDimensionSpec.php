<?php
/**
 * Created by PhpStorm.
 * User: som
 * Date: 22/7/16
 * Time: 3:24 PM
 */

namespace Druid\DimensionSpec;


abstract class FilteredDimensionSpec
{
    public $type;
    public $delegate;

    public function __construct($delegate)
    {
        $this->delegate = $delegate;
    }
}