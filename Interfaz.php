// app/Repositories/CurriculumVitaeRepository.php

namespace App\Repositories;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Storage;

interface CurriculumVitaeRepository
{
    public function descargarCurriculumVitae($datos);
}