<?php
require '../apps/config/config.php';

if(isset($_GET['controller']) && isset($_GET['action'])){
    $controller = $_GET['controller'];
    $action = $_GET['action'];
    $controller = $controller . 'Controller';
    $path = APP_ROOT . '/apps/controllers/' . $controller . '.php';
    if(file_exists($path)){
        include $path;
        $controller = ucfirst($controller);
        $controllerDoctor = new $controller;
        if(method_exists($controllerDoctor, $action)){
            $controllerDoctor->$action();
        }else{
            $controllerDoctor->index();
        }
    }else{
        require APP_ROOT . '/apps/controllers/DoctorController.php';
        $homeController = new DoctorController();
        $homeController->index();
    }
}
else{
    require APP_ROOT . '/apps/controllers/DoctorController.php';
    $homeController = new DoctorController();
    $homeController->index();
}
?>