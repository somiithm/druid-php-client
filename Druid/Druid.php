<?php
/**
 * Created by PhpStorm.
 * User: som
 * Date: 21/7/16
 * Time: 3:00 PM
 */

namespace Druid;


abstract class Druid
{
    protected $endpoint;
    public $queryType;
    public $dataSource;

    public function __construct($dataSource)
    {
        $this->dataSource = $dataSource;
        $this->endpoint = "http://10.5.1.8:8082/druid/v2/?pretty";
    }

    public function exec(){
        $data_string = json_encode($this);
        $ch = curl_init('http://api.local/rest/users');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data_string))
        );

        return curl_exec($ch);
    }

    public function queryDump(){
        return json_encode($this);
    }
}