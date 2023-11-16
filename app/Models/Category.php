<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name'];

    public static function validate(array $data) {
        $errors = [];
        if (! $data['name']) {
            $errors['name'] = 'Name is required.';
        }
        return $errors;
    }
    public function books() {
        return $this->hasMany(Book::class);
    }
}