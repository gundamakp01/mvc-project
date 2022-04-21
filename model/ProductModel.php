<?php
class ProductModel {
    public $db;
    private $productID;
    private $categoryID;
    private $productCode;
    private $listPrice ;
    private $productName;
    public function tableName(){
        return 'product';
    }
    public function __contructor(){
        $this->db = Application::$app->db;
    }
    
    public function getProductID(){
        return $this->productID;
    }

    public function setProductID($productID){
        $this->productID=$productID;
    }

    public function getCategoryID(){
        return $this->categoryID;
    }

    public function setCategoryID($categoryID){
        $this->categoryID=$categoryID;
    }

    public function getProductCode(){
        return $this->productCode;
    }

    public function setProductCode($productCode){
        $this->productCode=$productCode;
    }
    public function setListPrice($listPrice){
        $this->listPrice = $listPrice;
    }

    public function getListPrice(){
        return $this->listPrice;
    }

    public function setProductName($productName){
        $this->productName = $productName;
    }

    public function getProductName(){
        return $this->productName;
    } 
    public function getProductsByCategoryID($categoryID){
        $query = "Select * from `products` WHERE categoryID = $categoryID";
        $result = $this->db->pdo->query($query);
        return $result;
    }
}