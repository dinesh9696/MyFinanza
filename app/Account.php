<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected  $fillable=['user_id','accounttype','income','expenses','balance'];
}
