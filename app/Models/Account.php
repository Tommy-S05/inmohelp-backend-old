<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * @mixin Builder
 */
class Account extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function accountTransactions()
    {
        return $this->hasMany(AccountTransaction::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
