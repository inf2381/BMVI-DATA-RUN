<?php
namespace BMVI\Datarun;

use codex\codex\App\App;
use codex\codex\Routing\Router;

require __DIR__ . DIRECTORY_SEPARATOR . '../../../' . "RequiredResources/Libraries/codex/codex/src/Modules/_Core/Backend/init.php";

if (class_exists(App::class)) {
    $app = App::init(__NAMESPACE__);
    
    $router = new Router();
    $router->route();
}
else {
    echo 'Could not load codex framework!';
    exit();
}
