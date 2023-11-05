<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Strategy extends Model
{

    use HasFactory;
    protected $fillable = [
        'name',
        'strategy_id'
    ];

    public function actions(): HasMany
    {
        return $this->hasMany(Action::class, 'strategy_id', 'id');
    }
    
}
