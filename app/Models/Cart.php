<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart';
    protected $fillable = ['user_id', 'book_id', 'amount'];

    public static function validate(array $data) {
        $errors = [];
        if (! $data['user_id']) {
            $errors['user_id'] = 'User is required.';
        }
        if (! $data['book_id']) {
            $errors['book_id'] = 'Book is required.';
        }
        if (! $data['amount']) {
            $errors['amount'] = 'Amount is required.';
        }
        return $errors;
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function books() {
        return $this->hasMany(Book::class);
    }
}