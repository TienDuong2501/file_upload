<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    	'content',
    	'title',
    	'slug',
    	'id_user'
    ];

    public function user()
    {
    	$this->belongsTo(App\User::class);
    }
}
