<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class BookController extends Controller
{
    public function index() {
        return "Ini adalah book controller.";
    }

    public function viewJudul($judul) {
        $data = array('judul' => $judul);
        return View::make('Books.Book', $data);
    }
}