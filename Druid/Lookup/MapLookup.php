<?php

/**
 * Created by PhpStorm.
 * User: som
 * Date: 22/7/16
 * Time: 2:53 PM
 */
namespace Druid\Lookup;

class MapLookup
{
    public $type = "map";
    public $map;
    public function __construct(array $mappingArray)
    {
        $this->map = $mappingArray;
    }

}