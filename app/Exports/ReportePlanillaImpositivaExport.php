<?php

namespace App\Exports;

use App\Models\Reporte;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Events\BeforeSheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;

class ReportePlanillaImpositivaExport implements FromCollection, WithHeadings, WithTitle, WithEvents
{
    protected $fechaInicioRegistro;
    protected $fechaFinRegistro;
    
    // Constructor para recibir parámetros
    public function __construct($fechaInicioRegistro, $fechaFinRegistro)
    {
        $this->fechaInicioRegistro = $fechaInicioRegistro;
        $this->fechaFinRegistro = $fechaFinRegistro;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $planillaimpostivas = Reporte::reportePlanillaImpositiva($this->fechaInicioRegistro, $this->fechaFinRegistro);
    
        // Convertir el array en una colección
        $planillaimpostivas = collect($planillaimpostivas);

        // Usar map para agregar el atributo ci_nit
        return $planillaimpostivas->map(function ($planillaimpostiva) {
            return [
                'id' => $planillaimpostiva->id ?? '',
                'fecha_registro' => $planillaimpostiva->fecha_registro ?? '',
                'beneficiario' => $planillaimpostiva->beneficiario ?? '',
                'ci' => $planillaimpostiva->ci ?? '',
                'da' => $planillaimpostiva->da ?? '',
                'total_viatico' => $planillaimpostiva->total_viatico ?? '',
            ];
        });
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'NRO.',
            'FECHA REGISTRO',
            'BENEFICIARIO',
            'CI',
            'DA',
            'TOTAL VIATICO',
        ];
    }

    /**
     * @return string
     */
    public function title(): string
    {
        return 'Reporte Planilla Impositiva RC-IVA';
    }

    /**
     * @return array
     */
    public function registerEvents(): array
    {
        return [
            BeforeSheet::class => function(BeforeSheet $event) {
                $sheet = $event->sheet;

                // Establecer el título con salto de línea
                $title = "NAVEGACIÓN AÉREA Y AEROPUERTOS BOLIVIANOS\nSISTEMA ALQUILERES\nREPORTE PLANILLA IMPOSITIVA RC-IVA";
                $sheet->setCellValue('A1', $title);
                $sheet->mergeCells('A1:F1');
                $sheet->getStyle('A1')->applyFromArray([
                    'font' => [
                        'bold' => true,
                        'size' => 16,
                        'underline' => true,
                    ],
                    'alignment' => [
                        'horizontal' => Alignment::HORIZONTAL_CENTER,
                        'vertical' => Alignment::VERTICAL_CENTER,
                        'wrapText' => true,
                    ],
                ]);

                // Ajustar el ancho de las columnas
                foreach (range('A', 'F') as $columnID) {
                    $sheet->getColumnDimension($columnID)->setWidth(30);
                }

                // Ajustar el alto de la fila del título
                $sheet->getRowDimension(1)->setRowHeight(60);
            },

            AfterSheet::class => function(AfterSheet $event) {
                $sheet = $event->sheet->getDelegate();
                $headerRange = 'A2:F2';

                // Aplicar estilos a los encabezados
                $sheet->getStyle($headerRange)->applyFromArray([
                    'font' => [
                        'bold' => true,
                        'color' => ['argb' => '000000'],
                    ],
                    'alignment' => [
                        'horizontal' => Alignment::HORIZONTAL_CENTER,
                        'vertical' => Alignment::VERTICAL_CENTER,
                    ],
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => Border::BORDER_THIN,
                        ],
                    ],
                ]);

                // Aplicar estilos a las columnas
                $columns = [
                    'A' => Alignment::HORIZONTAL_CENTER, // Alinear al centro para la columna ID
                    'B' => Alignment::HORIZONTAL_CENTER, // Alinear al centro para la columna FECHA DE REGISTRO
                    'C' => Alignment::HORIZONTAL_CENTER, // Alinear al centro para la columna BENEFICIARIO
                    'D' => Alignment::HORIZONTAL_CENTER, // Alinear al centro para la columna CI
                    'E' => Alignment::HORIZONTAL_CENTER, // Alinear al centro para la columna DA
                    'F' => Alignment::HORIZONTAL_CENTER, // Alinear al centro para la columna TOTAL VIATICO
                ];

                foreach ($columns as $columnID => $horizontalAlignment) {
                    $sheet->getStyle($columnID)->applyFromArray([
                        'alignment' => [
                            'horizontal' => $horizontalAlignment,
                            'vertical' => Alignment::VERTICAL_CENTER,
                        ],
                    ]);
                }
            },
        ];
    }
}
