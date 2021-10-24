<?php

namespace App\Imports;

use App\Models\Nacta;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\RemembersRowNumber;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class NactaImport implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Nacta([
            'category' => $row['category'],
            'name' => $row['name'],
            'aliases' => $row['aliases'],
            'address' => $row['address'],
            'city' => $row['city'],
            'country' => $row['country'],
            'program' => $row['program'],
            'last_occupation' => $row['last_occupation'],
            'birth_date' => $row['birth_date'],
            'birth_country' => $row['birth_country'],
            'residence_country' => $row['residence_country'],
            'nationality' => $row['nationality'],
            'external_id' => $row['external_id'],
            'gender' => $row['gender'],
            'internal_id' => $row['internal_id'],
            'deceased' => $row['deceased'],
            'remarks' => $row['remarks'],
            'data_sources' => $row['data_sources'],
            'related_to' => $row['related_to'],
        ]);
    }


    public function batchSize(): int
    {
        return 1000;
    }

    public function chunkSize(): int
    {
        return 1000;
    }
}
