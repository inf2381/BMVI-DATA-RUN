<?php
namespace BMVI\Datarun\Controllers\PublicZone;

use BMVI\Datarun\Helper\WeatherData;
use codex\codex\Routing\Annotations\Route;
use codex\codex\Routing\BaseController;
use codex\codex\UI\View\View;
use DOMDocument;

class MainController extends BaseController 
{
    private $apiKey = '9280a2245fa3f4610557c32328ffcfa7';

    /**
     * @Route("/")
     */
    public function index() : View
    {
        echo '123456';
        exit();
    }

    /**
     * @Route("/weather_forecast")
     */
    public function getWeatherForecast() : View
    {

        // http://marc.datarun.bmvi.dev.covexo.com/weather_forecast?lat=48.529300&long=8.378565&hour=2&value=temperature

        $params = $this->getRequest()->getParameters();
        if(isset($params["lat"])) {
            if(isset($params["long"])) {
                $weatherData = new WeatherData($this->apiKey, $params["lat"], $params["long"]);

                if(isset($params["value"])){
                    $data = $weatherData->getWeatherDataInHour($params["hour"]);
                    switch ($params["value"]){
                        case 'temperature':
                            print_r(round((($data["temperature"] - 32 ) / 1.8), 2));
                            break;
                        case 'rainfall':
                            print_r($data["precipProbability"]);
                            break;
                        case 'windSpeed':
                            print_r($data["windSpeed"]);
                            break;
                    }
                }else {
                    echo json_encode($weatherData->getWeatherDataInHour($params["hour"]));
                }
            }
        }

        exit();
    }


    /**
     * @Route("/routing")
     */
    public function getRouting() : View
    {

        $vehicles = ["Bicycle", "Car"];
        $routes = [];

        $params = $this->getRequest()->getParameters();

        if (isset($params["start"])) {
            $start = explode(';', $params["start"]);
            if (isset($params["end"])) {
                $end = explode(';', $params["end"]);
            }
        }


        foreach ($vehicles as $currentVehicle) {
            $routes[] = $this->getRoute($start, $end, $currentVehicle);
        }

        var_dump($routes);

        exit();
    }

    private function getRoute($start, $end, $vehicle) {

        $baseURL = "http://openls.geog.uni-heidelberg.de/route?api_key=ee0b8233adff52ce9fd6afc2a2859a28&start=";

        $addition1 = "&via=&lang=de&distunit=KM&routepref=";

        $addition2 = "&weighting=Shortest&avoidAreas=&useTMC=false&noMotorways=false&noTollways=false&noUnpavedroads=false&noSteps=false&noFerries=false&instructions=false";

        //build url
        $finalURL = $baseURL . (string)$start[0] . "," . (string)$start[1] . "&end=" . (string)$end[0] . "," . (string)$end[1] . $addition1 . $vehicle . $addition2;

        var_dump($finalURL);

        $curl = curl_init($finalURL);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $curl_response = curl_exec($curl);

        if ($curl_response === false) {
            $info = curl_getinfo($curl);
            curl_close($curl);
            die('error occured during curl exec. Additioanl info: ' . var_export($info));
        }

        curl_close($curl);

        $dom = new \DOMDocument();

        $dom->loadXML($curl_response);

        var_dump($dom->saveXML());

        return ($dom->getElementsByTagNameNS('http://www.opengis.net/gml', 'LineString'));




    }
}