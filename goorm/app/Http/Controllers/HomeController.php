<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome() {
        return view('contact');
    }

    public function contact() {
        return view('contact');
    }

    public function bookList() {
        $books = [
            'Harry Potter',
            '<script>alert("Hello")</script>'
        ];
        return view('book', [
            'books' => $books
        ]);
    }
}
