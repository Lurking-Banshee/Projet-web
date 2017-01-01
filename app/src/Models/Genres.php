<?php
/**
 * Created by PhpStorm.
 * User: debian
 * Date: 30/12/16
 * Time: 17:29
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Genres extends Model
{
    protected $table = "genres";
    protected $primaryKey = "id";

    public $timestamps = false;
    public $incrementing = false;


    public function series(){
        return $this->belongsToMany('\App\Models\Series',"seriesgenres","genre_id","series_id");
    }

}