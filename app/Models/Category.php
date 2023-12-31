<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'colour'];

    public function posts():BelongsToMany {
        return $this->belongsToMany(Post::class);
    }

    public function tours():BelongsToMany {
        return $this->belongsToMany(Tour::class);
    }
}
