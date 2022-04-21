<?php
require_once './Request.php';
require_once './controller/ProductController.php';
class Router
{
    private Request $request;
    private array $routeMap = [
        
    ];

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    public function get(String $url, $callback)
    {
        $this->routeMap['get'][$url] = $callback;
    }
    public function post(String $url, $callback)
    {
        $this->routeMap['post'][$url] = $callback;
    }
    public function resolve(){
    //    url = $req->getUrl(); // /user

    //    $callback = $this->routeMap['get'][url];


    //    call_user_func([UserCoontrller::class, 'getUser'])
    //     echo '<pre>';
    //     var_dump($path);
    //     echo '</pre>';
    //     exit;
        $path=$this->request->getUrl();
        $method = $this->request->getMethod();
        $callback = $this->routeMap[$method][$path];
        $callback[0] = new $callback[0]();

        
        return call_user_func($callback);
    }
}
