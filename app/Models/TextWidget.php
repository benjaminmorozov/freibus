<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class TextWidget extends Model
{
    use HasFactory;

    protected $fillable = [
        'key', 'image', 'title', 'content', 'active', 'link'
    ];

    public static function getTitle(string $key): string { // try to find in cache, if not found, execute function to make from scratch
        $widget = Cache::get('text-widget-'.$key, function() use($key) {
            return TextWidget::query()
                ->where('key', '=', $key)
                ->where('active', '=', 1)
                ->first();
        });
        if($widget) {
            return $widget->title;
        }
        return '';
    }

    public static function getContent(string $key): string {
        $widget = Cache::get('text-widget-'.$key, function() use($key) {
            return TextWidget::query()
                ->where('key', '=', $key)
                ->where('active', '=', 1)
                ->first();
        });
        if($widget) {
            return $widget->content;
        }
        return '';
    }

    public static function getLink(string $key): string {
        $widget = Cache::get('text-widget-'.$key, function() use($key) {
            return TextWidget::query()
                ->where('key', '=', $key)
                ->where('active', '=', 1)
                ->first();
        });
        if($widget) {
            return $widget->link;
        }
        return '';
    }
}
