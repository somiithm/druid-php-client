<?php
/**
 * Created by PhpStorm.
 * User: som
 * Date: 22/7/16
 * Time: 4:02 PM
 */

namespace Druid;


class LimitSpec
{
    public $type = "default";
    public $limit;
    public $columns;

    public function __construct($limit, array $columns, $dimension = null, $direction = "ascending" )
    {
        $this->limit = $limit;
        $this->columns = $columns;
        if($dimension !== null){
            $this->dimension = $dimension;
            $this->direction = $direction;
        }
    }
}