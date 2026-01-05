<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Advisor extends Model
{
    //
    protected $fillable = [
        'name',
        'nip',
        'email',
        'phone_number',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function organizations()
    {
        return $this->hasMany(Organization::class);
    }
}
