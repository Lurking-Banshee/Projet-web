<?php
/**
 * Created by PhpStorm.
 * User: debian
 * Date: 01/01/17
 * Time: 16:08
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Companies extends Model
{
    protected $table = "companies";
    protected $primaryKey = "id";

    public $timestamps = false;
    public $incrementing = false;


    public function series(){
        return $this->belongsToMany('\App\Models\Series',"seriescompanies","company_id","series_id");
    }

}