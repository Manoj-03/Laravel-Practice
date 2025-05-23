<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $fillable = ['name', 'skill', 'bio', 'person_id'];
    
    /** @use HasFactory<\Database\Factories\UserInfoFactory> */
    use HasFactory;

    public function person(){
        return $this->belongsTo(Person::class);
    }
}
