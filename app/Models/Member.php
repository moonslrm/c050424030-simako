<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    protected $fillable = [
        'name',
        'nim',
        'email',
        'phone_number',
        'address',
        'date_of_birth',
        'major',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function organization()
    {
        return $this->hasMany(organization::class);
    }
}
