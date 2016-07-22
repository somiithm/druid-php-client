<?php

/**
 * Created by PhpStorm.
 * User: som
 * Date: 21/7/16
 * Time: 4:49 PM
 */
namespace Druid\PostAggregator;

class FieldAccessorPostAggregator extends PostAggregator
{
    protected $type = "fieldAccess";

    public function __construct($outputName, $fieldName)
    {
        $this->fieldName = $fieldName;
        parent::__construct($outputName);
    }
}