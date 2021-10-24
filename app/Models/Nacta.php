<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nacta extends Model
{
    use HasFactory;

    protected $fillable = ['category','name','aliases','address','city','country','program','last_occupation',
        'birth_date','birth_country','residence_country','nationality','external_id','gender','internal_id',
        'deceased','remarks','data_sources','related_to',];
}
