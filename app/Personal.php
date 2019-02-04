<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected  $fillable=['user_id','date','category','amount','notes'];
}
