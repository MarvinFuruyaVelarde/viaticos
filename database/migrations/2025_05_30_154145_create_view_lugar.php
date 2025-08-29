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
            CREATE OR REPLACE VIEW public.view_lugar
            AS
            SELECT L.ID,
                   L.DESCRIPCION,
                   L.CIUDAD,
                   C.DESCRIPCION AS desc_ciudad,
                   L.FRONTERA,
                   CASE    
                       WHEN L.FRONTERA = 1 THEN 'SI'
                       ELSE 'NO'
                   END AS DESC_FRONTERA,
                   L.DELETED_AT,
                   E.DESCRIPCION AS estado
              FROM LUGAR L
             INNER JOIN ESTADO E ON E.ID = L.ESTADO
              LEFT JOIN CIUDAD C ON C.ID = L.CIUDAD
             ORDER BY ID;
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('view_lugar');
    }
};
