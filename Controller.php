<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class CVController extends Controller
{
    public function generatePDF()
    {
        // Datos de ejemplo para el CV (reemplaza con datos reales de tu base de datos)
        $data = [
            'name' => 'Juan Pérez',
            'email' => 'juan.perez@example.com',
            'phone' => '123-456-7890',
            'profile' => 'Ingeniero de sistemas con experiencia en desarrollo web y backend.',
            'experience' => [
                ['title' => 'Desarrollador Backend', 'company' => 'Empresa X', 'years' => '2020-2023'],
                ['title' => 'Desarrollador Web', 'company' => 'Empresa Y', 'years' => '2018-2020'],
            ],
            'education' => [
                ['degree' => 'Ingeniería de Sistemas', 'institution' => 'Universidad Z', 'year' => '2018'],
            ],
            'skills' => ['PHP', 'Laravel', 'MySQL', 'JavaScript'],
        ];

        // Renderizar la vista del PDF
        $pdf = Pdf::loadView('cv.pdf', $data);

        // Descargar el PDF
        return $pdf->download('curriculum_vitae.pdf');
    }
}
