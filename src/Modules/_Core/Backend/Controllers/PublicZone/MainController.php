<?php
namespace BMVI\Datarun\Controllers\PublicZone;

use codex\codex\Routing\Annotations\Route;
use codex\codex\Routing\BaseController;
use codex\codex\UI\View\View;

class MainController extends BaseController 
{
    /**
     * @Route("/")
     */
    public function index() : View
    {
        echo '123456';
        exit();
    }

    /**
 * @Route("/myrequest/(?<myParam>[a-z]+)")
     */
    public function pogo($myParam) : View
    {
        echo $myParam;
        exit();
    }
}