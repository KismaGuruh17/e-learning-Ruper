<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Mapel;
use App\Models\Kelas;
use App\Models\Sekolah;


class Guru extends Model
{
    use HasFactory;

    protected $table = 'gurus';
    protected $guarded =['id'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function mapel() {
        return $this->belongsTo(Mapel::class, 'mapel_id');
    }

    public function kelas() {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    public function sekolah() {
        return $this->belongsTo(Sekolah::class, 'sekolah_id');
    }
}
