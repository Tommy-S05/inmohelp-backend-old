<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * @mixin Builder
 */
class AccountTransaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_id',
        'sub_category_id',
        'amount',
        'description',
    ];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }
}
