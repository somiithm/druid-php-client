<?php
/**
 * Created by PhpStorm.
 * User: som
 * Date: 22/7/16
 * Time: 3:34 PM
 */

namespace Druid\DimensionSpec;


class RegexFilteredDimensionSpec extends FilteredDimensionSpec
{
    public $type = "regexFiltered";
    public $pattern;
    public function __construct($delegate, $pattern)
    {
        $this->pattern = $pattern;
        parent::__construct($delegate);
    }
}