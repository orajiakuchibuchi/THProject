<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EbookUser extends Model
{
    protected $fillable = [
        'name', 'email', 'ig_handler','is_creative','phone'
    ];
}
