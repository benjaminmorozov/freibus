<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    use HasFactory;

    protected $fillable = ['thumbnail', 'order'];

    public function getThumbnail() {
        if(str_starts_with($this->thumbnail, 'http')) {
            return $this->thumbnail;
        }
        return '/storage/'.$this->thumbnail;
    }
}
