<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasePage extends Model
{
    use HasFactory;
    protected $fillable=['name','value'];

    public $timestamps = false;
}
