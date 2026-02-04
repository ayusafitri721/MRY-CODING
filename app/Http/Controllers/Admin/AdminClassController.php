<?php
// app/Http/Controllers/Admin/AdminClassController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClassModel;
use Illuminate\Http\Request;

class AdminClassController extends Controller
{
    // Menampilkan list kelas (admin view)
    public function index()
    {
        $classes = ClassModel::latest()->paginate(10);
        return view('admin.classes.index', compact('classes'));
    }

    // Form tambah kelas baru
    public function create()
    {
        return view('admin.classes.create');
    }

    // Simpan kelas baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'instructor' => 'required|string|max:255',
            'duration' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'level' => 'required|in:beginner,intermediate,advanced',
        ]);

        ClassModel::create($validated);

        return redirect()->route('admin.classes.index')
            ->with('success', 'Kelas berhasil ditambahkan!');
    }

    // Form edit kelas
    public function edit(ClassModel $class)
    {
        return view('admin.classes.edit', compact('class'));
    }

    // Update kelas
    public function update(Request $request, ClassModel $class)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'instructor' => 'required|string|max:255',
            'duration' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'level' => 'required|in:beginner,intermediate,advanced',
        ]);

        $class->update($validated);

        return redirect()->route('admin.classes.index')
            ->with('success', 'Kelas berhasil diupdate!');
    }

    // Hapus kelas
    public function destroy(ClassModel $class)
    {
        $class->delete();

        return redirect()->route('admin.classes.index')
            ->with('success', 'Kelas berhasil dihapus!');
    }
}