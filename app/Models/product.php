<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//softdelete libary


use Illuminate\Database\Eloquent\softDeletes;



class product extends Model
{
    use HasFactory;

    use softDeletes;

    protected $fillable=['name','price','details'];

    //softdelete

protected $dates= ['deleted_at'];

}
