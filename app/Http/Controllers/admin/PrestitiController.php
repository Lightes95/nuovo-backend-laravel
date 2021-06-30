<?php

namespace App\Http\Controllers\admin;
use App\Models\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Loan;
use App\Models\User;

class PrestitiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $users = User::all();
        $books = Book::all();
        $loans = Loan::all();
        return view('admin.loans.index', compact('loans','users','books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.loans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $loans = new Loan;

        $loans->prestato_il = $request->prestato_il;
        $loans->restituito_il = $request->restituito_il;
        $loans->book_id = $request->book_id;
        $loans->user_id = $request->user_id;
        $loans->save();
        return redirect('admin/loans');
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
        $users = User::all();
        $books = Book::all();
        $loans = Loan::find($id);
        return view('admin.loans.edit', compact('loans','users','books'));
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
        $loans = Loan::find($id);
        $loans->prestato_il = $request->prestato_il;
        $loans->restituito_il = $request->restituito_il;
        $loans->book_id = $request->book_id;
        $loans->user_id = $request->user_id;
        $loans->save();
        return redirect('admin/loans');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $loans = Loan::find($id);
        $loans->delete();
        return redirect('admin/loans');
    }
}
