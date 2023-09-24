<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class TextWidget extends Model
{
    use HasFactory;

    protected $fillable = ['order', 'title', 'image', 'body', 'active', 'link'];

    public function shortBody():String {
        return Str::words(strip_tags($this->body), 30); // 30words
    }
}
