<?php
namespace Vofy\Platform\Controllers\PublicZone;
use codex\codex\Routing\Annotations\Route;
use codex\codex\Routing\BaseController;

class LoadTests extends BaseController 
{
    /**
     * @Route("/")
     */
    public function index() : View
    {
        echo '1234';
        exit();
    }
}