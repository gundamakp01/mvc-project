<?php 
require_once './Database.php';
require_once './core/Controller.php';
require_once './model/ProductModel.php';
class ProductController extends Controller{
    public $action;
    function index(){
        require_once "./view/Product.php";
        $p = new ProductModel();
        echo $p->getProductsByCategoryID(1);
    }
}