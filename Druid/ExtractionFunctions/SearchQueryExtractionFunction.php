<?php
/**
 * Created by PhpStorm.
 * User: som
 * Date: 22/7/16
 * Time: 2:28 PM
 */

namespace Druid\ExtractionFunction;


class SearchQueryExtractionFunction extends ExtractionFunction
{
    public $type = "searchQuery";
    public $query;
    public function __construct($query)
    {
        $this->query = $query;
    }
}