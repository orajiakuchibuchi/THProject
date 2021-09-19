<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SayUncleContestant extends Model
{
    protected $guarded = [];
    protected $table = 'sayuncle_contestants';
    protected $appends = ['username'];

    public function videos()
    {
        return $this->hasMany(SayUncleContestantVideo::class,'sayuncle_contestant_id','id');
    }

    public function payments()
    {
        return $this->hasMany(SayUncleContestPayment::class,'sayuncle_contestant_id','id');
    }
    
    public function votes()
    {
        return $this->hasMany(SayUncleContestantVoter::class,'sayuncle_contestant_id','id');
    }

     public function getUsernameAttribute()
    {
        return ucfirst($this->first_name.' '.$this->last_name);
    }

}
