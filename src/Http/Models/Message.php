<?php

namespace Chatify\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function user()
    {
        return $this->hasOne('App\Models\User','id','from_id');
    }
}
