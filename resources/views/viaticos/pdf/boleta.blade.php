<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
      <style>
          .page-break {
              page-break-after: always;
          }
      </style>
  </head>
  <body>
    <div>
      <div class="margin-top">
        <div style="border: solid 1px #4e4b4bfa; border-radius:20px;">
          <div style="padding: 12px">
            <br>
            <table class="title" style="width: 100%;">
              <tr class="items">

                <td style="width: 30%; text-align: left;">
                  <img src="{{ ('storage/descarga1.png') }}" width="100px" alt="Image"/>
                </td>
                
                <td style="width: 35%; text-align: center; font-weight: bold;">
                  <div style="font-size: 12px; font-weight: bold;">
                    NAVEGACIÓN AÉREA Y AEROPUERTOS BOLIVIANOS 
                  </div>
                  <div style="font-size: 12px; font-weight: bold;">
                    SISTEMA DE VIATICOS   
                  </div>
                  <div style="font-size: 12px; text-decoration: underline;">
                    LIQUIDACIÓN DE VIATICOS
                  </div>
                </td>
                
                <td style="width: 35%; font-size: 10px; text-align: right;">
                  <span style="font-weight: bold;">FECHA DE IMPRESIÓN: </span> {{ \Carbon\Carbon::parse($fechaImpresion)->format('d/m/Y H:i:s') }}
                  <br><br><br>
                </td>
              </tr>
              <br>      
              <tr>
                <td colspan="3"><hr></td>
              </tr>
              <br>
            </table>    

            <table style="width:100%; font-size:10">
              <thead>
                <tr style="background: darkgray; text-align: center; font-size: 12px;">
                    <th>FECHA DE REGISTRO</th>
                    <th>HOJA DE RUTA</th>
                </tr>
              </thead>
              
              <tbody>
                <tr>
                  <td style="width: 15%; text-align:center; font-size: 12px;">{{ \Carbon\Carbon::parse($viatico->fecha_registro)->format('d/m/Y') }}</td>
                  <td style="width: 55%; text-align:center; font-size: 12px;">{{$viatico->hoja_ruta}} </td>                  
                </tr>   
        
              </tbody>
            </table>
            <table style="width:100%; font-size:10">
              <thead>
                <tr style="background: darkgray; text-align: center; font-size: 12px;">
                    <th>CI</th>
                    <th>NOMBRE DEL BENEFICIARIO</th>
                    <th>DA</th>
                    <th>NUMERO DE CUENTA</th>
                    <th>ESCALA</th>
                </tr>
              </thead>
              
              <tbody>
                <tr>
                  <td style="width: 15%; text-align:center; font-size: 12px;">{{ $viatico->ci }}</td>
                  <td style="width: 55%; text-align:center; font-size: 12px;">{{$viatico->beneficiario}} </td>
                  <td style="width: 5%; text-align:center; font-size: 12px;">{{$viatico->da}}</td>
                  <td style="width: 20%; text-align:center; font-size: 12px;">{{ $viatico->numero_cuenta }}</td>
                  <td style="width: 5%; text-align:center; font-size: 12px;">{{ $viatico->escala }}</td>
                </tr>   
        
              </tbody>
            </table>
            <table style="width:100%; font-size:10">
              <thead>
                <tr style="background: darkgray; text-align: center; font-size: 12px;">
                    <th>ESTADO</th>
                    <th>CARGO</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td style="width: 30%; text-align:center; font-size: 12px;">{{$viatico->estado_beneficiario == 1 ? 'ACTIVO' : 'INACTIVO'}} </td>
                  <td style="width: 70%; text-align:center; font-size: 12px;">{{$viatico->cargo}}</td>
                </tr>   
              </tbody>
              <tr>
                <td colspan="2"><hr></td>
              </tr>
              <tr>
                <td colspan="2" style="text-align: center; font-weight: bold; font-size: 12px;">
                  MISIÓN OFICIAL AL INTERIOR DEL PAÍS
                </td>
              </tr>
              <tr>
                <td colspan="2"><hr></td>
              </tr>
            </table>
            <table style="width:100%; font-size:10">
              <thead>
                <tr style="background: darkgray; text-align: center; font-size: 12px;">
                    <th>ORIGEN</th>
                    <th>SALIDA</th>
                    <th>HORA</th>
                    <th>DESTINO</th>
                    <th>RETORNO</th>
                    <th>HORA</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td style="width: 35%; text-align:center; font-size: 12px;">{{$origen}} </td>
                  <td style="width: 10%; text-align:center; font-size: 12px;">{{ \Carbon\Carbon::parse($viatico->fecha_salida)->format('d/m/Y') }}</td>
                  <td style="width: 5%; text-align:center; font-size: 12px;">{{$viatico->hora_salida}}</td>
                  <td style="width: 35%; text-align:center; font-size: 12px;">{{$destino}}</td>
                  <td style="width: 10%; text-align:center; font-size: 12px;">{{ \Carbon\Carbon::parse($viatico->fecha_retorno)->format('d/m/Y') }}</td>
                  <td style="width: 5%; text-align:center; font-size: 12px;">{{$viatico->hora_retorno}}</td>
                </tr>
              </tbody>
            </table>   
            <table style="width:100%; font-size:10">
              <thead>
                <tr style="background: darkgray; text-align: center; font-size: 12px;">
                    <th>TOTAL DIA(S)</th>
                    <th>FEC. MÁX. PRESENTACIÓN</th>
                    <th>DISTANCIA</th>
                    <th>VIA</th>
                    <th>DESCRIPCIÓN</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td style="width: 5%; text-align:center; font-size: 12px;">{{$viatico->total_dia}} </td>
                  <td style="width: 10%; text-align:center; font-size: 12px;">{{ \Carbon\Carbon::parse($viatico->fecha_maxima_presentacion)->format('d/m/Y') }}</td>
                  <td style="width: 10%; text-align:center; font-size: 12px;">{{$viatico->distancia}}</td>
                  <td style="width: 5%; text-align:center; font-size: 12px;">{{$via}}</td>
                  <td style="width: 70%; text-align:center; font-size: 12px;">{{$viatico->descripcion}}</td>
                </tr>
              </tbody>
            </table>
            <table style="width:100%; font-size:10">
              <thead>
                <tr style="background: darkgray; text-align: center; font-size: 12px;">
                    <th>MEDIO DIA AL 100%</th>
                    <th>DIA ENTERO AL 100%</th>
                    <th>MEDIO DIA AL 70%</th>
                    <th>DIA ENTERO AL 70%</th>
                    <th>TOTAL VIATICOS</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td style="width: 20%; text-align:center; font-size: 12px;">{{$viatico->medio_dia_100}} </td>
                  <td style="width: 20%; text-align:center; font-size: 12px;">{{$viatico->dia_entero_100}}</td>
                  <td style="width: 20%; text-align:center; font-size: 12px;">{{$viatico->medio_dia_70}}</td>
                  <td style="width: 20%; text-align:center; font-size: 12px;">{{$viatico->dia_entero_70}}</td>
                  <td style="width: 20%; text-align:center; font-size: 12px;">{{$viatico->total_viatico}}</td>
                </tr>
              </tbody>
            </table>
            <table style="width:100%; font-size:10">
              <thead>
                <tr style="background: darkgray; text-align: center; font-size: 12px;">
                    <th>PASAJE(S)</th>
                    <th>RETENCIÓN PASAJE(S)</th>
                    <th>TOTAL PASAJE(S)</th>
                    <th>FLETE(S)</th>
                    <th>RETENCIÓN FLETE(S)</th>
                    <th>TOTAL FLETE(S)</th>
                    <th>TOTAL VIATICOS/PASAJES</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td style="width: 20%; text-align:center; font-size: 12px;">{{$viatico->pasaje}} </td>
                  <td style="width: 20%; text-align:center; font-size: 12px;">{{$viatico->retencion_pasaje}}</td>
                  <td style="width: 20%; text-align:center; font-size: 12px;">{{$viatico->total_pasaje}}</td>
                  <td style="width: 20%; text-align:center; font-size: 12px;">{{$viatico->flete}}</td>
                  <td style="width: 20%; text-align:center; font-size: 12px;">{{$viatico->retencion_flete}}</td>
                  <td style="width: 20%; text-align:center; font-size: 12px;">{{$viatico->total_flete}}</td>
                  <td style="width: 20%; text-align:center; font-size: 12px;">{{$viatico->total_viatico_pasaje}}</td>
                </tr>
              </tbody>
            </table>           
            <br><br>
            <span style="font-size: 12px;">
              Nota: La presenta boleta queda nula y sin valor si contiene enmiendas, borrones o superposiciones.
            </span>
            <br><br>
          </div>
        </div>
      </div>
    </div>    
  </body>
</html>