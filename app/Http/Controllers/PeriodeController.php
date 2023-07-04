<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PeriodePenerimaan;

class PeriodeController extends Controller
{
    public function index()
    {
        $periodes = PeriodePenerimaan::get();
        return view('rekrutmen.periode.periode', compact('periodes'));
    }
}
