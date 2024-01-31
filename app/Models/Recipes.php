<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipes extends Model
{
    use HasFactory;
    // const DELETED_AT = 'my_soft_delete'; //change name of columns
    protected $fillable = [
        'title',
        'content',
        'image',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }
}
