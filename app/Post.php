<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable=[
        'title',
        'description',
        'photo_id',
        'category_id'

    ];
    protected $dates=[
        'created_at',
        'updated_at',
    ];

    public function photo(){
        return $this->belongsTo('App\Photo');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
