<?php

namespace App\Controllers;

use App\SessionGuard as Guard;
use App\Models\Book;

class HomeController extends Controller {
    public function __construct() {
        if (!Guard::isUserLoggedIn()) {
            redirect('/login');
        }

        parent::__construct();
    }

    public function index()
    {
        $this->sendPage('website/index',[
            'books' => book::where('hot', '=' , 1)->get()
        ]);
    }

    
}
