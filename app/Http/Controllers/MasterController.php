<?php

namespace App\Http\Controllers;

use App\Models\Master;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function store(Request $request)
    {
        // Validasi inputan form
        $request->validate([
            'nama_master' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
        ]);

        // Simpan data master ke dalam database
        $master = new Master();
        $master->nama_master = $request->nama_master;
        $master->no_hp = $request->no_hp;
        // Jika Anda ingin menyimpan ID pengguna yang terkait dengan master (opsional)
        // $master->user_id = auth()->id(); // atau $request->user_id jika menggunakan form input

        $master->save();

        // Redirect atau memberikan respon setelah menyimpan data
        return redirect()->route('welcome')->with('success', 'Data Master berhasil disimpan!');
    }
}
