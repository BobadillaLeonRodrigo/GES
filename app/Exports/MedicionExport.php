<?php

namespace App\Exports;

use App\Models\Mediciones;
use App\Models\Sensores;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\Fill;

class MedicionExport implements FromCollection, WithMapping, WithHeadings, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection() {
        return Mediciones::select('id_mediciones', 'humedad_m', 'temperatura_m', 'medicion', 'fecha_m', 'hora_m', 'id_sensor')->get();
    }
    public function map($row): array {
    // Obtener el nombre del sensor en lugar del ID
        $sensor = Sensores::find($row->id_sensor);
            $tiposensor = $sensor ? $sensor->tiposensor : '';
                return [
                    $row->id_mediciones,
                    $row->humedad_m,
                    $row->temperatura_m,
                    $row->medicion,
                    $row->hora_m,
                    $tiposensor, // Usar el nombre del sensor en lugar del ID
                ];
    }
    public function headings(): array {
        return [
            'Id de Medicion',
            'Humedad',
            'Temperatura',
            'Medicion(Horas)',
            'Fecha',
            'Id Sensor',
        ];
    }
    public function styles($sheet) {
        return [
            1 => [
                'font' => [
                    'bold' => true,
                ],
                'fill' => [
                    'fillType' => Fill::FILL_SOLID,
                    'startColor' => [
                    'rgb' => '00FA9A', // color verde medio claro
                    ],
                ],
            ],
        ];
    }
}
