<?php

namespace App\Exports;

use App\Models\Logistik;
use Maatwebsite\Excel\Concerns\FromCollection;

class LogistikExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Logistik::all();
    }
}
