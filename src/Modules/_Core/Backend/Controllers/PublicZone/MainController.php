<?php
namespace BMVI\Datarun\Controllers\PublicZone;

use BMVI\Datarun\Helper\WeatherData;
use codex\codex\Routing\Annotations\Route;
use codex\codex\Routing\BaseController;
use codex\codex\UI\View\View;

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
}