<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    //user ar sthe role ar hasmany connection hobe. 

    public function user(){
        return $this->hasMany('App\Models\User');
    }


}
