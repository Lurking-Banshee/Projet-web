<?php
/**
 * Created by PhpStorm.
 * User: debian
 * Date: 01/01/17
 * Time: 15:59
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Creators extends Model
{
    protected $table = "creators";
    protected $primaryKey = "id";

    public $timestamps = false;
    public $incrementing = false;


    public function series(){
        return $this->belongsToMany('\App\Models\Series',"seriescreators","creator_id","series_id");
    }

}