<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'body',
        'category_id',
        'photo_id'
    ];

    public function user(){
         return $this->belongsTo(user::class);
    }

    public function photo(){
        return $this->belongsTo(photo::class);
    }

    public function category(){
        return $this->belongsTo(category::class);
    }
}
