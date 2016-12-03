<?php
/**
 * Created by PhpStorm.
 * User: Marc
 * Date: 03.12.16
 * Time: 11:29
 */

namespace BMVI\Datarun\Helper;


class TrafficWarner
{

    private $trafficInNRW = "http://datarun.s3.amazonaws.com/verkehrsmeldungen_NRW.geojson";

    private $trafficAsJSON;

    function __construct()
    {

        $curl = curl_init($this->trafficInNRW);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $curl_response = curl_exec($curl);

        $curl_response = utf8_encode($curl_response);

        if ($curl_response === false) {
            $info = curl_getinfo($curl);
            curl_close($curl);
            die('error occured during curl exec. Additioanl info: ' . var_export($info));
        }
        curl_close($curl);
        $curl_response = $curl_response . '}';

        $curl_response = substr($curl_response,6,sizeof($curl_response)-2);

        //echo $curl_response;

        $resultAsJSON = json_decode($curl_response, true);

        $this->trafficAsJSON = $resultAsJSON;

    }

    public function checkForTraffic () {




        if (true) {
            return (string)rand(1,7) . " Kilometer Stau";
        }

        return null;

    }



}