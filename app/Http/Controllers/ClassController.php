<?php
// app/Http/Controllers/ClassController.php

namespace App\Http\Controllers;

use App\Models\ClassModel;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    // Menampilkan list semua kelas
    public function index()
    {
        // Redirect to the new dashboard view which provides an enhanced overview.
        // This keeps the existing `classes.index` intact while surfacing the
        // new dashboard at the familiar `/classes` URL.
        return redirect()->route('dashboard');
    }

    // Menampilkan detail kelas
    public function show(ClassModel $class)
    {
        return view('classes.show', compact('class'));
    }
}