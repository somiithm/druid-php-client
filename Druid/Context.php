<?php

/**
 * Created by PhpStorm.
 * User: som
 * Date: 22/7/16
 * Time: 8:11 PM
 */
namespace Druid;

class Context
{
    public $timeout;
    public $priority;
    public $useCache;
    public $populateCache;
    public $bySegment;
    public $finalize;
    public $chuckPeriod;
    public $minTopNThreshold;
    public $maxResults;
    public $maxIntermediateRows;
    public $groupByIsSingleThreaded;

    public function __construct()
    {
        $this->timeout = 0;
        $this->priority = 0;
        $this->useCache = true;
        $this->populateCache = true;
        $this->bySegment = false;
        $this->finalize = true;
        $this->chuckPeriod = 0;
        $this->minTopNThreshold = 1000;
        $this->maxResults = 500000;
        $this->maxIntermediateRows = 50000;
        $this->groupByIsSingleThreaded = false;
    }

    /**
     * @param int $timeout
     */
    public function timeout($timeout)
    {
        $this->timeout = $timeout;
        return $this;
    }

    /**
     * @param int $priority
     */
    public function priority($priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * @param boolean $useCache
     */
    public function disableCache()
    {
        $this->useCache = false;
        return $this;
    }

    /**
     * @param boolean $populateCache
     */
    public function disablePopulateCache()
    {
        $this->populateCache = false;
        return $this;
    }

    /**
     * @param boolean $bySegment
     */
    public function bySegment()
    {
        $this->bySegment = true;
        return $this;
    }

    /**
     * @param boolean $finalize
     */
    public function disableFinalize()
    {
        $this->finalize = false;
        return $this;
    }

    /**
     * @param int $chuckPeriod
     */
    public function chuckPeriod($chuckPeriod)
    {
        $this->chuckPeriod = $chuckPeriod;
        return $this;
    }

    /**
     * @param int $minTopNThreshold
     */
    public function minTopNThreshold($minTopNThreshold)
    {
        $this->minTopNThreshold = $minTopNThreshold;
        return $this;
    }

    /**
     * @param int $maxResults
     */
    public function maxResults($maxResults)
    {
        $this->maxResults = $maxResults;
        return $this;
    }

    /**
     * @param int $maxIntermediateRows
     */
    public function maxIntermediateRows($maxIntermediateRows)
    {
        $this->maxIntermediateRows = $maxIntermediateRows;
        return $this;
    }

    /**
     * @param boolean $groupByIsSingleThreaded
     */
    public function groupByIsSingleThreaded()
    {
        $this->groupByIsSingleThreaded = true;
        return $this;
    }


}