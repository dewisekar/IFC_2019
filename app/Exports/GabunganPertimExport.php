<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class GabunganPertimExport implements WithMultipleSheets
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;

    private $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function sheets(): array
    {
        $sheets = [];

        for($count=1; $count<=2; $count++){
            if($count==1){
                $sheets[] = new PemainPertimExport($this->id);
            }
            else{
                $sheets[] = new OfficialPertimExport($this->id);
            }
        }

        return $sheets;
    }
}
