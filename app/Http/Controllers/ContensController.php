<?php

namespace App\Http\Controllers;

use App\Models\contens;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Mail\Mailables\Content;
use App\Http\Requests\StorecontensRequest;
use App\Http\Requests\UpdatecontensRequest;

class ContensController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('manage',
            [
                "title" => "manage",
                "posts" => contens::all(),
            ],
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('insertdata',
            [
                "title" => "manage",  
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Contens::create($request->all());

        return redirect('/content')->with('success', 'News added siccesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view("edit",[
            "title" => "manage",                                                        
            "posts" => contens::find($id),          
        ]);    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            "title" => "required|max:255",
            "authors" => "required",
            "excerpt" => "required",
            "content" => "required"

        ]);
        contens::where('id', $id)
            ->update($validatedData);
        return redirect('/content')->with('success', 'News updated siccesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = contens::findorfail($id);

        $delete->delete(); 
      
        return redirect('/content')->with('success', 'News deleted siccesfully');
    }

}
