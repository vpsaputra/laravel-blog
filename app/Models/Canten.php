<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Canten extends Model
{
    use HasFactory;
    // sesuaikan dama table karena nama tabel yg digunakan
    // != ('nama_model'+'s')
    protected $table = 'canten';

    /* field yg boleh diisi utk manipulasi database
    protected $fillable / $guarded */
    protected $fillable = ['id_wedding', 'nama_lengkap', 'nama_panggilan', 'jenis_kelamin', 'ayah', 'ibu', 'keluarga'];

    public function weddings(){
         return $this->belongsTo(Wedding::class, 'id_canten', 'id');
    }
}
