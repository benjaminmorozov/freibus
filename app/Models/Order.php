<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'email', 'address', 'price', 'tour_id', 'login_id'];

    public $timestamps = ["created_at"]; //only want to used created_at column
    const UPDATED_AT = null; //and updated by default null set,

    public function user():BelongsTo {
        return $this->belongsTo(User::class);
    }
}