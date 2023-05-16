<?php

namespace App\Http\Controllers;

use App\Models\Politik;
use Illuminate\Http\Request;

class PolitikController extends Controller
{
    public function index(){
        $politik = Politik::get();
        return view('view_page', compact('politik'));
    }

    public function create(){
        return view('add_page');
    }

    public function store(Request $request){
        Politik::create($request->all());

        return redirect()->route('politik.index');
    }

    public function edit(Politik $politik){
        return view('add_page', compact('politik'));
    }

    public function update(Request $request, Politik $politik){
        $politik->update($request->all());

        return redirect()->route('politik.index');
    }

    public function destroy(Politik $politik){
        $politik->delete();
        return redirect()->route('politik.index');
    }
}
