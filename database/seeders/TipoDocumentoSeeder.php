<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
               ['tipoDocumento'=>'TI'],
               ['tipoDocumento'=>'CC'],
         ];

        DB::table('tipo_documentos')->insert($data);
        
    }
}
