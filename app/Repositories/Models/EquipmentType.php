<?php

namespace App\Repositories\Models;

use Database\Factories\EquipmentTypeFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EquipmentType extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'equipments_types';

    /**
     * @var string[]
     */
    protected $fillable = [
        'type'
    ];

    /**
     * @return EquipmentTypeFactory
     */
    protected static function newFactory(): EquipmentTypeFactory
    {
        return EquipmentTypeFactory::new();
    }
}
