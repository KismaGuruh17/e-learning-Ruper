<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Sekolah;
use App\Models\Kelas;

class Siswa extends Model
{
    use HasFactory;

    protected $table ='siswas';
    protected $guarded =['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function sekolah()
    {
        return $this->belongsTo(Sekolah::class, 'sekolah_id');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }
}
