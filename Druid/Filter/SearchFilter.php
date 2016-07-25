<?php
/**
 * Created by PhpStorm.
 * User: som
 * Date: 22/7/16
 * Time: 7:12 PM
 */

namespace Druid\Filter;


class SearchFilter extends Filter
{
    public $type = "search";
    public $dimension;
    public $query;

    public function __construct($dimension, $query)
    {
        $this->dimension = $dimension;
        $this->query = $query;
    }

    public function addExtractionFn($extractionFn){
        $this->extractionFn = $extractionFn;
        return $this;
    }
}