<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function items()
    {
        return $this->belongsToMany(Item::class, 'user_items', 'user_id',
            'item_id')->withPivot('Quantity_in_possession');
    }
}
