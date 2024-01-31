<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mapel;
use App\Models\Guru;

class Tugas extends Model
{
    use HasFactory;
    protected $table = 'tugas';
    protected $guarded =['id'];

    public function mapel() {
        return $this->belongsTo(Mapel::class, 'mapel_id');
    }

    public function guru() {
        return $this->belongsTo(Guru::class, 'guru_id');
    }
}
