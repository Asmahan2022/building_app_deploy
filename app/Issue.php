<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    //
  protected $fillable = ['name', 'email', 'phone', 'msg', 'building_number', 'apartment_number', 'user_id'];
  


    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
