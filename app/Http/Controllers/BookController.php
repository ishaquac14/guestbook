<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $searchTerm = $request->input('search');

        $books = Book::orderBy('created_at', 'DESC')
            ->where(function ($query) use ($searchTerm) {
                if ($searchTerm) {
                    $query->where('nama', 'LIKE', '%' . $searchTerm . '%')
                        ->orWhere('asal_perusahaan', 'LIKE', '%' . $searchTerm . '%')
                        ->orWhere('departemen', 'LIKE', '%' . $searchTerm . '%')
                        ->orWhere('tujuan_lokasi', 'LIKE', '%' . $searchTerm . '%');
                }
            })
            ->paginate(5);

        return view('pages.book.index', compact('books'));
    }    
    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        return view('pages.book.create');
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
            'nama_pic' => 'required|string',
            'departemen' => 'required|string',
            'tujuan_lokasi' => 'required|string',
            'tujuan' => 'required|string',
        ]);

        // Simpan data buku ke dalam database
        Book::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'asal_perusahaan' => $request->asal_perusahaan,
            'nama_pic' => $request->nama_pic,
            'departemen' => $request->departemen,
            'tujuan_lokasi' => $request->tujuan_lokasi,
            'tujuan' => $request->tujuan,
        ]);
        
        return redirect()->route('book.index')->with('success', 'Data Sukses Ditambahkan');
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('pages.book.show', compact('book'));
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
