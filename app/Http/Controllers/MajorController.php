<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function index()
    {
        $majors = Major::all();
        return view('majors.index', compact('majors'));
    }

    public function create()
    {
        return view('majors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        Major::create($request->only('name'));

        return redirect()->route('majors.index')->with('success', 'Jurusan berhasil ditambahkan.');
    }

    public function show(Major $major)
    {
        return view('majors.show', compact('major'));
    }

    public function edit(Major $major)
    {
        return view('majors.edit', compact('major'));
    }

    public function update(Request $request, Major $major)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $major->update($request->only('name'));

        return redirect()->route('majors.index')->with('success', 'Jurusan berhasil diperbarui.');
    }

    public function destroy(Major $major)
    {
        $major->delete();
        return redirect()->route('majors.index')->with('success', 'Jurusan berhasil dihapus.');
    }
}