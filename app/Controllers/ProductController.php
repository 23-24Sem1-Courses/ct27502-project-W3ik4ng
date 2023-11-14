<?php
namespace App\Controllers;

class ProductController extends Controller {
    public function __construct() {

    parent::__construct();
    }
    public  function product(){
        $this->sendPage('website/product');
    }

}