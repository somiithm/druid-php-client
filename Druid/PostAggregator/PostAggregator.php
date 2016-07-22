<?php

/**
 * Created by PhpStorm.
 * User: som
 * Date: 21/7/16
 * Time: 4:44 PM
 */
namespace Druid\PostAggregator;

abstract class PostAggregator
{
    protected $type;
    protected $name;

    public function __construct($outputName)
    {
        $this->name = $outputName;
    }
}