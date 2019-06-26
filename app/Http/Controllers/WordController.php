<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Word;
class WordController extends Controller
{
    //
    public function index(Request $request){
        $words=Word::latest()->paginate(10);
        return view('mywords.index',compact('words'))->with('i',($request->input('page',1)-1)*10);
    }

    public function create()
    {
        return view('mywords.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'word' => 'required',
            'meaning' => 'required',
        ]);
        Word::create($request->all());
        return redirect()->route('mywords.index')->with('success','Words created successfully');
    }

    public function show($id){
        $word= Word::find($id);
        return view('mywords.show',compact('word'));
    }

    public function edit($id){
        $word= Word::find($id);
        return view('mywords.edit',compact('word'));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'word' => 'required',
            'meaning' => 'required',
        ]);
        Word::find($id)->update($request->all());
        return redirect()->route('mywords.index')->with('success','Words updated successfully');
    }
    public function destroy($id){
        Word::find($id)->delete();
        return redirect()->route('mywords.index')->with('success','Words deleted successfully');
    }
}
