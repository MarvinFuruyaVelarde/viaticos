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

class ReporteDetalleViaticoExport implements FromCollection, WithHeadings, WithTitle, WithEvents
{

    protected $fechaRegistro;
    protected $ciNit;
    protected $da;
    protected $origen;
    protected $destino;
    protected $fechaSalida;
    protected $fechaRetorno;
    protected $via;
    
    // Constructor para recibir parámetros
    public function __construct($fechaRegistro, $ciNit, $da, $origen, $destino, $fechaSalida, $fechaRetorno, $via)
    {
        $this->fechaRegistro = $fechaRegistro;
        $this->ciNit = $ciNit;
        $this->da = $da;
        $this->origen = $origen;
        $this->destino = $destino;
        $this->fechaSalida = $fechaSalida;
        $this->fechaRetorno = $fechaRetorno;
        $this->via = $via;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $detalleviaticos = Reporte::reporteDetalleViatico($this->fechaRegistro, $this->ciNit, $this->da, $this->origen, $this->destino, $this->fechaSalida, $this->fechaRetorno, $this->via);
    
        // Convertir el array en una colección
        $detalleviaticos = collect($detalleviaticos);

        // Usar map para agregar el atributo ci_nit
        return $detalleviaticos->map(function ($detalleviatico) {
            return [
                'id' => $detalleviatico->id ?? '',
                'fecha_registro' => $detalleviatico->fecha_registro ?? '',
                'hoja_ruta' => $detalleviatico->hoja_ruta ?? '',
                'beneficiario' => $detalleviatico->beneficiario ?? '',
                'ci' => $detalleviatico->ci ?? '',
                'da' => $detalleviatico->da ?? '',
                'cargo' => $detalleviatico->cargo ?? '',
                'origen' => $detalleviatico->origen ?? '',
                'destino' => $detalleviatico->destino ?? '',
                'fecha_salida' => $detalleviatico->fecha_salida ?? '',
                'fecha_retorno' => $detalleviatico->fecha_retorno ?? '',
                'total_dia' => $detalleviatico->total_dia ?? '',
                'distancia' => $detalleviatico->distancia ?? '',
                'total_viatico' => $detalleviatico->total_viatico ?? '',
                'pasaje' => $detalleviatico->pasaje ?? '',
                'retencion_pasaje' => $detalleviatico->retencion_pasaje ?? '',
                'total_pasaje' => $detalleviatico->total_pasaje ?? '',
                'flete' => $detalleviatico->flete ?? '',
                'retencion_flete' => $detalleviatico->retencion_flete ?? '',
                'total_flete' => $detalleviatico->total_flete ?? '',
                'total_viatico_pasaje' => $detalleviatico->total_viatico_pasaje ?? '',
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
            'HOJA DE RUTA',
            'BENEFICIARIO',
            'CI',
            'DA',
            'CARGO',
            'ORIGEN',
            'DESTINO',
            'SALIDA',
            'RETORNO',
            'TOTAL DIA(S)',
            'DISTANCIA',
            'TOTAL VIATICO',
            'PASAJE',
            'RETENCION PASAJE',
            'TOTAL PASAJE',
            'FLETE',
            'RETENCION FLETE',
            'TOTAL FLETE',
            'TOTAL VIATICO/PASAJE',
        ];
    }

    /**
     * @return string
     */
    public function title(): string
    {
        return 'Reporte Detalle de Viaticos';
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
                $title = "NAVEGACIÓN AÉREA Y AEROPUERTOS BOLIVIANOS\nSISTEMA ALQUILERES\nREPORTE DETALLE DE VIATICOS";
                $sheet->setCellValue('A1', $title);
                $sheet->mergeCells('A1:U1');
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
                foreach (range('A', 'U') as $columnID) {
                    $sheet->getColumnDimension($columnID)->setWidth(30);
                }

                // Ajustar el alto de la fila del título
                $sheet->getRowDimension(1)->setRowHeight(60);
            },

            AfterSheet::class => function(AfterSheet $event) {
                $sheet = $event->sheet->getDelegate();
                $headerRange = 'A2:U2';

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
                    'C' => Alignment::HORIZONTAL_CENTER, // Alinear al centro para la columna HOJA DE RUTA
                    'D' => Alignment::HORIZONTAL_CENTER, // Alinear al centro para la columna BENEFICIARIO
                    'E' => Alignment::HORIZONTAL_CENTER, // Alinear al centro para la columna CI
                    'F' => Alignment::HORIZONTAL_CENTER, // Alinear al centro para la columna DA
                    'G' => Alignment::HORIZONTAL_CENTER, // Alinear al centro para la columna CARGO
                    'H' => Alignment::HORIZONTAL_CENTER, // Alinear al centro para la columna ORIGEN
                    'I' => Alignment::HORIZONTAL_CENTER, // Alinear al centro para la columna DESTINO
                    'J' => Alignment::HORIZONTAL_CENTER, // Alinear al centro para la columna SALIDA
                    'K' => Alignment::HORIZONTAL_CENTER, // Alinear al centro para la columna RETORNO
                    'L' => Alignment::HORIZONTAL_CENTER, // Alinear al centro para la columna TOTAL DIA(S)
                    'M' => Alignment::HORIZONTAL_CENTER, // Alinear al centro para la columna DISTANCIA
                    'N' => Alignment::HORIZONTAL_CENTER, // Alinear al centro para la columna TOTAL VIATICO
                    'O' => Alignment::HORIZONTAL_CENTER, // Alinear al centro para la columna PASAJE
                    'P' => Alignment::HORIZONTAL_CENTER, // Alinear al centro para la columna RETENCION PASAJE
                    'Q' => Alignment::HORIZONTAL_CENTER, // Alinear al centro para la columna TOTAL PASAJE
                    'R' => Alignment::HORIZONTAL_CENTER, // Alinear al centro para la columna FLETE
                    'S' => Alignment::HORIZONTAL_CENTER, // Alinear al centro para la columna RETENCION FLETE
                    'T' => Alignment::HORIZONTAL_CENTER, // Alinear al centro para la columna TOTAL FLETE
                    'U' => Alignment::HORIZONTAL_CENTER, // Alinear al centro para la columna TOTAL VIATICO/PASAJE
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
