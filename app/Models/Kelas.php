<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa;
use App\Models\Guru;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';

    public function siswa() {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }

    public function guru() {
        return $this->belongsTo(Guru::class, 'guru_id');
    }
}
