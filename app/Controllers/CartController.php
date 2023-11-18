<?php
namespace App\Controllers;

use App\SessionGuard as Guard;
use App\Models\Book;
use App\Models\User;
use App\Models\Cart;

class CartController extends Controller {
    public function __construct() {

        parent::__construct();
    }

    public  function cart(){
        if(Guard::isUserLoggedIn()){
           $this->sendPage('website/cart', [
                'carts' => Guard::User()->carts,
                'books' => Book::All()
            ]); 
        }

        redirect('/login');
    }

    public function store($bookId)
    {
        $cart = new Cart();
        $cart->book_id = $bookId;
        $cart->user()->associate(Guard::user());
        $cart->save();
        redirect('/product');
    }

    public function update($cartId)
    {
        $cart = Cart::find($cartId);
        if (! $cart) {
            $this->sendNotFound();
        }
        $model_errors = Cart::validate($_POST);
            if (empty($model_errors)) {
        }
        $cart->fill($_POST);
        $cart->save();
        redirect('/cart');
        $this->saveFormValues($_POST);
        redirect('/cart'.$categoryId, [
            'errors' => $model_errors
        ]);
    }

    public function destroy($cartId)
    {
        $cart = Cart::find($cartId);
        if (! $cart) {
            $this->sendNotFound();
        }
        $cart->delete();
        redirect('/cart');
    }
}