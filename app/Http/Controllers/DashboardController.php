<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class DashboardController extends Controller
{
    /**
     * Dashboard Admin.
     */
    public function admin(): View
    {
        return view('admin.dashboard');
    }

    /**
     * Dashboard Dosen.
     */
    public function dosen(): View
    {
        return view('dosen.dashboard');
    }

    /**
     * Dashboard Mahasiswa.
     */
    public function mahasiswa(): View
    {
        return view('mahasiswa.dashboard');
    }
}
