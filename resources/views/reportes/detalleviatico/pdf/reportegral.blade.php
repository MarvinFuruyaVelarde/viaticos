<div class="margin-top">
    <div style="border: solid 1px #4e4b4bfa; border-radius:20px;">
       <div style="padding: 12px">
          <table class="title" style="width: 100%;">
             <tr class="items">
                <td style="width: 20%; text-align:center">
                    <img src="{{'storage/descarga1.png'}}"  width="100px" alt="Image"/>
                 </td>
                   <td style="width: 100%; text-align:center; font-weight: bold;">
                      <div style="font-size: 18px; font-weight: bold;">
                        NAVEGACIÓN AÉREA Y AEROPUERTOS BOLIVIANOS 
                      </div>
                      <div style="font-size: 16px; font-weight: bold;">
                        SISTEMA ALQUILERES   
                      </div>
                      <div style="font-size: 14px">REPORTE DETALLE DE VIATICOS</div>
                   </td>
                   <td style="width: 20%; text-align:center"> 
                   </td>
             </tr>
          </table>        
       </div>
    </div>
</div>

<br>
<table  style="width:100%; font-size:10">
    <thead>
        <tr style="background: darkgray; text-align: center;">
            <th>NRO.</th>
            <th>FECHA REGISTRO</th>
            <th>HOJA DE RUTA</th>
            <th>BENEFICIARIO</th>
            <th>CI</th>
            <th>DA</th>
            <th>CARGO</th>
            <th>ORIGEN</th>
            <th>DESTINO</th>
            <th>SALIDA</th>
            <th>RETORNO</th>
            <th>TOTAL DIA(S)</th>
            <th>DISTANCIA</th>
            <th>TOTAL VIATICO</th>
            <th>PASAJE</th>
            <th>RETENCION PASAJE</th>
            <th>TOTAL PASAJE</th>
            <th>FLETE</th>
            <th>RETENCION FLETE</th>
            <th>TOTAL FLETE</th>
            <th>TOTAL VIATICO/PASAJE</th>
        </tr>
    </thead>

    <tbody>
        @foreach($detalleViaticos as $detalleViatico)
        <tr>
            <td style="text-align:center;">{{ $detalleViatico->id }}</td>
            <td style="text-align:center;">{{ $detalleViatico->fecha_registro }}</td>
            <td style="text-align:center;">{{ $detalleViatico->hoja_ruta }}</td>
            <td style="text-align:center;">{{ $detalleViatico->beneficiario }}</td>
            <td style="text-align:center;">{{ $detalleViatico->ci }}</td>
            <td style="text-align:center;">{{ $detalleViatico->da }}</td>
            <td style="text-align:center;">{{ $detalleViatico->cargo }}</td>
            <td style="text-align:center;">{{ $detalleViatico->origen }}</td>
            <td style="text-align:center;">{{ $detalleViatico->destino }}</td>
            <td style="text-align:center;">{{ $detalleViatico->fecha_salida }}</td>
            <td style="text-align:center;">{{ $detalleViatico->fecha_retorno }}</td>
            <td style="text-align:center;">{{ $detalleViatico->total_dia }}</td>
            <td style="text-align:center;">{{ $detalleViatico->distancia }}</td>
            <td style="text-align:center;">{{ $detalleViatico->total_viatico }}</td>
            <td style="text-align:center;">{{ $detalleViatico->pasaje }}</td>
            <td style="text-align:center;">{{ $detalleViatico->retencion_pasaje }}</td>
            <td style="text-align:center;">{{ $detalleViatico->total_pasaje }}</td>
            <td style="text-align:center;">{{ $detalleViatico->flete }}</td>
            <td style="text-align:center;">{{ $detalleViatico->retencion_flete }}</td>
            <td style="text-align:center;">{{ $detalleViatico->total_flete }}</td>
            <td style="text-align:center;">{{ $detalleViatico->total_viatico_pasaje }}</td>
        </tr>
        @endforeach
    </tbody>
 </table >