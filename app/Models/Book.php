<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $fillable = ['name', 'author', 'image', 'price', 'notes', 'hot', 'category_id'];

//     public function user() {
//     return $this->belongsTo(User::class);
// }

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
        $errors['notes'] = 'Notes must be at most 255 characters.';
    }
    return $errors;
    }
}