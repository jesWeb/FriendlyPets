<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class person extends Model
{
    use HasFactory;
  // use SoftDeletes;
     //relacion uno a muchos 
    protected $fillable = [
        'name',
        'sexo',
        'edad',
        'direccion',
        'email',
        'password'
        ];

    //relacion uno a muchos 

    public function service() {
        return $this->belongsTo(service::class);
    }

    public function pet() {
        return $this->belongsTo(pet::class);
    }
    public function checking() {
        return $this->belongsTo(checking::class);
    }
    public function services_checking() {
        return $this->belongsTo(services_checking::class);
    }

    public function type_user() {
        return $this->belongsTo(type_user::class);
    }

}
