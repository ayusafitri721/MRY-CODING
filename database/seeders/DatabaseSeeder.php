<?php
// database/seeders/DatabaseSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\ClassModel;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Buat user admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // Buat user biasa
        User::create([
            'name' => 'John Doe',
            'email' => 'user@user.com',
            'password' => Hash::make('password'),
            'role' => 'user',
        ]);

        // Buat kelas dummy
        ClassModel::create([
            'title' => 'Laravel Fundamentals',
            'description' => 'Pelajari dasar-dasar Laravel dari nol hingga mahir. Kelas ini mencakup routing, controllers, blade templates, eloquent ORM, dan authentication.',
            'instructor' => 'Budi Santoso',
            'duration' => 20,
            'price' => 500000,
            'level' => 'beginner',
        ]);

        ClassModel::create([
            'title' => 'React JS Complete Guide',
            'description' => 'Kuasai React JS dari fundamental hingga advanced. Belajar hooks, context API, state management, dan best practices dalam membangun aplikasi modern.',
            'instructor' => 'Siti Nurhaliza',
            'duration' => 30,
            'price' => 750000,
            'level' => 'intermediate',
        ]);

        ClassModel::create([
            'title' => 'Python for Data Science',
            'description' => 'Pelajari Python untuk analisis data dan machine learning. Mulai dari pandas, numpy, hingga visualisasi data dengan matplotlib dan seaborn.',
            'instructor' => 'Ahmad Rahman',
            'duration' => 25,
            'price' => 650000,
            'level' => 'intermediate',
        ]);

        ClassModel::create([
            'title' => 'Advanced JavaScript',
            'description' => 'Deep dive ke JavaScript modern. Pelajari async/await, promises, closures, prototypes, dan design patterns untuk aplikasi enterprise.',
            'instructor' => 'Dewi Kartika',
            'duration' => 35,
            'price' => 900000,
            'level' => 'advanced',
        ]);

        ClassModel::create([
            'title' => 'HTML & CSS Basics',
            'description' => 'Mulai journey coding Anda dengan mempelajari HTML dan CSS. Cocok untuk pemula yang ingin membuat website dari nol.',
            'instructor' => 'Rudi Hermawan',
            'duration' => 15,
            'price' => 350000,
            'level' => 'beginner',
        ]);
    }
}