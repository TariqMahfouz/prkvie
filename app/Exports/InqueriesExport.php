<?php

namespace App\Exports;

use App\Models\Inquery;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class InqueriesExport implements FromCollection, WithHeadings
{
    /**
     * @return Collection
     */
    public function collection(): Collection
    {
        return Inquery::select(['name', 'phone', 'email', 'unit_type', 'prefered_time', 'created_at'])
            ->get();
    }

    public function headings(): array
    {
        return ['name', 'phone', 'email', 'unit_type', 'prefered_time', 'created_at'];
    }
}
