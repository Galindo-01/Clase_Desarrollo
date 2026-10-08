<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Iluminate\DataBase\Eloquent\HasFactory;
use App\Models\Post;

class Comment extends Model
{
    //
    use HasFactory;

    protected $fillable =[
        //insercion masiva a la BD esto puede venir en el examen 5/10/2026 visto ese dia
        'id',
        'post_id',
        'body'
    ];

    public function post(){
        return $this->belongsTo(Post::class);
    } 
}
