<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $fillable = ['name', 'author', 'image', 'price', 'notes', 'hot', 'category_id'];

    public static function validate(array $data) {
        $errors = [];
        if (! $data['name']) {
            $errors['name'] = 'Name is required.';
        }
        if (! $data['author']) {
            $errors['author'] = 'Author is required.';
        }
        if (! $data['image']) {
                $errors['image'] = 'Image is required.';
        }
        if (! $data['price']) {
                    $errors['price'] = 'Price is required.';
        }
        if (strlen($data['notes']) > 255) {
            $errors['notes'] = 'Notes must be at most 1000 characters.';
        }
        if (! $data['category_id']) {
            $errors['category_id'] = 'Category is required.';
        }
        return $errors;
    }
    
    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function cart() {
        return $this->belongsToMany(Cart::class);
    }
}