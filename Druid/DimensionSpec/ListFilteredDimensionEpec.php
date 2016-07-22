<?php
/**
 * Created by PhpStorm.
 * User: som
 * Date: 22/7/16
 * Time: 3:31 PM
 */

namespace Druid\DimensionSpec;


class ListFilteredDimensionEpec extends FilteredDimensionSpec
{
    public $type = "listFiltered";
    public $values;
    public $isWhiteList;

    public function __construct($delegate, array $values, $isWhiteList = true)
    {
        $this->values = $values;
        $this->isWhiteList = $isWhiteList;
        parent::__construct($delegate);
    }

}