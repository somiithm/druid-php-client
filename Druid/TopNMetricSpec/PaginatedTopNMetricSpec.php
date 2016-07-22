<?php
/**
 * Created by PhpStorm.
 * User: som
 * Date: 22/7/16
 * Time: 1:58 PM
 */

namespace Druid\TopNMetricSpec;


abstract class PaginatedTopNMetricSpec extends TopNMetricSpec
{
    public $previousStop;
    public function __construct($previousStop)
    {
        $this->previousStop = $previousStop;
    }
}