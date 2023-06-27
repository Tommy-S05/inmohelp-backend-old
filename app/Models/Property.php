<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

/**
 * @mixin Builder
 */
class Property extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function propertyType()
    {
        return $this->belongsTo(PropertyType::class);
    }

    //    public function monthlyPayments($periods, $interest)
    //    {
    //        $loan = $this->price - 250000;
    //        $periods = $periods * 12;
    //
    //        $interest = (((1 + ($interest / 100)) ** (1 / 12)) - 1);
    //
    //
    //        $payment = $loan * (($interest * (1 + $interest) ** $periods) / ((1 + $interest) ** $periods - 1));
    //        //        $payment = 20000 * ((0.03 * (1 + 0.03) ** 12) / ((1 + 0.03) ** 12 - 1));
    //        return response()->json($payment);
    //        //
    //        //        $payment = ($interest * $loan) / (1 - (1 + $interest) ** (-$periods));
    //        //        return response()->json($payment);
    //    }
}
