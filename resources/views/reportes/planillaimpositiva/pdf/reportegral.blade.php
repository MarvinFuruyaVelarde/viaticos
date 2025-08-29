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
                      <div style="font-size: 14px">REPORTE PLANILLA IMPOSITIVA RC-IVA</div>
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
            <th>BENEFICIARIO</th>
            <th>CI</th>
            <th>DA</th>
            <th>TOTAL VIATICO</th>
        </tr>
    </thead>

    <tbody>
        @foreach($detallePlanillaImpositivas as $detallePlanillaImpositiva)
        <tr>
            <td style="text-align:center;">{{ $detallePlanillaImpositiva->id }}</td>
            <td style="text-align:center;">{{ $detallePlanillaImpositiva->fecha_registro }}</td>
            <td style="text-align:center;">{{ $detallePlanillaImpositiva->beneficiario }}</td>
            <td style="text-align:center;">{{ $detallePlanillaImpositiva->ci }}</td>
            <td style="text-align:center;">{{ $detallePlanillaImpositiva->da }}</td>
            <td style="text-align:center;">{{ $detallePlanillaImpositiva->total_viatico }}</td>
        </tr>
        @endforeach
    </tbody>
 </table >