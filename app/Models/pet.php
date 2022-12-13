<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class pet extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'name',
        'sexo',
        'edad',
        'tamaño',
        'raza',
        'people_id'
        ];

    public function person() {
        return $this->hasMany(person::class);

    }
}
