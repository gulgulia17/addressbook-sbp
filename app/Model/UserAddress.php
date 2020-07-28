<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    protected $fillable = [
        'user_id', 'addressline1', 'addressline2', 'addressline3', 'pincode', 'number',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
