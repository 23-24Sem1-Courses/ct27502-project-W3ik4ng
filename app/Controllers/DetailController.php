<?php
namespace App\Controllers;

class DetailController extends Controller {
    public function __construct() {

    parent::__construct();
    }
    public  function detail(){
        $this->sendPage('website/detail');
    }

}