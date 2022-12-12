<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Team extends Model
{
    use HasFactory;

    protected $appends = ['image_url'];

    public function getImageUrlAttribute()
    {
        return Storage::url('public/teams/' . $this->image);
    }

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function scopeInactive($query)
    {
        return $query->where('status', 'inactive');
    }

    public function scopeStatus($query, $status)
    {
        return $query->where('status', $status);
    }

}
