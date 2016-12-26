<?php
/**
 * Created by PhpStorm.
 * User: debian
 * Date: 23/12/16
 * Time: 17:14
 */


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    protected $table = "series";
    protected $primaryKey = "id";

    public $timestamps = false;
    public $incrementing = false;

    public function saisons(){
        return $this->belongsToMany('\App\Models\Seasons',"seriesseasons","series_id","season_id");
    }
}


