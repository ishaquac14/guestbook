<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $searchTerm = $request->input('search');

        $deliverys = Delivery::orderBy('created_at', 'DESC')
            ->where(function ($query) use ($searchTerm) {
                if ($searchTerm) {
                    $query->where('nama', 'LIKE', '%' . $searchTerm . '%')
                        ->orWhere('asal_perusahaan', 'LIKE', '%' . $searchTerm . '%')
                        ->orWhere('plat_kendaraan', 'LIKE', '%' . $searchTerm . '%')
                        ->orWhere('lokasi_tujuan', 'LIKE', '%' . $searchTerm . '%');
                }
            })
            ->paginate(5);

        return view('pages.delivery.index', compact('deliverys'));
    }    
    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        return view('pages.delivery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
        public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'nik' => 'required|string',
            'nama' => 'required|string',
            'asal_perusahaan' => 'required|string',
            'plat_kendaraan' => 'required|string',
            'lokasi_tujuan' => 'required|string',
            'keperluan' => 'required|string',
        ]);

        // Simpan data buku ke dalam database
        Delivery::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'asal_perusahaan' => $request->asal_perusahaan,
            'plat_kendaraan' => $request->plat_kendaraan,
            'lokasi_tujuan' => $request->lokasi_tujuan,
            'keperluan' => $request->keperluan,
        ]);    
        
        return redirect()->route('thanks')->with('success', 'Data Sukses Ditambahkan');
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $delivery = Delivery::findOrFail($id);
        return view('pages.delivery.show', compact('delivery'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     $book = Book::findOrFail($id);
    //     return view('pages.book.edit', compact('book'));
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     $book = Book::findOrFail($id);
    //     $book->update($request->all());
    //     return redirect()->route('book.index')->with('success', 'Laporan Updated successfuly');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     $book = Book::findOrFail($id);
    //     $book->delete();
    //     return redirect()->route('book.index')->with('success', 'Laporan Deleted successfuly');
    // }
}
