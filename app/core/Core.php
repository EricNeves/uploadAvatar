<?php 

class Core 
{
  public function __construct(private array $routes) {
    $this->setRoutes($routes);
  }

  public function run()
  {
    $url = '/';

    isset($_GET['url']) ? $url .= $_GET['url'] : $url;

    ($url !== '/') ? $url = rtrim($url, '/') : $url ;

    $routerFound = false;

    foreach ($this->getRoutes() as $path => $controller) {
      $pattern = '#^'.preg_replace('/{id}/', '([\w-]+)', $path).'$#';

      if (preg_match($pattern, $url, $matches)) {

        array_shift($matches);
      
        $routerFound = true;
        
        [$currentController, $action] = explode('@', $controller);

        require_once __DIR__."/../controllers/$currentController.php";

        $newController = new $currentController();
        $newController->$action($matches);
       }
    }

    if (!$routerFound) {
      require_once __DIR__."/../controllers/ErrorController.php";
      $controller = new ErrorController();
      $controller->index();
    }
  }

  private function getRoutes()
  {
    return $this->routes;
  }

  private function setRoutes($routes)
  {
    $this->routes = $routes;
  }
}