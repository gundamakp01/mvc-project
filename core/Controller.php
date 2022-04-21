<?php

class Controller{
    function render($view){
        require_once "./view/$view.php";
    }
}