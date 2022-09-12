<?php

namespace App\Imports;

use App\Models\Logistik;
use Maatwebsite\Excel\Concerns\ToModel;

class LogistikImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Logistik([
            //
            'paket'     =>'podos',
            'dari'    => $row[1],
            'ke'    => $row[2],
            'tarif'    => $row[3],
            'muatan_kg'    => $row[4],
            'menir'    => $row[5],
            'tepung_kg_rp'    => $row[6],
            'menir_sak_rp'    => $row[7],
         
    
        ]);
    }
}
