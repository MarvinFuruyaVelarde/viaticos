<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement("
            CREATE OR REPLACE VIEW public.view_feriado
            AS
            SELECT F.ID,
                   F.DESCRIPCION,
                   TO_CHAR(DATE(F.FECHA), 'DD/MM/YYYY') AS FECHA,
                   F.DELETED_AT,
                   E.DESCRIPCION AS estado
              FROM FERIADO F
             INNER JOIN ESTADO E ON E.ID = F.ESTADO
             ORDER BY ID; 
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('view_feriado');
    }
};
