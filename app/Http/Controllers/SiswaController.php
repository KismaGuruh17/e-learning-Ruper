<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    /**
     * Menampilkan daftar siswa.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswas = Siswa::all();

        return view('admin.siswa.index', compact('siswas'));
    }

    /**
     * Menampilkan formulir untuk membuat siswa baru.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.siswa.create');
    }

    /**
     * Menyimpan siswa baru ke dalam database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|integer',
            'nama_siswa' => 'required|string',
            'tempat_lahir' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'alamat' => 'required|string',
            'kelas' => 'required|string',
            'sekolah_id' => 'required|integer',
            'mata_pelajaran' => 'required|string',
            'kelas_id' => 'nullable|integer',
        ]);

        Siswa::create($request->all());

        return redirect()->route('admin.siswa.index')->with('success', 'Siswa berhasil ditambahkan!');
    }

    /**
     * Menampilkan detail siswa.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        return view('admin.siswa.show', compact('siswa'));
    }

    /**
     * Menampilkan formulir untuk mengedit siswa.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        return view('admin.siswa.edit', compact('siswa'));
    }

    /**
     * Memperbarui siswa dalam database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nis' => 'required|integer',
            'nama_siswa' => 'required|string',
            'tempat_lahir' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'alamat' => 'required|string',
            'kelas' => 'required|string',
            'sekolah_id' => 'required|integer',
            'mata_pelajaran' => 'required|string',
            'kelas_id' => 'nullable|integer',
        ]);

        $siswa->update($request->all());

        return redirect()->route('admin.siswa.index')->with('success', 'Data siswa berhasil diperbarui!');
    }

    /**
     * Menghapus siswa dari database.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();

        return redirect()->route('admin.siswa.index')->with('success', 'Data siswa berhasil dihapus!');
    }
}
