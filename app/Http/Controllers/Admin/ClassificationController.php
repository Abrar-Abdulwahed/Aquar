<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\Classification;
use App\Http\Controllers\Controller;

class ClassificationController extends Controller
{
    public function index()
    {
        //$data = Classification::whereId(1)->first();
        // find($id), findorFail($id), get(), first(),
        $data = Classification::active()->get();
        
        
        return view('Admin.classification.index', ['data' => $data]);
        // return view('Admin.classification.index')->with('data', $data);
        // return view('Admin.classification.index', compact('data'));
    }

    public function create()
    {
        // return view('Admin.Classification.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        // $classi = new Classification();
        // $classi->name = $request->input('name'); 
        // $classi->description = $request->input('description');
        // $classi->save(); 

        Classification::create($request->except(['_token']));

        return redirect()->back();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
