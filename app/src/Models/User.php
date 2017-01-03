<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "users";
    protected $primaryKey = "id";

    public $timestamps = false;

    public function episode(){

        return $this->belongsToMany('App\Models\Episodes','usersepisodes','user_id','episode_id');

    }
}