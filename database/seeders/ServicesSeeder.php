<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;


class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert ([
            'service'=>str::random(10),
            'lastchecked'=>Carbon::now()->format('Y-m-d H:i:s'),
            'status'=>str::random(10)

        ]);

    }
}
