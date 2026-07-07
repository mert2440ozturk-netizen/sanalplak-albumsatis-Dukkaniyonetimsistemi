<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{

    use HasFactory;

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function songs()
    {
        return $this->hasMany(Song::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
