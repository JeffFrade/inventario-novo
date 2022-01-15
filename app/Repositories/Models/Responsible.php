<?php

namespace App\Repositories\Models;

use Database\Factories\ResponsibleFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Responsible extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'responsible'
    ];

    /**
     * @return ResponsibleFactory
     */
    protected static function newFactory(): ResponsibleFactory
    {
        return ResponsibleFactory::new();
    }
}
