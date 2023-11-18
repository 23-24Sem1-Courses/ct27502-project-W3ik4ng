<?php
namespace App\Controllers;

use App\SessionGuard as Guard;
use App\Models\Category;

class CategoryController extends Controller {
    public function __construct() {

    parent::__construct();
    }

    public  function categories(){
        $this->sendPage('website/categories', [
            'categories' => category::All()
        ]);
    }

    public function store()
    {

        $model_errors = Category::validate($_POST);
        if (empty($model_errors)) {
            $category = new Category();
            $category->fill($_POST);
            $category->save();
            redirect('/categories');
        }
        // Lưu các giá trị của form vào $_SESSION['form']
        $this->saveFormValues($_POST);
        // Lưu các thông báo lỗi vào $_SESSION['errors']
        redirect('/categories', ['errors' => $model_errors]);
    }

    public function update($categoryId)
    {
        $category = Category::find($categoryId);
        if (! $category) {
            $this->sendNotFound();
        }
        $model_errors = Category::validate($_POST);
            if (empty($model_errors)) {
        }
        $category->fill($_POST);
        $category->save();
        redirect('/categories');
        $this->saveFormValues($_POST);
        redirect('/categories'.$categoryId, [
            'errors' => $model_errors
        ]);
    }

    public function destroy($categoryId)
    {
        $category = Category::find($categoryId);
        if (! $category) {
            $this->sendNotFound();
        }
        $category->delete();
        redirect('/categories');
    }

}