<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'text',
        'chat_id',
        'owner_id'
    ];

    public function chat()
    {
        return '123';
    }

    public function owner()
    {
        return '123';
    }

    public function medias()
    {
        return '123';
    }
}
