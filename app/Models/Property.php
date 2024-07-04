<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Property extends Model
{
    use HasFactory;
    protected $table = "properties";

    protected $fillable = [
        'user_id',
        'category_id',
        'type',
        'name',
        'description',
        'image',
        'status',
        'price',
        'address',
        'street',
        'village_name',
        'town_name',
        'state_name',
        'size',
        'latitude',
        'longitude',
        'is_featured',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function village()
    {
        return $this->belongsTo(Village::class);
    }

    public function town()
    {
        return $this->belongsTo(Town::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
