<?php

namespace App\Exports;

use App\Peserta;
use App\User;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PemainExport implements FromQuery, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;

    public function headings(): array
    {
        return [
            'Nama Pemain',
            'NRP',
            'No. Punggung',
            'Posisi',
            'Nama Tim',
            'Putra/Putri'
        ];
    }
    public function query()
    {
        return Peserta::query()
        ->leftJoin('users', 'peserta.id_tim', '=', 'users.id')
        ->select('peserta.nama', 'peserta.nrp', 'peserta.nopunggung', 'peserta.posisi', 'users.name', 'users.jenis');
    }
}
