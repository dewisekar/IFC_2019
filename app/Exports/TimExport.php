<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class TimExport implements WithMultipleSheets
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;

    public function sheets(): array
    {
        $sheets = [];

        for($count=1; $count<=2; $count++){
            if($count==1){
                $sheets[] = new PemainExport;
            }
            else{
                $sheets[] = new OfficialExport;
            }
        }

        return $sheets;
    }
}
