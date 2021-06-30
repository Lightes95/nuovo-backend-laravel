<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Publisher;
use App\Models\Author;
use App\Models\Topic;

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
        $author=Author::all();
        $publishers = Publisher::all();
        $topics = Topic::all();
        return view('admin.books.index', compact('books', 'publishers', 'topics','author'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $author=Author::all();
        $publishers = Publisher::all();
        $topics = Topic::all();
        return view('admin.books.create', compact( 'publishers', 'topics','author'));
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
        $books->titolo = $request->titolo;
        $books->luogo_edizione = $request->luogo_edizione;
        $books->anno_edizione = $request->anno_edizione;
        $books->isbn = $request->isbn;
        $books->isbn13 = $request->isbn13;
        $books->copie = $request->copie;
        $books->publisher_id = $request->publisher_id;
        $books->author_id = $request->author_id;
        $books->topic_id = $request->topic_id;
        $books->save();
        return redirect('admin/books');
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
        $authors=Author::all();
        $topics=Topic::all();
        $publishers=Publisher::all();

        return view('admin.books.edit', compact('books','authors','topics','publishers'));
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
        $books = Book::find($id);
        $books->titolo = $request->titolo;
        $books->luogo_edizione = $request->luogo_edizione;
        $books->anno_edizione = $request->anno_edizione;
        $books->isbn = $request->isbn;
        $books->isbn13 = $request->isbn13;
        $books->copie = $request->copie;
        $books->publisher_id = $request->publisher_id;
        $books->author_id = $request->author_id;
        $books->topic_id = $request->topic_id;
        $books->save();
        return redirect('admin/books');
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
        return redirect('admin/books');
    }
}
