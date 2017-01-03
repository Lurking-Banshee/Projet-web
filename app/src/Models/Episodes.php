<?php
/**
 * Created by PhpStorm.
 * User: debian
 * Date: 25/12/16
 * Time: 10:56
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Episodes extends Model
{
    protected $table = "episodes";
    protected $primaryKey = "id";

    public $timestamps = false;
    public $incrementing = false;

    public function user(){

        return $this->belongsToMany('App\Models\User','usersepisodes','episode_id','user_id');

    }
    /**
    public function saisons(){
        return $this->belongsToMany('\App\Models\Seasons',"seriesseasons","series_id","season_id");
    }*/
}