<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Classification extends Controller
{
    public function index()
    {
        $data = Classification::where('is_active', 1)->get();
        return view('Admin.classification.show', ['data' => $data]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Classification::create($request);
        return redirect()->back()->withErrors($validator)->withInput();
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
