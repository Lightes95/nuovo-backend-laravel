<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class LibriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('admin.books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $books = new Book;
        $books->id();
        $books->titolo = $request->titolo;
        $books->edizione = $request->edizione;
        $books->luogo_edizione = $request->luogo_edizone;
        $books->isbn = $request->isbn;
        $books->isbn13 = $request->isbn13;
        $books->copie = $request->copie;
        $books->publisher_id = $request->publisher_id;
        $books->topic_id = $request->topic_id;
        $books->save();
        return redirect('admin.books.store', compact('books'));
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
        $books = Book::find($id);
        return view('admin.books.edit', compact('books'));
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
        $books = new Book;
        $books->id();
        $books->titolo = $request->titolo;
        $books->edizione = $request->edizione;
        $books->luogo_edizione = $request->luogo_edizone;
        $books->isbn = $request->isbn;
        $books->isbn13 = $request->isbn13;
        $books->copie = $request->copie;
        $books->publisher_id = $request->publisher_id;
        $books->topic_id = $request->topic_id;
        $books->save();
        return redirect('admin.books.update', compact('books'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $books = Book::find($id);
        $books->delete();
        return redirect('/books');
    }
}
