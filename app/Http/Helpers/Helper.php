<?php


namespace App\Http\Helpers;


use App\Models\SayUncleContestPayment;
use Illuminate\Support\Str;

class Helper
{
    public static function generateReference(): string
    {
        $reference = strtoupper(Str::random());

        if ( is_null(SayUncleContestPayment::where('tx_ref', $reference)->first()) ) {
            return $reference;
        }

        return self::generateReference();
    }
}