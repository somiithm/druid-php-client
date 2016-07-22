<?php

/**
 * Created by PhpStorm.
 * User: som
 * Date: 22/7/16
 * Time: 1:53 PM
 */
namespace Druid\TopNMetricSpec;

abstract class TopNMetricBasedSpec extends TopNMetricSpec
{
    public $metric;
    public function __construct($metric)
    {
        $this->metric = $metric;
    }
}