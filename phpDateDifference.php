<?php
/**
 * Class phpDateDifference
 * Description: I have it as a class but it can also be used as a regular function
 */

Class phpDateDifference{

    /**
     * @param $from
     * @param $to
     * @param string $interval
     * @return float|int
     */
    function getDifference($from,$to,$interval='day'){
        $returnValue    = false;
        $fromTime       = strtotime($from);
        $toTime         = strtotime($to);

        /* yeap I know.. but its to keep it simple */
        $intervalArray  = array(
            'minute' => (60),
            'hour'   => (60*60),
            'day'    => (60*60*24),
            'week'   => (60*60*24*7),
        );

        $seconds        = ($fromTime - $toTime);
        if($seconds>0){
            if(@$intervalArray[$interval] > 0){
                $returnValue = ($seconds / $intervalArray[$interval]);
            }else{
                $returnValue = $seconds;
            }
        }else{
            $returnValue = $seconds;
        }
        return $returnValue;
    }
}