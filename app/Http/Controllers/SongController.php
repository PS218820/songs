<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //$songs = ["Living on a prayer", "Nothing else matters", "Thunderstruck", "Back in black", "Ace of spades"];

      //return view('index', ['songs' => $songs]);

      //return view('index', ['songs' => Song::all()]);
      $songs = \App\Models\Song::all();
      return view ('index', ['songs' => $songs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'title' => 'required',
          'singer' => 'required',
        ]);

        \App\Models\Song::create($request->all());

        //return redirect()->route('songs');
        //return redirect()->route('index');
                        //->with('success','song created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($urlnaam)
    {
      //$songs = ["Living on a prayer", "Nothing else matters", "Thunderstruck", "Back in black", "Ace of spades"];

    //  if (in_array($urlnaam, $songs))
    //  {
    //    $urlnaam = Str::upper($urlnaam);

    //    return view('show', ['urlnaam' => $urlnaam]);
    //  } else {
    //    return view('show', ['urlnaam' => "Geen geldig song"]);
      //}
      return view('show', ['song' => \App\Models\Song::find($urlnaam)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($urlnaam)
    {
      $songs = ["Living on a prayer", "Nothing else matters", "Thunderstruck", "Back in black", "Ace of spades"];

      if (in_array($urlnaam, $songs))
      {
        $urlnaam = Str::upper($urlnaam);

        return view('edit', ['urlnaam' => $urlnaam]);
      } else {
        return view('edit', ['urlnaam' => "Geen geldig song"]);
      }
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
