<?php

namespace App\Exports;

use App\Official;
use App\User;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class OfficialExport implements FromQuery, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'Nama Official',
            'No. Identitas',
            'Posisi',
            'Nama Tim',
            'Putra/Putri'
        ];
    }

    public function query()
    {
        return Official::query()
        ->leftJoin('users', 'official.id_tim', '=', 'users.id')
        ->select('official.nama', 'official.noidentitas', 'official.posisi', 'users.name', 'users.jenis');
    }
}
