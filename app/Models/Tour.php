<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'price', 'places', 'images', 'body', 'date'];

    protected $casts = ['published_at' => 'date', 'images' => 'array'];

    public function categories():BelongsToMany {    
        return $this->belongsToMany(Category::class);
    }

    public function getFormattedDate() {
        return Carbon::parse($this->date)->locale('sk-SK')->translatedFormat('d F Y');
    }

    public function getThumbnail() {
        if(str_starts_with($this->images[0], 'http')) {
            return $this->$this->images[0];
        }
        return '/storage/'.$this->images[0];
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
            'price' => $this->price,
            'places' => $this->places,
            'thumbnail' => 'https://stvorka.cloud'.$this->getThumbnail(),
            'images' => collect($this->images)->map(function($img){
                return 'https://stvorka.cloud/storage/'.$img; //an equolent array turned into a collection, values of which were mapped onto a function that adds the url
            }),
            'body' => strip_tags($this->body),
            'date' => Carbon::parse($this->date)->locale('sk-SK')->translatedFormat('d F Y'),
            'usercodes' => ['0x01', '0x02'],
        ];
    }

}
