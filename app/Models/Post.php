<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use App\Models\Comment;

class Post extends Model
{
    // lo que estamos hacciendo es sobre escrbir el nombre en la base de datos
    //para todos los modelos van a tener ciertos campos linea 13 hasta la 21 
    use HasFactory;
    //protected $table = 'posts';
    protected $fillable =[
        //insercion masiva a la BD
        'id',
        'user_id',
        'title',
        'body'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    } 

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
