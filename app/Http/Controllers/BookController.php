<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

class BookController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('book.index')->with('books', Book::orderBy('created_at', 'DESC')->paginate(18));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(auth()->user()->id);
        
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'amazon_link' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048',
            'synopsis' => 'required',
            'publish_date' => 'required'
        ]);

        $newImageName = uniqid() . '_' . $request->title . '.' . $request->image->extension();

        $request->image->move(public_path('images/covers'), $newImageName);

        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'amazon_link' => $request->amazon_link,
            'image_path' => $newImageName,
            'synopsis' => $request->synopsis,
            'publish_date' => $request->publish_date,
            'user_id' => auth()->user()->id
        ]);

        return redirect('/book')->with('message', 'Your book has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('book.book')->with('book', Book::where('id', $id)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}