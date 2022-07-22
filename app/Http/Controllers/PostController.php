<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil semua data
        $posts = Post::all();
        // refresh halaman
        return view('posting.create',compact('posts'));
    }

    /**
     * untuk menampilkan form pembuatan baru.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // refresh halaman
        return view('posting.create');
    }

    /**
     * Store a newly created resource in storage.
     *store membuat inputan baru di storage
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // untuk memvalidasi data hanya bisa input max 250 text
        $validateData = $request->validate([
            'text' => 'required|max:250',
        ]);
        // masuk data ke database
        $post = Post::create($validateData);

        return redirect('posting/create')->with('succes','berhasil');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "Berhasil POSTINGAN";
    }

    /**
     * Show the form for editing the specified resource.
     * form untuk edit
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * untuk meng update data di storage
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * menghapus data dari storage
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
