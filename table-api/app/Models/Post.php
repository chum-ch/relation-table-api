<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable =['title','body'];
    // Relation user table DB
    public function user(){
        return $this->belongsTo(User::class);
    }
    // relation comment table DB
    public function comment(){
        return $this->hasMany(Comment::class);;
    }
}
