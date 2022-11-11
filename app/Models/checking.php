<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class checking extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'entrada',
        'salida',
        'total'
        ];
    public function person() {
        return $this->hasMany(person::class);

    }
}
