<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_user_id',
        'second_user_id',
        'friend_status_id'
    ];

    public function firstUser()
    {
        return '123';
    }

    public function secondUser()
    {
        return '123';
    }

    public function status()
    {
        return '123';
    }
}
