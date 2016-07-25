<?php

/**
 * Created by PhpStorm.
 * User: som
 * Date: 25/7/16
 * Time: 5:46 PM
 */
namespace Druid\Having;

class NotFilter extends Having
{
    public $type = "or";
    public $havingSpec;

    public function having(Having $having){
        $this->havingSpec = $having;
        return $this;
    }
}