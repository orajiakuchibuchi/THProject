<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SayUncleContestantVideo extends Model
{
    protected $guarded = [];
	protected $table = 'sayuncle_contestant_videos';



	public function payment()
    {
        return $this->hasOne(SayUncleContestPayment::class,'sayuncle_contestant_video_id','id');
    }

	public function contestant()
    {
        return $this->belongsTo(SayUncleContestant::class,'sayuncle_contestant_id','id');
    }
}
