<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Owl extends Model
{
    use HasFactory;

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'scheduled_at' => 'datetime',
    ];

    public function grades(): HasMany
    {
        return $this->hasMany(Grade::class);
    }

    public function averageGrade(): float
    {
        $grades = $this->grades->pluck('mark');
        return $grades->count() > 0 ? $grades->avg() : 0;
    }
}
