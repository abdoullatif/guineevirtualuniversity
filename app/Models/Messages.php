<?php

namespace App\Models;

use App\Models\User;
use function PHPSTORM_META\map;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Messages extends Model
{
    use HasFactory;

    protected $fillable = [
        'bodyMessage',
        'users_id',
        'users_id'
    ];

    protected $appends = ['selfMessage'];

    //User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //
    public function getSelfMessageAttribute()
    {
        return $this->user_id === auth()->user()->id;
    }

    


}
