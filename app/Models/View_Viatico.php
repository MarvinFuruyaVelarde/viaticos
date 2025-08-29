<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class View_Viatico extends Model
{
    use HasFactory;

    // Especifica el nombre de la vista 
    protected $table = 'view_viatico';

    // Si la tabla no tiene columnas timestamps (created_at, updated_at)
    public $timestamps = false;

    // Define los campos que se pueden llenar
    protected $fillable = ['id','fecha_registro', 'hoja_ruta', 'beneficiario','ci', 'da', 'cargo', 'origen', 'destino', 'fecha_salida', 'fecha_retorno', 'total_viatico_pasaje', 'estado'];
}
