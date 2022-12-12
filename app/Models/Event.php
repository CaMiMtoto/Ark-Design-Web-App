<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Event extends Model
{
    use HasFactory;

    protected $appends = ['image_url'];
    protected $dates = ['date'];

    const EVENT = 'event';
    const NEWS = 'news';

    public function getImageUrlAttribute(): string
    {
        return Storage::url("public/events/{$this->image}");
    }

    public function scopeEvents($query)
    {
        return $query->where('type', self::EVENT);
    }

    public function scopeNews($query)
    {
        return $query->where('type', self::NEWS);
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('name', 'LIKE', '%' . $search . '%')
            ->orWhere('description', 'LIKE', '%' . $search . '%')
            ->orWhere('location', 'LIKE', '%' . $search . '%')
            ->orWhere('date', 'LIKE', '%' . $search . '%')
            ->orWhere('organizer', 'LIKE', '%' . $search . '%');
    }

    public static function types(): array
    {
        return [
            self::EVENT,
            self::NEWS,
        ];
    }

    public function getTypeColorAttribute(): string
    {
        return $this->type === self::EVENT ? 'primary' : 'success';
    }

}
