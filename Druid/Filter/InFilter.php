<?php
/**
 * Created by PhpStorm.
 * User: som
 * Date: 22/7/16
 * Time: 7:15 PM
 */

namespace Druid\Filter;


class InFilter extends Filter
{
    public $type = "in";
    public $dimension;
    public $values;

    public function __construct($dimension, $values)
    {
        $this->dimension = $dimension;
        $this->values = $values;
    }
}