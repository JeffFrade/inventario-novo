<?php

namespace App\Repositories\Models;

use Database\Factories\SectorFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sector extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * @var string[]
     */
    protected $fillable = [
        'sector'
    ];

    /**
     * @return SectorFactory
     */
    protected static function newFactory(): SectorFactory
    {
        return SectorFactory::new();
    }
}
