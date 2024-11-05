<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function orders() {
        return view('dashboard');
    }

    public function tables() {
        $tables = Table::all();
        return view('dashboard.tables',
        [
            'tables' => $tables
        ]);
    }
}
