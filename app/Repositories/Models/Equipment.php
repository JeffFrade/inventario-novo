<?php

namespace App\Repositories\Models;

use Database\Factories\EquipmentFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Equipment extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'equipments';

    /**
     * @var string[]
     */
    protected $fillable = [
        'serial_number',
        'barcode',
        'item',
        'brand',
        'model',
        'cod_outsourcing',
        'obs',
        'id_room',
        'id_responsible',
        'id_type',
        'image',
        'attach'
    ];

    /**
     * @return HasOne
     */
    public function room(): HasOne
    {
        return $this->hasOne(Room::class, 'id', 'id_room');
    }

    /**
     * @return HasOne
     */
    public function responsible(): HasOne
    {
        return $this->hasOne(Responsible::class, 'id', 'id_responsible');
    }

    /**
     * @return HasOne
     */
    public function type(): HasOne
    {
        return $this->hasOne(EquipmentType::class, 'id', 'id_type');
    }

    /**
     * @return EquipmentFactory
     */
    protected static function newFactory(): EquipmentFactory
    {
        return EquipmentFactory::new();
    }
}
