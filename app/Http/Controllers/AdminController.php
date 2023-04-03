<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
      //  return view('admin.dashboard');
        return view('admin.index');
    }

    public function show_kalender()
    {
        return view('admin.kalender');
    }

    public function show_daftarPasien()
    {
        return view('admin.daftarPasien');
    }

    public function show_dokumentasi()
    {
        return view('admin.dokumentasi');
    }

    public function show_agenda()
    {
        return view('admin.agenda');
    }

    public function show_petugasMedis()
    {
        return view('admin.petugasMedis');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }
}
