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

    public function create()
    {
        $this->sendPage('contacts/create', [
            'errors' => session_get_once('errors'),
            'old' => $this->getSavedFormValues()
        ]);
    }

    public function store()
    {
        $data = $this->filterBookData($_POST);
        $model_errors = Book::validate($data);
        if (empty($model_errors)) {
            $book = new Book();
            $book->fill($data);
//             $contact->user()->associate(Guard::user());
            $book->save();
            redirect('/');
        }
        // Lưu các giá trị của form vào $_SESSION['form']
        $this->saveFormValues($_POST);
        // Lưu các thông báo lỗi vào $_SESSION['errors']
        redirect('/website/add', ['errors' => $model_errors]);
    }

    protected function filterBookData(array $data)
    {
        return [
            'name' => $data['name'] ?? '',
            'author' => $data['name'] ?? '',
            'image' => $data['name'] ?? '',
            'price' => $data['name'] ?? '',
            'notes' => $data['notes'] ?? ''
        ];
    }
}
