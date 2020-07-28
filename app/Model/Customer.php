<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'customername', 'addressline1', 'addressline2', 'addressline3', 'pincode', 'number',
    ];
}
