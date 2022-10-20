<?php

namespace App\Exports;

use App\Models\Magueras_Maquinas;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class Reporte implements FromView, ShouldAutoSize{
    public function view(): View
    {
        $datos = Magueras_Maquinas::all();
        return view('admin.reportes.ReporteTotal', compact(['datos']));
    }
}
