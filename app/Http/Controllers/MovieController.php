<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('films.index', [
            'movies' => Movie::latest('released_at')->paginate(10),
        ]);
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return view('films.show', [
            'movie' => $movie,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('films.create', [
            'categories' => Category::all()->sortBy('name'),
        ]);
    }

       /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required|min:2|unique:movies',
            'synopsys' => 'required|min:10',
            'duration' => 'required|numeric',
            'youtube' => 'nullable',
            'cover' => 'required|image|max:1024',
            'released_at' => 'required|date',
            'category' => 'exists:categories,id',
        ]);
    }

}
