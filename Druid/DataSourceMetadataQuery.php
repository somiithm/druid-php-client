<?php
/**
 * Created by PhpStorm.
 * User: som
 * Date: 21/7/16
 * Time: 3:23 PM
 */

namespace Druid;


class DataSourceMetadataQuery extends Query
{
    public $queryType = "dataSourceMetadata";

    public function __construct($dataSource)
    {
        parent::__construct($dataSource);
    }

    public static function build($dataSource){
        return new DataSourceMetadataQuery($dataSource);
    }
}