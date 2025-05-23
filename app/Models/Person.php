<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = ['name', 'location', 'description'];
    /** @use HasFactory<\Database\Factories\PersonFactory> */
    use HasFactory;

    public function userInfos(){
        return $this->hasMany(UserInfo::class);
    }
}
