<?php

namespace App\Http\Controllers\Persuratan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersuratanController extends Controller
{
    public function suratMasuk()
    {
        return view('persuratan.surat-masuk');
    }
}
