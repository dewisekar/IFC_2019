<?php

namespace App\Exports;

use App\Official;
use App\User;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class OfficialPertimExport implements FromQuery, WithHeadings, ShouldAutoSize
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
        ->whereIn('id', [$this->id])
        ->leftJoin('users', 'official.id_tim', '=', 'users.id')
        ->select('official.nama', 'official.noidentitas', 'official.posisi', 'users.name', 'users.jenis');
    }
}
