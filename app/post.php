<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table= 'posts';
    protected $primaryKey='id';

    public function user(){
        return $this->belongsTo('App\User');
    }
}
