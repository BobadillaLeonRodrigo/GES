<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mediciones;
use App\Models\Sensores;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\Snappy\Facades\SnappyPdf;

use App\Exports\MedicionExport;

class ReporteController extends Controller {
    public function export() {
        return Excel::download(new MedicionExport, 'Mediciones.xlsx');
    }
}
