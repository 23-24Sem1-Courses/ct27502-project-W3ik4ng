<?php
namespace App\Controllers;

use App\SessionGuard as Guard;
use App\Models\Book;
use App\Models\Category;

class ProductController extends Controller {
    public function __construct() {

    parent::__construct();
    }
    
    public  function product(){
        $this->sendPage('website/product', [
            'books' => book::All(),
            'categories' => category::All()
        ]);
    }

    public function index()
    {
        $this->sendPage('website/index',[
            'books' => book::where('hot', '=' , 1)->get()
        ]);
    }

    public  function detail($bookId){
        $book = Book::find($bookId);
        if (! $book) {
            $this->sendNotFound();
        }
        $form_values = $this->getSavedFormValues();
        $data = [
            'errors' => session_get_once('errors'),
            'category' => category::find($bookId),
            'book' => ( !empty($form_values) ) ?
            array_merge($form_values, ['id' => $book->id]) :
            $book->toArray()

        ];
        $this->sendPage('website/detail', $data);
    }

    public function add()
    {
        $this->sendPage('website/add', [
            'errors' => session_get_once('errors'),
            'old' => $this->getSavedFormValues(),
            'categories' => category::All()
        ]);
    }

    public function store()
    {
        $data = $this->filterBookData($_POST);
        $model_errors = Book::validate($data);
        if (empty($model_errors)) {
            $book = new Book();
            $book->fill($data);
            $book->save();
            redirect('/product');
        }
        // Lưu các giá trị của form vào $_SESSION['form']
        $this->saveFormValues($_POST);
        // Lưu các thông báo lỗi vào $_SESSION['errors']
        redirect('/product/add', ['errors' => $model_errors]);
    }

    protected function filterBookData(array $data)
    {
        return [
            'name' => $data['name'] ?? '',
            'author' => $data['author'] ?? '',
            'image' => $data['image'] ?? '',
            'price' => $data['price'] ?? '',
            'notes' => $data['notes'] ?? '',
            'hot' => $data['hot'] ?? '',
            'category_id' => $data['category_id'] ?? ''
        ];
    }

    public function edit($bookId)
    {
        $book = Book::find($bookId);
        if (! $book) {
            $this->sendNotFound();
        }
        $form_values = $this->getSavedFormValues();
        $data = [
            'errors' => session_get_once('errors'),
            'categories' => category::All(),
            'book' => ( !empty($form_values) ) ?
            array_merge($form_values, ['id' => $book->id]) :
            $book->toArray()

        ];
        $this->sendPage('website/edit', $data);
    }

    public function update($bookId)
    {
        $book = Book::find($bookId);
        if (! $book) {
            $this->sendNotFound();
        }
        $data = $this->filterBookData($_POST);
        $model_errors = Book::validate($data);
            if (empty($model_errors)) {
        }
        $book->fill($data);
        $book->save();
        redirect('/product');
        $this->saveFormValues($_POST);
        redirect('/product/edit/'.$booktId, [
            'errors' => $model_errors
        ]);
    }

    public function destroy($bookId)
    {
        $book = Book::find($bookId);
        if (! $book) {
            $this->sendNotFound();
        }
        $book->delete();
        redirect('/product');
    }
}