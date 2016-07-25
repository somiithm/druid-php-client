<?php
/**
 * Created by PhpStorm.
 * User: som
 * Date: 21/7/16
 * Time: 6:39 PM
 */

namespace Druid;


class Intervals
{
    public static function getInterval(\DateTime $startTime, \DateInterval $interval){
        $start = $startTime->format('Y-m-d\TH:i:s');
        $end = $startTime->add($interval)->format('Y-m-d\TH:i:s');
        return $start."/".$end;
    }
}