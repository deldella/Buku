<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bukus = Buku::all();
        return view("listbuku", compact('bukus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("tambah");
    }

    public function tambah()
    {
        return view("tambah");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Buku::create($request->all());
        return redirect()->route("buku");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Buku::find($id);
        return view("edit", compact('listbuku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Buku::find($id);
        $item->update($request->all());
        return redirect()->route('buku');
    }

    public function tampilkandata($id)
    {
        $bukus = Buku::find($id);
        return view("update", compact('bukus'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $item = Buku::find($id);
        $item->delete();
        return redirect()->route('buku')->with('success', 'Data Berhasil Dihapus');
    }

    public function detail($id)
    {
        $item = Buku::find($id);
        return view('detail', compact('bukus'));
    }
}
