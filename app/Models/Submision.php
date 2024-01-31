<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tugas;
use App\Models\Siswa;

class Submision extends Model
{
    use HasFactory;
    protected $table = 'submisions';
    protected $guarded =['id'];

    public function tugas() {
        return $this->belongsTo(Tugas::class, 'tugas_id');
    }

    public function siswa() {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }
}
