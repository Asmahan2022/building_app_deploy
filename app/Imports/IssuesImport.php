<?php

namespace App\Imports;

use App\Issue;
use Maatwebsite\Excel\Concerns\ToModel;

class IssuesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Issue([
            //
        ]);
    }
}
