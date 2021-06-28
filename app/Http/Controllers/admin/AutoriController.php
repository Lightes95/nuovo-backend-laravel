<?php

namespace App\Http\Controllers\admin;
use App\Models\Author;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AutoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {     
        $autore=Author::all();
        return view('admin.authors.autori',compact('autore'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.authors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $autore=new Author;

        $autore->nome=$request->nome;
        $autore->cognome=$request->cognome;
        $autore->save();
        return redirect('admin/authors');
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
        $autore=Author::find($id);
        return view('admin.authors.edit',compact('autore'));
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
        $autore = Author::find($id);
        $autore->nome = $request->nome;
        $autore->cognome = $request->cognome;
        $autore->save();
        return redirect('admin/authors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $autore = Author::find($id);
        $autore->delete();
        return redirect('admin/authors');
    }
}
