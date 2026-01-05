<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'status',
        'contact_email',
        'contact_phone',
    ];
    public function members()
    {
        return $this->hasMany(Member::class);
    }
    public function activities()
    {
        return $this->hasMany(Activity::class);
    }
    public function advisor()
    {
        return $this->belongsTo(Advisor::class);
    }
}
