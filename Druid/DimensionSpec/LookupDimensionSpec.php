<?php
/**
 * Created by PhpStorm.
 * User: som
 * Date: 22/7/16
 * Time: 3:35 PM
 */

namespace Druid\DimensionSpec;


use App\Models\Druid\Lookup\MapLookup;
use App\Models\Druid\Lookup\NamespaceLookup;

class LookupDimensionSpec extends DimensionSpec
{

    public function __construct($dimension, $outputName, $lookup, $replaceMissingValueWith = null, $retainMissingValue = false, $optimize = true)
    {
        if($lookup instanceof MapLookup || $lookup instanceof NamespaceLookup){
            $this->lookup = $lookup;
            $this->retainMissingValue = $retainMissingValue;
            $this->repaceMissingValueWith = $replaceMissingValueWith;
            $this->optimize = $optimize;
        }
        else
            $this->name = $lookup;

        parent::__construct($dimension, $outputName);
    }
}