<?php

namespace App\Exports;

use App\User;

use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::all();
    }

    public function headings():array
    {
        return [
            'Id',
                'Name',
                'Email',
                'Age',
                'Created At',
                'Updated At',
            ];
        
    }
}
