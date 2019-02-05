<?php

namespace App\Exports;

use App\Peserta;
use App\User;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PemainPertimExport implements FromQuery, WithHeadings, ShouldAutoSize
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
        ->whereIn('id', [$this->id])
        ->leftJoin('users', 'peserta.id_tim', '=', 'users.id')
        ->select('peserta.nama', 'peserta.nrp', 'peserta.nopunggung', 'peserta.posisi', 'users.name', 'users.jenis');
    }
}
