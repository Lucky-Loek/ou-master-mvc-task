<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Casts\Attribute;

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

    public function averageGrade(): Attribute
    {
        return Attribute::make(
            get: fn () => DB::table('grades')->avg('mark'),
        );
    }
}
