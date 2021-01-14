<?php

namespace App\Http\Controllers;

use App\Models\Abbr;
use Illuminate\Http\Request;

class AbbrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index')->with('abbrArr', Abbr::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create')->with('abbrArr', Abbr::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saveAbbr(Request $request)
    {
        $abbr = new Abbr;
        $abbr->word=$request->input('word');
        $abbr->abbr=$request->input('abbr');
        $abbr->save();

        $request->session()->flash('msg','Abbreviation Added');
        return redirect('/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Abbr  $abbr
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        return view('show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Abbr  $abbr
     * @return \Illuminate\Http\Response
     */
    public function edit(Abbr $abbr, $id)
    {
        return view('edit')->with('abbrArr', Abbr::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Abbr  $abbr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Abbr $abbr)
    {
        $abbr = Abbr::find($request->id);
        $abbr->word=$request->input('word');
        $abbr->abbr=$request->input('abbr');
        $abbr->save();

        $request->session()->flash('msg','Abbreviation Updated');
        return redirect('/create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Abbr  $abbr
     * @return \Illuminate\Http\Response
     */
    public function destroy(Abbr $abbr, $id)
    {
        Abbr::destroy(array('id',$id));
        return redirect('create');
    }
}
