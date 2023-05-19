<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Les;
use Illuminate\Http\Request;

class LesController extends Controller
{
    public function index()
    {
        $les = Les::get();
        return view('backend.les.index', compact('les'));
    }
    public function create()
    {
        $les = null;
        return view('backend.les.create', compact('les'));
    }

    public function store(Request $request)
    {
        Les::create($request->all());
        return redirect()->route('les.index')->with('success', 'Data les baru berhasil disimpan');
    }

    public function edit(Les $les)
    {
        return view('backend.les.create', compact('les'));
    }

    public function update(Request $request, Les $les)
    {
        $les->update($request->all());
        return redirect()->route('les.index')->with('success', 'les berhasil diperbarui');
    }

    public function destroy(Les $les)
    {
        $les->delete();
        return redirect()->route('les.index')->with('success', 'Data les berhasil dihapus');
    }
}
