<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['title', 'content', 'priority', 'status', 'user_id', 'category_id'];

    protected $hidden = ['created_at', 'updated_at'];

    public function user()
    {
    	$this->belongsTo('App\User');
    }

    public function category()
    {
    	$this->hasOne('App\Category');
    }
}
