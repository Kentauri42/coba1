<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserLog extends Model
{
    protected $table = 'userstatus';
    protected $primaryKey = 'user_id';
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'status',
        'signin',
        'signout',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}