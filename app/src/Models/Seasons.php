<?php
/**
 * Created by PhpStorm.
 * User: debian
 * Date: 23/12/16
 * Time: 17:47
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Seasons extends Model
{
    protected $table = "seasons";
    protected $primaryKey = "id";

    public $timestamps = false;
    public $incrementing = false;

    /**
    public function serie(){
        return $this->hasOne('App\Models\series');
    }*/

    public function episodes(){
        return $this->belongsToMany('\App\Models\Episodes',"seasonsepisodes","season_id","episode_id");
    }

}