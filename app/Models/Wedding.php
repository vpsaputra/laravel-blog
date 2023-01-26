<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wedding extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function cantens(){       
        
        //hasMany(class, foreignKey, localKey)
        return $this->hasMany(Canten::class, 'id_wedding', 'id');
    } 


}
