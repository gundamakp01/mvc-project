<?php
require_once './Request.php';
require_once './Router.php';
require_once './Database.php';

class Application{
    public Router $route;
    public Request $request;
    public Database $db;
    public static Application $app;
    public function __construct()
    {

        $this->request = new Request();
        $this->route = new Router($this->request);
        $this->db = new Database();
        
        self::$app = $this;
        var_dump($this->db);
        die;
    }
    public function run(){
        echo $this->route->resolve();
    }
}