<?php
namespace App\Controllers;

use App\SessionGuard as Guard;
use App\Models\Book;

class ProductController extends Controller {
    public function __construct() {

    parent::__construct();
    }
    public  function product(){
        $this->sendPage('website/product', [
            'books' => book::All()
        ]);
    }

    public function add()
    {
        $this->sendPage('website/add', [
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