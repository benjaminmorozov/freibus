<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'thumbnail', 'body', 'published_at', 'user_id'];

    protected $casts = ['published_at' => 'datetime'];

    public function user():BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function shortBody():String {
        return Str::words(strip_tags($this->body), 30); // 30words
    }

    public function shortBodyHome():String {
        return Str::words(strip_tags($this->body), 5); // 30words
    }

    public function getFormattedDate() {
        return Carbon::parse($this->published_at)->locale('sk-SK')->translatedFormat('d. F Y');
    }

    public function getThumbnail() {
        if(str_starts_with($this->thumbnail, 'http')) {
            return $this->thumbnail;
        }
        return '/storage/'.$this->thumbnail;
    }

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray()
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'thumbnail' => 'https://stvorka.cloud'.$this->getThumbnail(),
            'body' => $this->body, //strip_tags($this->body) or str_replace('  ', ' ', strip_tags(str_replace( '<', '\n<','$this->body')))
            'published_at' => Carbon::parse($this->published_at)->locale('sk-SK')->translatedFormat('d. F Y'),
            'user_id' => $this->user_id,
            'created_at' => Carbon::parse($this->created_at)->locale('sk-SK')->translatedFormat('d. F Y'),
            'updated_at' => Carbon::parse($this->updated_at)->locale('sk-SK')->translatedFormat('d. F Y'),
        ];
    }
}
