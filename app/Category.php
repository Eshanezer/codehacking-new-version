<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=[
        'title',
        'photo_id',
        'is_active'
    ];

    protected $dates=[
        'created_at',
        'updated_at',
    ];

    public function photo(){
        return $this->belongsTo('App\Photo');
    }
}
