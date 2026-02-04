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
        $classes = ClassModel::latest()->paginate(9);
        return view('classes.index', compact('classes'));
    }

    // Menampilkan detail kelas
    public function show(ClassModel $class)
    {
        return view('classes.show', compact('class'));
    }
}