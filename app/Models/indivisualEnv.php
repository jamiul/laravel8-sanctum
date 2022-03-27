<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class indivisualEnv extends Model
{
    use HasFactory;
    protected $fillable = [
        'app_key',
        'app_secret',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
