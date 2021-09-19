<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SayUncleContestPayment extends Model
{
	protected $guarded = ['id'];
	protected $table = 'sayuncle_contest_payment';



	public function contestant()
    {
        return $this->belongsTo(SayUncleContestant::class,'sayuncle_contestant_id','id');
    }

    public function video()
    {
        return $this->belongsTo(SayUncleContestantVideo::class,'sayuncle_contestant_id','id');
    }
}
