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
    public static function getInterval(\DateTime $startTime, $interval, $format){
        return $startTime->format($format).'/'.($startTime->add(new \DateInterval($interval))->format($format));
    }
}