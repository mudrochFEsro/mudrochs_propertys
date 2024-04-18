<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing extends Model
{
    use HasFactory;
    protected $fillable = [
        'beds', 
        'baths', 
        'area', 
        'city', 
        'post_code', 
        'street', 
        'street_number', 
        'price'
    ];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(
            \app\Models\User::class,
            'by_user_id'
        );
    }
    
}
