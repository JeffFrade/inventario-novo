<?php

namespace App\Repositories\Models;

use Database\Factories\RoomFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * @var string[]
     */
    protected $fillable = [
        'id_sector',
        'room'
    ];

    /**
     * @return RoomFactory
     */
    protected static function newFactory(): RoomFactory
    {
        return RoomFactory::new();
    }
}
