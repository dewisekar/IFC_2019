<?php

namespace App\Exports;

use App\Jersey;
use App\User;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class JerseyExport implements FromQuery, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings(): array
    {
        return [

            'Nama Tim',
            'Putra/Putri',
            'Warna Jersey',
            'Warna Celana',
            'Warna Kaos Kaki'
        ];
    }

    public function query()
    {
        return User::query()
        ->leftJoin('jersey', 'users.id', '=', 'jersey.id_tim')
        ->select('users.name', 'users.jenis', 'jersey.jersey', 'jersey.celana', 'jersey.kaoskaki');
    }
}
