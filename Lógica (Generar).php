// app/Repositories/CurriculumVitaeRepository.php

namespace App\Repositories;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Storage;

class CurriculumVitaeRepository
{
    public function descargarCurriculumVitae($datos)
    {
        $pdf = PDF::loadView('curriculum-vitae', $datos);
        $pdf->setPaper('A4', 'portrait');
        $pdf->save('curriculum-vitae.pdf');
        return $pdf->download('curriculum-vitae.pdf');
    }
}