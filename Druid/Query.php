<?php
/**
 * Created by PhpStorm.
 * User: som
 * Date: 21/7/16
 * Time: 3:00 PM
 */

namespace Druid;


abstract class Query
{
    public $queryType;
    public $dataSource;

    public function __construct($dataSource)
    {
        $this->dataSource = $dataSource;
//        $this->endpoint = ;
    }

    public function getQuery(){
        return json_encode($this);
    }
}