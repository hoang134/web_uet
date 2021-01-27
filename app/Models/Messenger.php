<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messenger extends Model
{
    use HasFactory;

    public function userTo()
    {
        return $this->belongsTo(User::class,'user_id_to','id');
    }

    public function userFrom()
    {
        return $this->belongsTo(User::class,'user_id_from','id');
    }

}
