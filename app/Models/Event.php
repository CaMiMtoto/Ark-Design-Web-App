<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Event extends Model
{
    use HasFactory;
    protected $appends = ['image_url'];

    public function getImageUrlAttribute(): string
    {
        return Storage::url("public/events/{$this->image}");
    }
}
