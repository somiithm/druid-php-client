<?php

/**
 * Created by PhpStorm.
 * User: som
 * Date: 22/7/16
 * Time: 2:54 PM
 */
namespace Druid\Lookup;

class NamespaceLookup
{
    public $type = "namespace";
    public $namespace;

    public function __construct($namespace)
    {
        $this->namespace = $namespace;
    }
}