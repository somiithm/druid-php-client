<?php
/**
 * Created by PhpStorm.
 * User: som
 * Date: 22/7/16
 * Time: 7:17 PM
 */

namespace Druid\Filter;


class BoundFilter extends Filter
{
    public $type = "bound";
    public $dimension;

    public function __construct($dimension)
    {
        $this->dimension = $dimension;
    }

    public function addLowerBound($lower, $lowerStrict = false){
        $this->lower = $lower;
        if($lowerStrict) $this->lowerStrict = true;
        return $this;
    }

    public function addUpperBound($upper, $upperStrict = false){
        $this->upper = $upper;
        if($upperStrict) $this->upperStrict = true;
        return $this;
    }

    public function setAlphaNumeric(){
        $this->alphaNumeric = true;
    }
}